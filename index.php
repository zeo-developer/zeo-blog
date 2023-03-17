<?php
get_header();
?>
<section>
    <div class="container max-w-screen-lg px-8 py-5 mx-auto xl:px-5 lg:py-8">
        <div class="grid gap-10 mt-10 lg:gap-10 md:grid-cols-2 xl:grid-cols-3">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('contents/content');
                }
            } else {
                get_template_part('contents/content', 'none');
            }
            ?>
        </div>
        <div class="pt-24">
            <div class="flex items-center justify-center space-x-1">
                <?php posts_nav_link(
                    ' ',
                    // nút <-
                    '<span class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                            </svg>
                    </span>',
                    // nút ->
                    '<span class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md hover:bg-blue-400 hover:text-white ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </span>'
                ); ?>

            </div>
        </div>
    </div>
</section>
<?php
get_footer();