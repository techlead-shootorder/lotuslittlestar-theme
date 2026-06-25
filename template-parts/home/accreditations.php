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
    padding: 30px 0;
    background: transparent;
    overflow: hidden;
}

.accreditations-marquee {
    overflow: hidden;
    position: relative;
    width: 100%;
    display: flex;
}

.accreditations-track {
    display: flex;
    align-items: center;
    gap: 40px;
    width: max-content;
    animation: accreditation-scroll 20s linear infinite;
}

.accreditations-track:hover {
    animation-play-state: paused;
}

.accreditation-item {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.accreditation-item img {
    max-width: 60px;
    max-height: 60px;
    object-fit: contain;
}

@keyframes accreditation-scroll {
    0% {
        transform: translateX(100vw);
    }
    100% {
        transform: translateX(-100%);
    }
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