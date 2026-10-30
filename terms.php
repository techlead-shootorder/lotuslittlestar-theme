<?php
/**
 * Template Name: Terms and Conditions
 */
get_header();
?>

<section class="bg-[#F8FAFC] py-16 lg:py-24">
    <div class="max-w-5xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-14">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
                Terms and Conditions
            </h1>
            <p class="mt-4 text-gray-600">
                Last Updated: <strong>October 2026</strong>
            </p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 lg:p-12">

            <div class="prose prose-gray max-w-none prose-headings:text-gray-900 prose-p:text-gray-700 prose-li:text-gray-700">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>

