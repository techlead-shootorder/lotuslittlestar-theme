<?php
/**
 * Mock WordPress Environment & URL Router
 * 
 * This file allows running the Lotus custom theme static files directly using PHP's
 * built-in web server (php -S localhost:8000) without requiring a WordPress database.
 * When you upload the theme to your production server, WordPress will use its own routing.
 */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// Calculate the base directory path (e.g. "/lotus" if run from http://localhost/lotus/)
$script_name = isset( $_SERVER['SCRIPT_NAME'] ) ? $_SERVER['SCRIPT_NAME'] : '';
$base_path = '';
if ( ! empty( $script_name ) ) {
	$dir = dirname( $script_name );
	$base_path = ( $dir === '/' || $dir === '\\' ) ? '' : rtrim( str_replace( '\\', '/', $dir ), '/' );
}

// 1. Mock standard sanitize and escape functions
function esc_url( $url ) {
	return $url;
}
function esc_html( $text ) {
	return htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' );
}
function esc_textarea( $text ) {
	return htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' );
}
function esc_attr( $text ) {
	return htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' );
}
function esc_html__( $text, $domain = '' ) {
	return esc_html( $text );
}
function esc_html_e( $text, $domain = '' ) {
	echo esc_html( $text );
}
function __( $text, $domain = '' ) {
	return $text;
}
function _e( $text, $domain = '' ) {
	echo $text;
}
function _x( $text, $context, $domain = '' ) {
	return $text;
}

// 2. Mock theme support & enqueuing functions
function language_attributes() {
	echo 'lang="en-US"';
}
function bloginfo( $show = '' ) {
	if ( $show === 'charset' ) {
		echo 'UTF-8';
	}
}
function wp_head() {
	// No-op: styles are enqueued via script/style tags directly in header
}
function wp_footer() {
	// No-op
}
function wp_body_open() {
	// No-op
}
function body_class( $class = '' ) {
	echo 'class="' . esc_attr( $class ) . ' min-h-screen flex flex-col"';
}
function get_stylesheet_uri() {
	global $base_path;
	return $base_path . '/style.css';
}

// 3. Mock Template Loaders
function get_header() {
	include ABSPATH . 'header.php';
}
function get_footer() {
	include ABSPATH . 'footer.php';
}
function get_template_part( $slug, $name = null ) {
	$path = ABSPATH . $slug . '.php';
	if ( file_exists( $path ) ) {
		include $path;
	} else {
		echo "<!-- Template part not found: " . esc_html( $slug ) . " -->";
	}
}
function home_url( $path = '' ) {
	global $base_path;
	return $base_path . '/' . ltrim( $path, '/' );
}

// 4. Mock CPT Doctor Functions
class WP_Query {
	public function __construct( $args ) {}
	// Returns false so the template parts automatically fall back to the Figma layout mockup data
	public function have_posts() {
		return false;
	}
	public function the_post() {}
}
function get_post_meta( $id, $key, $single = true ) {
	return '';
}
function has_post_thumbnail() {
	return false;
}
function the_title() {
	echo 'Dr. V.S.V. Prasad';
}
function get_the_content() {
	return '';
}
function the_content() {
	// No-op
}
function get_the_ID() {
	return 1;
}
function the_permalink() {
	echo esc_url( home_url( '/doctors/dr-v-s-v-prasad/' ) );
}
function wp_reset_postdata() {
	// No-op
}

// 5. Router Logic
$request = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );

// Strip subfolder base path from query for routing checks
if ( ! empty( $base_path ) && strpos( $request, $base_path ) === 0 ) {
	$request = substr( $request, strlen( $base_path ) );
}

$request = rtrim( $request, '/' );

if ( $request === '' || $request === '/index.php' ) {
	include ABSPATH . 'front-page.php';
} elseif ( $request === '/about' ) {
	include ABSPATH . 'page-about.php';
} elseif ( $request === '/doctors' ) {
	include ABSPATH . 'page-doctors.php';
} elseif ( $request === '/locations' ) {
	include ABSPATH . 'page-locations.php';
} elseif ( $request === '/specialists' ) {
	include ABSPATH . 'page-specialists.php';
} elseif ( preg_match( '#^/doctors/.+#', $request ) ) {
	include ABSPATH . 'single-doctor.php';
} else {
	// Fallback routing
	include ABSPATH . 'front-page.php';
}
