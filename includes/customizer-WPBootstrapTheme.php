<?php
    if ( !class_exists('kirki')) {
        return;
    }
    
/* Create a Panel */
new \Kirki\Panel(
	'WP_Boostrap_Theme_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Boostrap Theme Options', 'WPBoostrapTheme' ),
		'description' => esc_html__( 'Use this section to customize content.', 'WPBoostrapThemei' ),
	]
);

/* Create a Section */
// The subscribe bar section
new \Kirki\Section(
	'WP_Boostrap_Theme_section',
	[
		'title'       => esc_html__( 'Here is the Subscribe bar', 'WPBoostrapTheme' ),
		'description' => esc_html__( 'My Subscribe section bar content here.', 'WPBoostrapTheme' ),
		'panel'       => 'WP_Boostrap_Theme_panel',
		'priority'    => 160,
	]
);
