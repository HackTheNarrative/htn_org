<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

    require_once('page-templates/jumbotron-home.php');
    require_once('page-templates/home-mission.php');
    
get_footer();