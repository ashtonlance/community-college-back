<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f221e53a33de99d31bcd05bc93efa77
{
    public static $files = array (
        '5497c78a68233b7c788b3645e30836c9' => __DIR__ . '/../..' . '/access-functions.php',
        'ece33dbb4e7ec404ad440911185c138f' => __DIR__ . '/../..' . '/activation.php',
        'fc71f6d65e905a985ab774ccfa264359' => __DIR__ . '/../..' . '/deactivation.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\Acf\\' => 14,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\Acf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\Acf\\AcfGraphQLFieldResolver' => __DIR__ . '/../..' . '/src/AcfGraphQLFieldResolver.php',
        'WPGraphQL\\Acf\\AcfGraphQLFieldType' => __DIR__ . '/../..' . '/src/AcfGraphQLFieldType.php',
        'WPGraphQL\\Acf\\Admin\\OptionsPageRegistration' => __DIR__ . '/../..' . '/src/Admin/OptionsPageRegistration.php',
        'WPGraphQL\\Acf\\Admin\\PostTypeRegistration' => __DIR__ . '/../..' . '/src/Admin/PostTypeRegistration.php',
        'WPGraphQL\\Acf\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPGraphQL\\Acf\\Admin\\TaxonomyRegistration' => __DIR__ . '/../..' . '/src/Admin/TaxonomyRegistration.php',
        'WPGraphQL\\Acf\\Data\\Loader\\AcfOptionsPageLoader' => __DIR__ . '/../..' . '/src/Data/Loader/AcfOptionsPageLoader.php',
        'WPGraphQL\\Acf\\FieldConfig' => __DIR__ . '/../..' . '/src/FieldConfig.php',
        'WPGraphQL\\Acf\\FieldTypeRegistry' => __DIR__ . '/../..' . '/src/FieldTypeRegistry.php',
        'WPGraphQL\\Acf\\FieldType\\ButtonGroup' => __DIR__ . '/../..' . '/src/FieldType/ButtonGroup.php',
        'WPGraphQL\\Acf\\FieldType\\Checkbox' => __DIR__ . '/../..' . '/src/FieldType/Checkbox.php',
        'WPGraphQL\\Acf\\FieldType\\CloneField' => __DIR__ . '/../..' . '/src/FieldType/CloneField.php',
        'WPGraphQL\\Acf\\FieldType\\ColorPicker' => __DIR__ . '/../..' . '/src/FieldType/ColorPicker.php',
        'WPGraphQL\\Acf\\FieldType\\DatePicker' => __DIR__ . '/../..' . '/src/FieldType/DatePicker.php',
        'WPGraphQL\\Acf\\FieldType\\DateTimePicker' => __DIR__ . '/../..' . '/src/FieldType/DateTimePicker.php',
        'WPGraphQL\\Acf\\FieldType\\Email' => __DIR__ . '/../..' . '/src/FieldType/Email.php',
        'WPGraphQL\\Acf\\FieldType\\File' => __DIR__ . '/../..' . '/src/FieldType/File.php',
        'WPGraphQL\\Acf\\FieldType\\FlexibleContent' => __DIR__ . '/../..' . '/src/FieldType/FlexibleContent.php',
        'WPGraphQL\\Acf\\FieldType\\Gallery' => __DIR__ . '/../..' . '/src/FieldType/Gallery.php',
        'WPGraphQL\\Acf\\FieldType\\GoogleMap' => __DIR__ . '/../..' . '/src/FieldType/GoogleMap.php',
        'WPGraphQL\\Acf\\FieldType\\Group' => __DIR__ . '/../..' . '/src/FieldType/Group.php',
        'WPGraphQL\\Acf\\FieldType\\Image' => __DIR__ . '/../..' . '/src/FieldType/Image.php',
        'WPGraphQL\\Acf\\FieldType\\Link' => __DIR__ . '/../..' . '/src/FieldType/Link.php',
        'WPGraphQL\\Acf\\FieldType\\Number' => __DIR__ . '/../..' . '/src/FieldType/Number.php',
        'WPGraphQL\\Acf\\FieldType\\Oembed' => __DIR__ . '/../..' . '/src/FieldType/Oembed.php',
        'WPGraphQL\\Acf\\FieldType\\PageLink' => __DIR__ . '/../..' . '/src/FieldType/PageLink.php',
        'WPGraphQL\\Acf\\FieldType\\Password' => __DIR__ . '/../..' . '/src/FieldType/Password.php',
        'WPGraphQL\\Acf\\FieldType\\PostObject' => __DIR__ . '/../..' . '/src/FieldType/PostObject.php',
        'WPGraphQL\\Acf\\FieldType\\Radio' => __DIR__ . '/../..' . '/src/FieldType/Radio.php',
        'WPGraphQL\\Acf\\FieldType\\Range' => __DIR__ . '/../..' . '/src/FieldType/Range.php',
        'WPGraphQL\\Acf\\FieldType\\Relationship' => __DIR__ . '/../..' . '/src/FieldType/Relationship.php',
        'WPGraphQL\\Acf\\FieldType\\Repeater' => __DIR__ . '/../..' . '/src/FieldType/Repeater.php',
        'WPGraphQL\\Acf\\FieldType\\Select' => __DIR__ . '/../..' . '/src/FieldType/Select.php',
        'WPGraphQL\\Acf\\FieldType\\Taxonomy' => __DIR__ . '/../..' . '/src/FieldType/Taxonomy.php',
        'WPGraphQL\\Acf\\FieldType\\Text' => __DIR__ . '/../..' . '/src/FieldType/Text.php',
        'WPGraphQL\\Acf\\FieldType\\Textarea' => __DIR__ . '/../..' . '/src/FieldType/Textarea.php',
        'WPGraphQL\\Acf\\FieldType\\TimePicker' => __DIR__ . '/../..' . '/src/FieldType/TimePicker.php',
        'WPGraphQL\\Acf\\FieldType\\TrueFalse' => __DIR__ . '/../..' . '/src/FieldType/TrueFalse.php',
        'WPGraphQL\\Acf\\FieldType\\Url' => __DIR__ . '/../..' . '/src/FieldType/Url.php',
        'WPGraphQL\\Acf\\FieldType\\User' => __DIR__ . '/../..' . '/src/FieldType/User.php',
        'WPGraphQL\\Acf\\FieldType\\Wysiwyg' => __DIR__ . '/../..' . '/src/FieldType/Wysiwyg.php',
        'WPGraphQL\\Acf\\LocationRules\\LocationRules' => __DIR__ . '/../..' . '/src/LocationRules/LocationRules.php',
        'WPGraphQL\\Acf\\Model\\AcfOptionsPage' => __DIR__ . '/../..' . '/src/Model/AcfOptionsPage.php',
        'WPGraphQL\\Acf\\Registry' => __DIR__ . '/../..' . '/src/Registry.php',
        'WPGraphQL\\Acf\\ThirdParty' => __DIR__ . '/../..' . '/src/ThirdParty.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\AcfExtended' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/AcfExtended.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeAdvancedLink' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeAdvancedLink.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeCodeEditor' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeCodeEditor.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeCountries' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeCountries.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeCurrencies' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeCurrencies.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeDateRangePicker' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeDateRangePicker.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeImageSelector' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeImageSelector.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeImageSizes' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeImageSizes.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeLanguages' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeLanguages.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeMenuLocations' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeMenuLocations.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeMenus' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeMenus.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfePhoneNumber' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfePhoneNumber.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfePostFormats' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfePostFormats.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeTaxonomies' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeTaxonomies.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeTaxonomyTerms' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeTaxonomyTerms.php',
        'WPGraphQL\\Acf\\ThirdParty\\AcfExtended\\FieldType\\AcfeUserRoles' => __DIR__ . '/../..' . '/src/ThirdParty/AcfExtended/FieldType/AcfeUserRoles.php',
        'WPGraphQL\\Acf\\ThirdParty\\WPGraphQLContentBlocks\\WPGraphQLContentBlocks' => __DIR__ . '/../..' . '/src/ThirdParty/WPGraphQLContentBlocks/WPGraphQLContentBlocks.php',
        'WPGraphQL\\Acf\\ThirdParty\\WPGraphQLSmartCache\\WPGraphQLSmartCache' => __DIR__ . '/../..' . '/src/ThirdParty/WPGraphQLSmartCache/WPGraphQLSmartCache.php',
        'WPGraphQL\\Acf\\Utils' => __DIR__ . '/../..' . '/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f221e53a33de99d31bcd05bc93efa77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f221e53a33de99d31bcd05bc93efa77::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f221e53a33de99d31bcd05bc93efa77::$classMap;

        }, null, ClassLoader::class);
    }
}
