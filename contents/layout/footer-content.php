<footer class="px-5">
    <div
        class="container max-w-screen-lg py-5 mx-auto mt-10 border-t border-gray-300">
        <div class="text-sm text-center">
            Copyright ©
            <?php echo date('Y'); ?>
            <?php
            $blog_info = get_bloginfo('name');
            if (!empty($blog_info)):
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="font-bold">
                    <?php bloginfo('name'); ?>
                </a>
                <?php
            endif;
            ?>
        </div>
    </div>
</footer>