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
	$specialty         = get_post_meta( $post->ID, '_doctor_specialty', true );
	$experience        = get_post_meta( $post->ID, '_doctor_experience', true );
	$department        = get_post_meta( $post->ID, '_doctor_department', true );
	$working_hours     = get_post_meta( $post->ID, '_doctor_working_hours', true );
	$phone             = get_post_meta( $post->ID, '_doctor_phone', true );
	$expertise         = get_post_meta( $post->ID, '_doctor_expertise', true );
	$education         = get_post_meta( $post->ID, '_doctor_education', true );
	$experience_detail = get_post_meta( $post->ID, '_doctor_experience_detail', true );
	$awards            = get_post_meta( $post->ID, '_doctor_awards', true );
	$show_in_experts   = get_post_meta( $post->ID, '_doctor_show_in_experts', true );
	$location          = get_post_meta( $post->ID, '_doctor_location', true );
	$filter            = get_post_meta( $post->ID, '_doctor_filter', true );
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
				<th style="width: 20%; text-align: left;"><label for="doctor_department"><?php _e( 'Department', 'lotus' ); ?></label></th>
				<td>
					<input type="text" id="doctor_department" name="doctor_department" value="<?php echo esc_attr( $department ); ?>" style="width: 100%;" placeholder="e.g. Pediatrics" />
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_location"><?php _e( 'Location', 'lotus' ); ?></label></th>
				<td>
					<select id="doctor_location" name="doctor_location" style="width: 100%;">
						<option value="Hyderabad" <?php selected( $location, 'Hyderabad' ); ?>>Hyderabad</option>
						<option value="Rajahmundry" <?php selected( $location, 'Rajahmundry' ); ?>>Rajahmundry</option>
					</select>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_filter"><?php _e( 'Filter (Care Type)', 'lotus' ); ?></label></th>
				<td>
					<select id="doctor_filter" name="doctor_filter" style="width: 100%;">
						<option value="child care" <?php selected( $filter, 'child care' ); ?>>Child Care</option>
						<option value="Woman care" <?php selected( $filter, 'Woman care' ); ?>>Woman Care</option>
					</select>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_working_hours"><?php _e( 'Working Hours (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_working_hours" name="doctor_working_hours" rows="3" style="width: 100%;" placeholder="e.g.&#10;Mon - Sun 10:30 A.M. 01:00 P.M.&#10;Mon - Sun 05:00 P.M. 08:00 P.M."><?php echo esc_textarea( $working_hours ); ?></textarea>
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
				<th style="width: 20%; text-align: left;"><label for="doctor_experience_detail"><?php _e( 'Experience Details (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_experience_detail" name="doctor_experience_detail" rows="4" style="width: 100%;" placeholder="e.g.&#10;He received specialised training in Neonatology...&#10;Instrumental in bringing advanced children s health..."><?php echo esc_textarea( $experience_detail ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_awards"><?php _e( 'Awards & Recognition (One per line)', 'lotus' ); ?></label></th>
				<td>
					<textarea id="doctor_awards" name="doctor_awards" rows="4" style="width: 100%;" placeholder="e.g.&#10;Best Neonatologist Award&#10;Gold Medal in Pediatrics&#10;Outstanding Clinician Award"><?php echo esc_textarea( $awards ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th style="width: 20%; text-align: left;"><label for="doctor_show_in_experts"><?php _e( 'Show in Experts Section', 'lotus' ); ?></label></th>
				<td>
					<input type="checkbox" id="doctor_show_in_experts" name="doctor_show_in_experts" value="1" <?php checked( $show_in_experts, '1' ); ?> />
					<span class="description"><?php _e( 'Display this doctor in the Home Page Experts Section.', 'lotus' ); ?></span>
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
		'doctor_department'   => '_doctor_department',
		'doctor_phone'        => '_doctor_phone',
		'doctor_location'     => '_doctor_location',
		'doctor_filter'       => '_doctor_filter',
	);

	foreach ( $fields as $post_key => $meta_key ) {
		if ( isset( $_POST[ $post_key ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $post_key ] ) );
		}
	}

	// Update textarea fields
	$textarea_fields = array(
		'doctor_working_hours'     => '_doctor_working_hours',
		'doctor_expertise'         => '_doctor_expertise',
		'doctor_education'         => '_doctor_education',
		'doctor_experience_detail' => '_doctor_experience_detail',
		'doctor_awards'            => '_doctor_awards',
	);

	foreach ( $textarea_fields as $post_key => $meta_key ) {
		if ( isset( $_POST[ $post_key ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_textarea_field( $_POST[ $post_key ] ) );
		}
	}

	// Update checkbox fields
	$show_in_experts = isset( $_POST['doctor_show_in_experts'] ) ? '1' : '0';
	update_post_meta( $post_id, '_doctor_show_in_experts', $show_in_experts );
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

/**
 * Retrieve doctor excerpt/description for archive cards
 */
function lotus_get_doctor_excerpt( $post_id, $limit = 120 ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return '';
	}

	$excerpt = '';
	// Check for explicit excerpt
	if ( has_excerpt( $post_id ) ) {
		$excerpt = get_the_excerpt( $post_id );
	} else {
		// Strip shortcodes and HTML from content
		$excerpt = wp_strip_all_tags( strip_shortcodes( $post->post_content ) );
	}

	$excerpt = trim( preg_replace( '/\s+/', ' ', $excerpt ) );

	// Fallback to predefined premium description if empty in WordPress database
	if ( empty( $excerpt ) ) {
		$title = get_the_title( $post_id );
		if ( strpos( $title, 'Satish Ghanta' ) !== false ) {
			$excerpt = 'Dr. Satish Ghanta is a highly distinguished Neonatologist and Pediatrician with over 16 years of dedicated service in neonatal intensive care and child healthcare.';
		} elseif ( strpos( $title, 'V.S.V. Prasad' ) !== false ) {
			$excerpt = 'Dr. V.S.V. Prasad is a highly distinguished Neonatologist and Pediatrician with over 35 years of clinical child care expertise.';
		} elseif ( strpos( $title, 'Mehul' ) !== false ) {
			$excerpt = 'Dr. Mehul Shah is a Senior Consultant Pediatric Nephrologist specializing in pediatric kidney transplants and chronic kidney care.';
		} elseif ( strpos( $title, 'Roopa' ) !== false ) {
			$excerpt = 'Dr. Roopa Ghanta is a highly experienced gynecologist and obstetrician specializing in high-risk pregnancy and maternal health.';
		} elseif ( strpos( $title, 'Ramana' ) !== false ) {
			$excerpt = 'Dr. Ramana Dandamudi is a renowned Pediatric Hematologist & Oncologist specializing in advanced childhood cancer treatments.';
		} else {
			$excerpt = 'Expert consultant providing comprehensive, compassionate pediatric and neonatal healthcare services at Lotus Hospitals.';
		}
	}

	// Trim to character limit
	if ( strlen( $excerpt ) > $limit ) {
		$excerpt = wp_html_excerpt( $excerpt, $limit ) . '...';
	}

	return $excerpt;
}
