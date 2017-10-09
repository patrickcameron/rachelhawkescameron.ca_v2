<?php
/**
 * Home Page template.
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$templates = array( 'home.twig' );
Timber::render( $templates, $context );
