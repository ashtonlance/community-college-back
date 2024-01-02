<?php
/**
 * Plugin Name: NCCCS Custom WP CLI Commands
 * Description: Must-use plugin for containing custom CLI commands for more complicated DB updates.
 * Author: Honestly Co.
 */

if (defined('WP_CLI') && WP_CLI) {

    /**
     * A set of CLI commands for migrating old degree types to new ones on programs in the database and auditing the results.
     * 
     * # Usage:
     * ## In development
     * 
     * List usage info:
     * `ddev wp degree_types`
     * 
     * ## In production
     * 
     * After this script is deployed to production through version control, you can run it with the WP CLI over SSH.
     * For example, you can print the usage info with:
     * `ssh -t ncccsstg@ncccsstg.ssh.wpengine.net bash -c "cd /sites/ncccsstg && wp db degree_types"
     * 
     */
    class Degree_Types_Command
    {
        // New degree types to be added
        private $new_degree_types = [
            ['value' => 'associateOfArts', 'label' => 'Associate of Arts'],
            ['value' => 'associateOfEngineering', 'label' => 'Associate of Engineering'],
            ['value' => 'associateOfFineArts', 'label' => 'Associate of Fine Arts'],
            ['value' => 'associateOfScience', 'label' => 'Associate of Science'],
            ['value' => 'associateOfAppliedScience', 'label' => 'Associate of Applied Science'],
            ['value' => 'associateOfGeneralEducation', 'label' => 'Associate of General Education'],
            ['value' => 'certificate', 'label' => 'Certificate'],
            ['value' => 'collegeTransferPathway', 'label' => 'College Transfer Pathway'],
            ['value' => 'diploma', 'label' => 'Diploma'],
            ['value' => 'workforceContinuingEducation', 'label' => 'Workforce Continuing Education']
        ];

        // Mapping of old degree types to new degree types
        private $degree_type_values_mapping = [
            'certificateassociateOfAppliedScience' => ['associateOfAppliedScience', 'certificate'],
            'associateOfAppliedScience and certificate' => ['associateOfAppliedScience', 'certificate'],
            'associateInScience' => ['associateOfScience'],
            'associatesInGeneralEducation' => ['associateOfGeneralEducation'],
            'associateInFineArts' => ['associateOfFineArts'],
            'associateInEngineering' => ['associateOfEngineering'],
            'AssociatesInArts' => ['associateOfArts'],
        ];

        /**
         * Lists current degree types from the database
         */
        public function list_current_db($args, $assoc_args)
        {
            $all_programs = get_posts([
                'post_type' => 'programs',
                'posts_per_page' => -1, // All posts
            ]);

            if (!$all_programs) {
                WP_CLI::error("Failed to retrieve programs.");
                return;
            }

            $current_degree_types = [];
            foreach ($all_programs as $program) {
                $degree_types = get_field('degree_types', $program->ID);
                if (is_array($degree_types)) {
                    foreach ($degree_types as $type) {
                        if (!isset($current_degree_types[$type])) {
                            $current_degree_types[$type] = 0; // Initialize count to 0
                        }
                        $current_degree_types[$type] += 1; // Increment count for this type
                    }
                }
            }

            WP_CLI::log(print_r($current_degree_types, true));
        }

        /**
         * Prints new ACF choices for degree types
         */
        public function print_acf_choices($args, $assoc_args)
        {
            $acf_choices_string = "";
            foreach ($this->new_degree_types as $degree_type) {
                $acf_choices_string .= $degree_type['value'] . " : " . $degree_type['label'] . "\n";
            }

            WP_CLI::log($acf_choices_string);
        }

        /**
         * Migrates old degree types to new ones in the database
         */
        public function migrate($args, $assoc_args)
        {
            $all_programs = get_posts([
                'post_type' => 'programs',
                'posts_per_page' => -1, // get all programs at once
            ]);

            if (!$all_programs) {
                WP_CLI::error("Failed to retrieve programs.");
                return;
            }

            $updated_program_ids = [];
            foreach ($all_programs as $program) {
                $old_field_types = get_field('degree_types', $program->ID);
                if (!$old_field_types) {
                    WP_CLI::log("No degree types found for program ID: " . $program->ID);
                    continue;
                }

                $new_field_types = [];

                foreach ($old_field_types as $old_type) {
                    if (array_key_exists($old_type, $this->degree_type_values_mapping)) {
                        $new_field_types = array_merge($new_field_types, $this->degree_type_values_mapping[$old_type]);
                        WP_CLI::log("Updating an instance of old type: " . $old_type . " to new types: " . json_encode($this->degree_type_values_mapping[$old_type]));
                        $updated_program_ids[$program->ID] = true;
                    } else {
                        array_push($new_field_types, $old_type);
                    }
                }

                update_field('degree_types', $new_field_types, $program->ID);
            }

            WP_CLI::success(count(array_keys($updated_program_ids)) . " programs updated.");
        }
    }

    WP_CLI::add_command('degree_types', 'Degree_Types_Command');
}
