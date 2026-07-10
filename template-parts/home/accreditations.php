<?php
/**
 * Accreditations Marquee
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch accreditation logos repeater
$accreditation_logos = function_exists( 'get_field' ) ? get_field( 'accreditation_logos' ) : null;

// If no logos exist, display nothing
if ( empty( $accreditation_logos ) || ! is_array( $accreditation_logos ) ) {
	return;
}
?>
<style>
    .accreditations-section {
    padding: 30px 0;
    background: transparent;
    overflow: hidden;
}

.accreditations-marquee {
    display: flex;
    justify-content: center;
    width: 100%;
}

.accreditations-track {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
}

.accreditation-item {
    flex-shrink: 0;
    width: 130px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.accreditation-item img {
    object-fit: contain;
}

@media (max-width: 768px) {
    .accreditation-item {
        width: 50px;
        height: 50px;
    }

    .accreditations-track {
        gap: 24px;
    }
}
</style>
<section class="accreditations-section">

	<div class="accreditations-marquee">

		<div class="accreditations-track">

			<?php
			foreach ( $accreditation_logos as $item ) :
				$logo      = isset( $item['logo'] ) ? $item['logo'] : null;
				$logo_name = isset( $item['logo_name'] ) ? $item['logo_name'] : '';

				$logo_url = '';
				if ( is_array( $logo ) && ! empty( $logo['url'] ) ) {
					$logo_url = $logo['url'];
				}

				if ( empty( $logo_url ) ) {
					continue;
				}
			?>
				<div class="accreditation-item">
					<img
						src="<?php echo esc_url( $logo_url ); ?>"
						alt="<?php echo esc_attr( $logo_name ); ?>"
					>
				</div>
			<?php endforeach; ?>

		</div>

	</div>

</section>