<?php
/**
 * Gallery post type template.
 *
 */
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$templates = array( 'single-gallery.twig' );
Timber::render( $templates, $context );
