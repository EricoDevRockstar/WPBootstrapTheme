<?php
    if ( ! class_exists( 'Kirki' )) {
        return;
    }
    
/* Create a Panel */
new \Kirki\Panel(
	'WP_Bootstrap_Theme_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Subscribe Bar', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'Use this section to customize content.', 'WPBootstrapTheme' ),
	]
);

/* Create a Section */
// The subscribe bar sections
new \Kirki\Section(
	'WP_Bootstrap_Theme_section',
	[
		'title'       => esc_html__( 'Here is the Subscribe bar', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'My Subscribe section bar content here.', 'WPBootstrapTheme' ),
		'panel'       => 'WP_Bootstrap_Theme_panel',
		'priority'    => 160,
	]
);

// Sectiom -- SUbscribe Bar -- Fields/Controls
new \Kirki\Field\Textarea(
	[
		'settings'    => 'subscribe_text',
		'label'       => esc_html__( 'Subscribe Bar Text', 'WPBootstrapTheme' ),
		'section'     => 'WP_Bootstrap_Theme_section',
		'default'     => esc_html__( 'This is a default value', 'WPBootstrapTheme' ),
	]
);

new \Kirki\Field\Code(
	[
		'settings'    => 'subscribe_form',
		'label'       => esc_html__( 'Your Subscribe HTML Form', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'Put your subscribe HTML code form here', 'WPBootstrapTheme' ),
		'section'     => 'WP_Bootstrap_Theme_section',
		'default'     => '',
		'choices'     => [
			'language' => 'HTML',
		],
	]
);

// Section For Footer
new \Kirki\Section(
	'WP_Bootstrap_Theme_section',
	[
		'title'       => esc_html__( 'Here is the Subscribe bar', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'My Subscribe section bar content here.', 'WPBootstrapTheme' ),
		'panel'       => 'WP_Bootstrap_Theme_panel',
		'priority'    => 160,
	]
);

/*

<?php
    if ( ! class_exists( 'Kirki' ) ) {
        return;
    }
 

new \Kirki\Panel(
	'WPBoot_strapTheme_option_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'WP Bootstrap Theme', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'Use this to customize the Bootstrap Theme', 'WPBootstrapTheme' ),
	]
);

// Section - Subscribe Bar
new \Kirki\Section(
	'WPBoot_strapTheme_subscribe_bar',
	[
		'title'       => esc_html__( 'Subscribe Bar', 'WPBootstrapTheme' ),
		'description' => esc_html__( 'This is the subscribe bar.', 'WPBootstrapTheme' ),
		'panel'       => 'WPBoot_strapTheme_option_panel',
		'priority'    => 160,
	]
);

// Section - Subscribe Bar - Fields
new \Kirki\Field\Textarea(
	[
		'settings'    => 'subscribe_text',
		'label'       => esc_html__( 'Subscribe Bar Text', 'WPBootstrapTheme' ),
		'section'     => 'WPBoot_strapTheme_subscribe_bar',
		'default'     => esc_html__( 'This is a default value for the Text Bar', 'WPBootstrapTheme' ),
	]
);
*/