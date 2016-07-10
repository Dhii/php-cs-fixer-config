<?php

namespace Dhii\Configuration\PHPCSFixer;

use Symfony\CS\Config\Config as PHPCSFixerConfig;

/**
 * A standard, default PHP CS Fixer configuration for Dhii projects.
 *
 * @author Dhii Team <development@dhii.co>
 *
 * @since [*next-version*]
 */
class Config extends PHPCSFixerConfig
{
    /**
     * {@inheritdoc}
     *
     * Here only changing the name and description defaults.
     *
     * @since [*next-version*]
     */
    public function __construct($name = 'dhii', $description = 'The code standards configuration for Dhii projects')
    {
        parent::__construct($name, $description);
    }

    /**
     * {@inheritdoc}
     *
     * This overriding implementation sets fixers.
     *
     * @return Config A new, set-up instance of the configuration class.
     *
     * @since [*next-version*]
     */
    public static function create()
    {
        $config = parent::create();
        $config->level(\Symfony\CS\FixerInterface::SYMFONY_LEVEL);
        $config->fixers(static::getApplicableRules());

        return $config;
    }

    /**
     * Return all the rules that should be part of the config.
     *
     * @return array Format for version <2.0 is numeric array of strings.
     *
     * @since [*next-version*]
     */
    public static function getApplicableRules()
    {
        return array_flip(array_merge(array_flip(static::getSymfonyRules()), array_flip(static::getContribRules())));
    }

    /**
     * @todo Use this when using CS Fixer >= 2.0
     *
     * @return array Rules of the PSR-2 level that are applicable to this config.
     *
     * @since [*next-version*]
     */
    public static function getPsr2Rules()
    {
        return [
            '@PSR2' => true,
        ];
    }

    /**
     * Gets rules for the Symfony level.
     *
     * @since [*next-version*]
     *
     * @return array Format for verison <2.0 is numeric array of strings.
     */
    public static function getSymfonyRules()
    {
        return array_keys(array_filter(static::getSymfonyRules20()));
    }

    /**
     * Gets rules of the Symfony level that are applicable to this config.
     *
     * @todo Rename to `getSymfonyRules()` and use when using CS Fixer >= 2.0
     *
     * @return array Map of rule name (strig) to enabled/disabled (bool)
     *
     * @since [*next-version*]
     */
    public static function getSymfonyRules20()
    {
        return [
            'blank_line_after_opening_tag'                => true,
            'blank_line_before_return'                    => true,
            'cast_spaces'                                 => true,
            'concat_without_spaces'                       => false,
            'function_typehint_space'                     => true,
            'hash_to_slash_comment'                       => true,
            'heredoc_to_nowdoc'                           => false,
            'include'                                     => true,
            'lowercase_cast'                              => true,
            'method_separation'                           => true,
            'native_function_casing'                      => true,
            'new_with_braces'                             => true,
            'no_alias_functions'                          => true,
            'no_blank_lines_after_class_opening'          => true,
            'no_blank_lines_after_phpdoc'                 => true,
            'no_empty_statement'                          => true,
            'no_extra_consecutive_blank_lines'            => true,
            'no_leading_import_slash'                     => true,
            'no_leading_namespace_whitespace'             => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_short_bool_cast'                          => true,
            'no_singleline_whitespace_before_semicolons'  => true,
            'no_spaces_inside_offset'                     => true,
            'no_trailing_comma_in_list_call'              => true,
            'no_trailing_comma_in_singleline_array'       => true,
            'no_unneeded_control_parentheses'             => true,
            'no_unreachable_default_argument_value'       => true,
            'no_unused_imports'                           => true,
            'no_whitespace_before_comma_in_array'         => true,
            'no_whitespace_in_blank_lines'                => true,
            'object_operator_without_whitespace'          => true,
            'phpdoc_align'                                => true,
            'phpdoc_indent'                               => true,
            'phpdoc_inline_tag'                           => true,
            'phpdoc_no_access'                            => true,
            'phpdoc_no_empty_return'                      => true,
            'phpdoc_no_package'                           => true,
            'phpdoc_scalar'                               => true,
            'phpdoc_separation'                           => true,
            'phpdoc_single_line_var_spacing'              => true,
            'phpdoc_summary'                              => true,
            'phpdoc_to_comment'                           => true,
            'phpdoc_trim'                                 => true,
            'phpdoc_type_to_var'                          => true,
            'phpdoc_types'                                => true,
            'phpdoc_var_without_name'                     => true,
            'pre_increment'                               => true,
            'print_to_echo'                               => false,
            'self_accessor'                               => false,
            'short_scalar_cast'                           => true,
            'simplified_null_return'                      => true,
            'single_blank_line_before_namespace'          => true,
            'single_quote'                                => true,
            'space_after_semicolon'                       => true,
            'standardize_not_equals'                      => true,
            'ternary_operator_spaces'                     => true,
            'trailing_comma_in_multiline_array'           => true,
            'trim_array_spaces'                           => true,
            'unalign_double_arrow'                        => true,
            'unalign_equals'                              => true,
            'unary_operator_spaces'                       => true,
            'whitespace_after_comma_in_array'             => true,
        ];
    }

    /**
     * Gets contribution level rules.
     *
     * @return array Formad for <2.0 is numeric array of strings.
     *
     * @since [*next-version*]
     */
    public static function getContribRules()
    {
        return array_keys(array_filter(static::getContribRules20()));
    }

    /**
     * @todo Rename to `getSymfonyRules()` and use when using CS Fixer >= 2.0
     *
     * @return array Map of rule names (string) to enabled/disabled (bool)
     *
     * @since [*next-version*]
     */
    public static function getContribRules20()
    {
        return [
            'align_double_arrow'                        => true,
            'align_equals'                              => true,
            'combine_consecutive_unsets'                => false,
            'concat_with_spaces'                        => true,
            'ereg_to_preg'                              => false,
            'echo_to_print'                             => false,
            'dir_constant'                              => false,
            'header_comment'                            => false,
            'linebreak_after_opening_tag'               => true,
            'long_array_syntax'                         => false,
            'modernize_types_casting'                   => false,
            'no_blank_lines_before_namespace'           => false,
            'no_empty_comment'                          => true,
            'no_multiline_whitespace_before_semicolons' => false,
            'no_php4_constructor'                       => true,
            'no_short_echo_tag'                         => true,
            'no_useless_else'                           => false,
            'no_useless_return'                         => true,
            'not_operator_with_space'                   => false,
            'not_operator_with_successor_space'         => false,
            'ordered_class_elements'                    => false,
            'ordered_imports'                           => true,
            'phpdoc_order'                              => true,
            'phpdoc_property'                           => false,
            'phpdoc_var_to_type'                        => false,
            'php_unit_construct'                        => false,
            'php_unit_dedicate_assert'                  => false,
            'php_unit_strict'                           => false,
            'psr0'                                      => false,
            'random_api_migration'                      => false,
            'short_array_syntax'                        => true,
            'strict_comparison'                         => false,
            'strict_param'                              => false,
        ];
    }
}
