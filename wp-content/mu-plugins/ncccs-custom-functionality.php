<?php
/**
 * Plugin Name: NCCCS Custom Functionality
 * Description: Must-use plugin for containing theme-agnostic custom functionality for the NCCCS project.
 * Author: Honestly Co.
 */
add_action('graphql_register_types', function () {

  register_graphql_object_type('CustomCheckboxChoice', [
    'description' => 'A custom checkbox choice object used to return ACF field data to the front end.',
    'fields' => [
      'value' => [
        'type' => 'String',
        'description' => 'The checkbox value stored in the database.',
      ],
      'label' => [
        'type' => 'String',
        'description' => 'The checkbox label to display to users.',
      ],
    ],
  ]);

  register_graphql_field('Page_Programsindex', 'degreeTypeChoices', [
    'type' => ['list_of' => 'CustomCheckboxChoice'],
    'description' => 'An array of degree type choices for the degree type filter on the programs page.',
    'resolve' => function () {
      $degree_types_field_id = 'field_651341eb7359c';
      $degree_types_field = acf_get_field($degree_types_field_id);

      if (!$degree_types_field || !isset($degree_types_field['choices'])) {
        error_log('Error: Degree types field with ID ' . $degree_types_field_id . ' not found.');
        return [];
      }

      $choices = $degree_types_field['choices']; // associative array of the form [$choice_value => $choice_label]
  
      $choiceArray = [];
      foreach ($choices as $value => $label) {
        $choiceArray[] = ['value' => $value, 'label' => $label];
      }
      return $choiceArray;
    }
  ]);
});

