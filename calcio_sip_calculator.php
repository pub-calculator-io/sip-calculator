<?php
/*
Plugin Name: SIP Сalculator by Calculator.iO
Plugin URI: https://www.calculator.io/sip-calculator/
Description: Calculate mutual fund returns and estimate future wealth with our free SIP Calculator. Plan your Systematic Investment Plan today to make smart investments.
Version: 1.0.0
Author: www.calculator.io / SIP Сalculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_sip_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for SIP Сalculator by www.calculator.io";

function calcio_sip_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">SIP Сalculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_sip_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_sip_calculator', 'calcio_sip_calculator_shortcode' );