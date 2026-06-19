<?php
/**
 * Lotus Theme Functions and Definitions
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Setup Theme Support
 */
function lotus_theme_setup() {
	// Add support for document title tag
	add_theme_support( 'title-tag' );

	// Add support for Post Thumbnails (featured images for doctors)
	add_theme_support( 'post-thumbnails' );

	// Enable HTML5 markup support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'lotus_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function lotus_enqueue_assets() {
	// Enqueue main stylesheet.
	wp_enqueue_style( 'lotus-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'lotus_enqueue_assets' );

/**
 * Register Doctor Custom Post Type
 */
function lotus_register_doctor_cpt() {
	$labels = array(
		'name'                  => _x( 'Doctors', 'Post type general name', 'lotus' ),
		'singular_name'         => _x( 'Doctor', 'Post type singular name', 'lotus' ),
		'menu_name'             => _x( 'Doctors', 'Admin Menu text', 'lotus' ),
		'name_admin_bar'        => _x( 'Doctor', 'Add New on Toolbar', 'lotus' ),
		'add_new'               => __( 'Add New', 'lotus' ),
		'add_new_item'          => __( 'Add New Doctor', 'lotus' ),
		'new_item'              => __( 'New Doctor', 'lotus' ),
		'edit_item'             => __( 'Edit Doctor', 'lotus' ),
		'view_item'             => __( 'View Doctor', 'lotus' ),
		'all_items'             => __( 'All Doctors', 'lotus' ),
		'search_items'          => __( 'Search Doctors', 'lotus' ),
		'parent_item_colon'     => __( 'Parent Doctors:', 'lotus' ),
		'not_found'             => __( 'No doctors found.', 'lotus' ),
		'not_found_in_trash'    => __( 'No doctors found in Trash.', 'lotus' ),
		'featured_image'        => _x( 'Doctor Photo', 'Overrides the “Featured Image” label', 'lotus' ),
		'set_featured_image'    => _x( 'Set Doctor Photo', 'Overrides the “Set featured image” label', 'lotus' ),
		'remove_featured_image' => _x( 'Remove Doctor Photo', 'Overrides the “Remove featured image” label', 'lotus' ),
		'use_featured_image'    => _x( 'Use as Doctor Photo', 'Overrides the “Use as featured image” label', 'lotus' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'doctors' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'        => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-businessman',
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest'       => true, // Enable Gutenberg editor block support
	);

	register_post_type( 'doctor', $args );
}
add_action( 'init', 'lotus_register_doctor_cpt' );

/**
 * Add Custom Fields for Doctor CPT
 */
function lotus_add_doctor_meta_boxes() {
	add_meta_box(
		'doctor_details_meta_box',
		__( 'Doctor Details (Figma Fields)', 'lotus' ),
		'lotus_render_doctor_meta_box',
		'doctor',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'lotus_add_doctor_meta_boxes' );

function lotus_render_doctor_meta_box( $post ) {
	// Use nonce for verification
	wp_nonce_field( 'lotus_save_doctor_meta', 'lotus_doctor_nonce' );

	// Retrieve existing values
	$specialty       = get_post_meta( $post->ID, '_doctor_specialty', true );
	$experience      = get_post_meta( $post->ID, '_doctor_experience', true );
	$patients        = get_post_meta( $post->ID, '_doctor_patients', true );
	$success_rate    = get_post_meta( $post->ID, '_doctor_success_rate', true );
	$phone           = get_post_meta( $post->ID, '_doctor_phone', true );
	$expertise       = get_post_meta( $post->ID, '_doctor_expertise', true );
	$education       = get_post_meta( $post->ID, '_doctor_education', true );
	$awards          = get_post_meta( $post->ID, '_doctor_awards', true );
	?>
	<div style="font-family: sans-serif; padding: 10px;">
		<table class="form-table" style="width: 100%;">
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_specialty"><?php _e( 'Specialty Description', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_specialty" name="doctor_specialty" value="<?php echo esc_attr( $specialty ); ?>" style="width: 100%;" placeholder="e.g. Senior Consultant Neonatologist" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_experience"><?php _e( 'Years of Experience', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_experience" name="doctor_experience" value="<?php echo esc_attr( $experience ); ?>" style="width: 100%;" placeholder="e.g. 18+ Yrs" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_patients"><?php _e( 'Patients Treated', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_patients" name="doctor_patients" value="<?php echo esc_attr( $patients ); ?>" style="width: 100%;" placeholder="e.g. 15,000+" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_success_rate"><?php _e( 'Success Rate', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_success_rate" name="doctor_success_rate" value="<?php echo esc_attr( $success_rate ); ?>" style="width: 100%;" placeholder="e.g. 99.2%" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_phone"><?php _e( 'Phone Number (Call Now)', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_phone" name="doctor_phone" value="<?php echo esc_attr( $phone ); ?>" style="width: 100%;" placeholder="e.g. +91 40 4000 6000" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_expertise"><?php _e( 'Areas of Expertise (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_expertise" name="doctor_expertise" rows="4" style="width: 100%;" placeholder="e.g.&#10;Child Development&#10;High-Risk Pregnancy&#10;Pediatric Surgery&#10;Vaccinations"><?php echo esc_textarea( $expertise ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_education"><?php _e( 'Education & Qualifications (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_education" name="doctor_education" rows="4" style="width: 100%;" placeholder="e.g.&#10;MBBS - Osmania Medical College, Hyderabad&#10;MD Pediatrics - Niloufer Hospital for Women and Children&#10;Fellowship in Neonatology - Royal College of Pediatrics UK"><?php echo esc_textarea( $education ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_awards"><?php _e( 'Awards & Recognition (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_awards" name="doctor_awards" rows="4" style="width: 100%;" placeholder="e.g.&#10;Best Neonatologist Award&#10;Gold Medal in Pediatrics&#10;Outstanding Clinician Award"><?php echo esc_textarea( $awards ); ?></textarea>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function lotus_save_doctor_meta( $post_id ) {
	// Debug logging to analyze post save parameters
	$log_file = __DIR__ . '/debug-save.log';
	$log_data = "Date: " . date('Y-m-d H:i:s') . "\n";
	$log_data .= "Post ID: " . $post_id . "\n";
	$log_data .= "Post Type: " . get_post_type( $post_id ) . "\n";
	$log_data .= "POST variables:\n" . print_r( $_POST, true ) . "\n";
	file_put_contents( $log_file, $log_data, FILE_APPEND );

	// Verify nonce
	if ( ! isset( $_POST['lotus_doctor_nonce'] ) || ! wp_verify_nonce( $_POST['lotus_doctor_nonce'], 'lotus_save_doctor_meta' ) ) {
		file_put_contents( $log_file, "Nonce check FAILED!\n----------------------------------------\n", FILE_APPEND );
		return;
	}
	file_put_contents( $log_file, "Nonce check PASSED!\n", FILE_APPEND );

	// Prevent auto-save
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		file_put_contents( $log_file, "Autosave check FAILED!\n----------------------------------------\n", FILE_APPEND );
		return;
	}
	file_put_contents( $log_file, "Autosave check PASSED!\n", FILE_APPEND );

	// Check permissions
	if ( isset( $_POST['post_type'] ) && 'doctor' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			file_put_contents( $log_file, "Permissions check FAILED!\n----------------------------------------\n", FILE_APPEND );
			return;
		}
	}
	file_put_contents( $log_file, "Permissions check PASSED!\n", FILE_APPEND );

	// Prevent auto-save
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check permissions
	if ( isset( $_POST['post_type'] ) && 'doctor' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	// Update text fields
	$fields = array(
		'doctor_specialty'    => '_doctor_specialty',
		'doctor_experience'   => '_doctor_experience',
		'doctor_patients'     => '_doctor_patients',
		'doctor_success_rate' => '_doctor_success_rate',
		'doctor_phone'        => '_doctor_phone',
	);

	foreach ( $fields as $post_key => $meta_key ) {
		if ( isset( $_POST[ $post_key ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $post_key ] ) );
		}
	}

	// Update textarea fields
	$textarea_fields = array(
		'doctor_expertise' => '_doctor_expertise',
		'doctor_education' => '_doctor_education',
		'doctor_awards'    => '_doctor_awards',
	);

	foreach ( $textarea_fields as $post_key => $meta_key ) {
		if ( isset( $_POST[ $post_key ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_textarea_field( $_POST[ $post_key ] ) );
		}
	}
}
add_action( 'save_post', 'lotus_save_doctor_meta' );

/**
 * Register Nav Menu
 */
function lotus_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lotus' ),
        'footer'  => __( 'Footer Menu', 'lotus' ),
    ) );
}
add_action( 'init', 'lotus_register_menus' );
