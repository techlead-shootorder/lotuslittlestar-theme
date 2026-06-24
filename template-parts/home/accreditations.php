<?php
/**
 * Accreditations Marquee
 *
 * @package Lotus
 */

$accreditations = array(
	array(
		'name' => 'NNF',
		'url'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/logo-1.webp',
	),
	array(
		'name' => 'NABH',
		'url'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/logo-2.webp',
	),
	array(
		'name' => 'IAP',
		'url'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/logo-3.jpeg',
	),
	array(
		'name' => 'IAP Neonatology',
		'url'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/logo-4.png',
	),
	array(
		'name' => 'Logo 5',
		'url'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/logo-5.jpeg',
	),
);
?>
<style>
    .accreditations-section {
    padding: 80px 0;
    background: #f7f7f7;
    overflow: hidden;
}

.accreditations-title {
    text-align: center;
    font-size: 48px;
    font-weight: 700;
    color: #2e3192;
    margin-bottom: 60px;
}

.accreditations-marquee {
    overflow: hidden;
    position: relative;
    width: 100%;
}

.accreditations-track {
    display: flex;
    align-items: center;
    gap: 80px;
    width: max-content;

    animation: accreditation-scroll 25s linear infinite;
}

.accreditations-track:hover {
    animation-play-state: paused;
}

.accreditation-item {
    flex-shrink: 0;
    width: 220px;
    height: 180px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.accreditation-item img {
    max-width: 100%;
    max-height: 150px;
    object-fit: contain;
}

@keyframes accreditation-scroll {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }
}

@media (max-width: 768px) {
    .accreditation-item {
        width: 150px;
        height: 120px;
    }

    .accreditations-track {
        gap: 40px;
    }

    .accreditations-title {
        font-size: 32px;
    }
}
</style>
<section class="accreditations-section">

	<h2 class="accreditations-title">
		Our Accreditations
	</h2>

	<div class="accreditations-marquee">

		<div class="accreditations-track">

			<?php
			// First set
			foreach ( $accreditations as $item ) :
			?>
				<div class="accreditation-item">
					<img
						src="<?php echo esc_url( $item['url'] ); ?>"
						alt="<?php echo esc_attr( $item['name'] ); ?>"
					>
				</div>
			<?php endforeach; ?>

			<?php
			// Duplicate set for seamless loop
			foreach ( $accreditations as $item ) :
			?>
				<div class="accreditation-item">
					<img
						src="<?php echo esc_url( $item['url'] ); ?>"
						alt="<?php echo esc_attr( $item['name'] ); ?>"
					>
				</div>
			<?php endforeach; ?>

		</div>

	</div>

</section>