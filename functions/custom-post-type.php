<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/
function cpt_employee() {
	// creating (registering) the custom type
	register_post_type( 'employee', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Employees', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Employee', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Employees', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Employee', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Employee', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Employee', 'jointswp'), /* New Display Title */
			'view_item' => __('View Employee', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Employees', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('No employees found.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the employee custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 20, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-groups', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'team-member', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'employee', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'employee');
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'employee');

}
add_action( 'init', 'cpt_employee');
