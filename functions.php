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

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'lotus' ),
	) );
}
add_action( 'after_setup_theme', 'lotus_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function lotus_enqueue_assets() {
	// Enqueue main stylesheet.
	wp_enqueue_style( 'lotus-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Enqueue appointment form script.
	wp_enqueue_script( 'lotus-appointment-form', get_template_directory_uri() . '/assets/js/appointment-form.js', array(), '1.0.0', true );
	wp_localize_script( 'lotus-appointment-form', 'lotusAjax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	) );
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
 * Register Speciality Custom Post Type
 */
function lotus_register_speciality_cpt() {
	$labels = array(
		'name'                  => _x( 'Specialities', 'Post type general name', 'lotus' ),
		'singular_name'         => _x( 'Speciality', 'Post type singular name', 'lotus' ),
		'menu_name'             => _x( 'Specialities', 'Admin Menu text', 'lotus' ),
		'name_admin_bar'        => _x( 'Speciality', 'Add New on Toolbar', 'lotus' ),
		'add_new'               => __( 'Add New', 'lotus' ),
		'add_new_item'          => __( 'Add New Speciality', 'lotus' ),
		'new_item'              => __( 'New Speciality', 'lotus' ),
		'edit_item'             => __( 'Edit Speciality', 'lotus' ),
		'view_item'             => __( 'View Speciality', 'lotus' ),
		'all_items'             => __( 'All Specialities', 'lotus' ),
		'search_items'          => __( 'Search Specialities', 'lotus' ),
		'parent_item_colon'     => __( 'Parent Specialities:', 'lotus' ),
		'not_found'             => __( 'No specialities found.', 'lotus' ),
		'not_found_in_trash'    => __( 'No specialities found in Trash.', 'lotus' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'speciality' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-medical',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'speciality', $args );
}
add_action( 'init', 'lotus_register_speciality_cpt' );

/**
 * Register Blog Custom Post Type
 */
function lotus_register_blog_cpt() {
	$labels = array(
		'name'                  => _x( 'Blogs', 'Post type general name', 'lotus' ),
		'singular_name'         => _x( 'Blog', 'Post type singular name', 'lotus' ),
		'menu_name'             => _x( 'Blogs', 'Admin Menu text', 'lotus' ),
		'name_admin_bar'        => _x( 'Blog', 'Add New on Toolbar', 'lotus' ),
		'add_new'               => __( 'Add New', 'lotus' ),
		'add_new_item'          => __( 'Add New Blog', 'lotus' ),
		'new_item'              => __( 'New Blog', 'lotus' ),
		'edit_item'             => __( 'Edit Blog', 'lotus' ),
		'view_item'             => __( 'View Blog', 'lotus' ),
		'all_items'             => __( 'All Blogs', 'lotus' ),
		'search_items'          => __( 'Search Blogs', 'lotus' ),
		'parent_item_colon'     => __( 'Parent Blogs:', 'lotus' ),
		'not_found'             => __( 'No blogs found.', 'lotus' ),
		'not_found_in_trash'    => __( 'No blogs found in Trash.', 'lotus' ),
		'featured_image'        => _x( 'Blog Cover Image', 'Overrides the “Featured Image” label', 'lotus' ),
		'set_featured_image'    => _x( 'Set Cover Image', 'Overrides the “Set featured image” label', 'lotus' ),
		'remove_featured_image' => _x( 'Remove Cover Image', 'Overrides the “Remove featured image” label', 'lotus' ),
		'use_featured_image'    => _x( 'Use as Cover Image', 'Overrides the “Use as featured image” label', 'lotus' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'blogs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'        => false,
		'menu_position'      => 7,
		'menu_icon'          => 'dashicons-admin-post',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'blog', $args );
}
add_action( 'init', 'lotus_register_blog_cpt' );

/**
 * Register Blog Category Custom Taxonomy
 */
function lotus_register_blog_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Blog Categories', 'taxonomy general name', 'lotus' ),
		'singular_name'     => _x( 'Blog Category', 'taxonomy singular name', 'lotus' ),
		'search_items'      => __( 'Search Blog Categories', 'lotus' ),
		'all_items'         => __( 'All Blog Categories', 'lotus' ),
		'parent_item'       => __( 'Parent Blog Category', 'lotus' ),
		'parent_item_colon' => __( 'Parent Blog Category:', 'lotus' ),
		'edit_item'         => __( 'Edit Blog Category', 'lotus' ),
		'update_item'       => __( 'Update Blog Category', 'lotus' ),
		'add_new_item'      => __( 'Add New Blog Category', 'lotus' ),
		'new_item_name'     => __( 'New Blog Category Name', 'lotus' ),
		'menu_name'         => __( 'Blog Categories', 'lotus' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'blog-category' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'blog-category', array( 'blog' ), $args );
}
add_action( 'init', 'lotus_register_blog_category_taxonomy' );

/**
 * Insert default Blog Categories if they do not exist
 */
function lotus_insert_default_blog_categories() {
	$default_categories = array(
		'Woman Care' => 'woman-care',
		'Pediatrics' => 'pediatrics',
		'Maternity'  => 'maternity',
	);

	foreach ( $default_categories as $name => $slug ) {
		if ( ! term_exists( $slug, 'blog-category' ) ) {
			wp_insert_term(
				$name,
				'blog-category',
				array(
					'slug' => $slug,
				)
			);
		}
	}
}
add_action( 'init', 'lotus_insert_default_blog_categories', 20 );



/**
 * Register Speciality Category Custom Taxonomy
 */
function lotus_register_speciality_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Speciality Categories', 'taxonomy general name', 'lotus' ),
		'singular_name'     => _x( 'Speciality Category', 'taxonomy singular name', 'lotus' ),
		'search_items'      => __( 'Search Speciality Categories', 'lotus' ),
		'all_items'         => __( 'All Speciality Categories', 'lotus' ),
		'parent_item'       => __( 'Parent Speciality Category', 'lotus' ),
		'parent_item_colon' => __( 'Parent Speciality Category:', 'lotus' ),
		'edit_item'         => __( 'Edit Speciality Category', 'lotus' ),
		'update_item'       => __( 'Update Speciality Category', 'lotus' ),
		'add_new_item'      => __( 'Add New Speciality Category', 'lotus' ),
		'new_item_name'     => __( 'New Speciality Category Name', 'lotus' ),
		'menu_name'         => __( 'Speciality Categories', 'lotus' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'speciality-category' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'speciality_category', array( 'speciality' ), $args );
}
add_action( 'init', 'lotus_register_speciality_category_taxonomy' );

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
						<option value="Rajamahendravaram" <?php selected( $location === 'Rajamahendravaram' || $location === 'Rajahmundry', true ); ?>>Rajamahendravaram</option>
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

/**
 * Handle ApexCura Appointment Form AJAX Submission
 */
function lotus_submit_appointment_ajax() {
	// Sanitize form inputs
	$first_name     = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';
	$last_name      = isset( $_POST['last_name'] ) ? sanitize_text_field( wp_unslash( $_POST['last_name'] ) ) : '';
	$full_name      = trim( $first_name . ' ' . $last_name );
	$mobile_number  = isset( $_POST['mobile_number'] ) ? sanitize_text_field( wp_unslash( $_POST['mobile_number'] ) ) : '';
	$email          = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$branch_id      = isset( $_POST['branch_id'] ) ? sanitize_text_field( wp_unslash( $_POST['branch_id'] ) ) : 'Hyderabad';
	$department     = isset( $_POST['department'] ) ? sanitize_text_field( wp_unslash( $_POST['department'] ) ) : '';
	$doctor         = isset( $_POST['doctor'] ) ? sanitize_text_field( wp_unslash( $_POST['doctor'] ) ) : '';
	$description    = isset( $_POST['description'] ) ? sanitize_textarea_field( wp_unslash( $_POST['description'] ) ) : '';
	$form_name      = isset( $_POST['form_name'] ) && ! empty( $_POST['form_name'] ) ? sanitize_text_field( wp_unslash( $_POST['form_name'] ) ) : 'Contact Us';
	$form_path      = isset( $_POST['form_path'] ) && ! empty( $_POST['form_path'] ) ? esc_url_raw( wp_unslash( $_POST['form_path'] ) ) : home_url();
	$source_id      = isset( $_POST['source_id'] ) && ! empty( $_POST['source_id'] ) ? sanitize_text_field( wp_unslash( $_POST['source_id'] ) ) : 'website';
	$campaign_id    = isset( $_POST['campaign_id'] ) ? sanitize_text_field( wp_unslash( $_POST['campaign_id'] ) ) : '';
	$campaign_name  = isset( $_POST['campaign_name'] ) ? sanitize_text_field( wp_unslash( $_POST['campaign_name'] ) ) : '';

	// Basic validation
	if ( empty( $first_name ) ) {
		wp_send_json_error( array( 'message' => __( 'First name is required.', 'lotus' ) ) );
	}
	if ( empty( $mobile_number ) ) {
		wp_send_json_error( array( 'message' => __( 'Mobile number is required.', 'lotus' ) ) );
	}

	// Prepare additional fields array
	$additional_fields = array(
		array(
			'label' => 'message',
			'value' => ! empty( $description ) ? $description : 'Appointment booking request',
		),
		array(
			'label' => 'form name',
			'value' => $form_name,
		),
		array(
			'label' => 'form path',
			'value' => $form_path,
		),
	);

	if ( ! empty( $_POST['utm_source'] ) ) {
		$additional_fields[] = array( 'label' => 'utm_source', 'value' => sanitize_text_field( wp_unslash( $_POST['utm_source'] ) ) );
	}
	if ( ! empty( $_POST['utm_medium'] ) ) {
		$additional_fields[] = array( 'label' => 'utm_medium', 'value' => sanitize_text_field( wp_unslash( $_POST['utm_medium'] ) ) );
	}
	if ( ! empty( $_POST['utm_campaign'] ) ) {
		$additional_fields[] = array( 'label' => 'utm_campaign', 'value' => sanitize_text_field( wp_unslash( $_POST['utm_campaign'] ) ) );
	}

	$payload = array(
		'full_name'         => $full_name,
		'mobile_number'     => $mobile_number,
		'domain'            => 'lotuslittlestars.in',
		'source_id'         => $source_id,
		'email'             => $email,
		'doctor'            => $doctor,
		'department'        => $department,
		'branch_id'         => $branch_id,
		'appointment_date'  => '',
		'campaign_id'       => $campaign_id,
		'campaign_name'     => $campaign_name,
		'form_id'           => '',
		'form_name'         => $form_name,
		'additional_fields' => $additional_fields,
	);

	$response = wp_remote_post( 'https://suite.apexcura.com/api/contactForm', array(
		'headers'     => array(
			'Content-Type' => 'application/json',
		),
		'body'        => wp_json_encode( $payload ),
		'timeout'     => 15,
		'data_format' => 'body',
	) );

	if ( is_wp_error( $response ) ) {
		wp_send_json_error( array( 'message' => $response->get_error_message() ) );
	}

	$body = wp_remote_retrieve_body( $response );
	$data = json_decode( $body, true );

	if ( ! empty( $data['status'] ) || ! empty( $data['success'] ) ) {
		wp_send_json_success( array( 'message' => ! empty( $data['message'] ) ? $data['message'] : __( 'Appointment details submitted successfully!', 'lotus' ) ) );
	} else {
		wp_send_json_error( array( 'message' => ! empty( $data['message'] ) ? $data['message'] : __( 'Unable to submit your details. Please try again.', 'lotus' ) ) );
	}
}
add_action( 'wp_ajax_lotus_submit_appointment', 'lotus_submit_appointment_ajax' );
add_action( 'wp_ajax_nopriv_lotus_submit_appointment', 'lotus_submit_appointment_ajax' );
