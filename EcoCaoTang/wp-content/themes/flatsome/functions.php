<?php

/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

flatsome()->init();

/**
 * It's not recommended to add any custom code here. Please use a child theme
 * so that your customizations aren't lost during updates.
 *
 * Learn more here: https://developer.wordpress.org/themes/advanced-topics/child-themes/
 */
update_option('flatsome_wup_purchase_code', '99dcbf02-cd62-41d2-bf60-bf0d62d95d62');
update_option('flatsome_wup_supported_until', '01.01.2050');
update_option('flatsome_wup_buyer', 'Licensed');
update_option('flatsome_wup_sold_at', time());
delete_option('flatsome_wup_errors', '');
delete_option('flatsome_wupdates', '');
