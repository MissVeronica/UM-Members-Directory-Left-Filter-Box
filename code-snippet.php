<?php
/**
 * Template for the members directory
 *
 * This template can be overridden by copying it to yourtheme/ultimate-member/members.php
 *
 * Page: "Members"
 *
 * @version 2.6.8
 *
 * @var array $args
 */
// Customized members.php 
// Single column filters to the left only for large screens using members-screen.php
// Default UM template for Tablets and Mobiles
// Version 3.0
// Tested with UM 2.8.3 2024-02-19
// https://github.com/MissVeronica/UM-Members-Directory-Left-Filter-Box

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'UM' ) ) return;
if ( UM()->mobile()->isMobile() || UM()->mobile()->isTablet()) {
    $located = UM_PATH . 'templates' . DIRECTORY_SEPARATOR . 'members.php';
} else {
    $located = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'members-screen.php';    
}
include $located;
