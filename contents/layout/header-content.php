<header>
	<nav class="px-5">
		<div class="container flex justify-center max-w-screen-lg py-5 mx-auto mb-10 border-b border-gray-300">
			<?php
			if (is_front_page()):
				?>
				<a href="/" class="text-4xl font-black w-44 whitespace-nowrap">
					<?php bloginfo('name'); ?>
				</a>
			<?php else:
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="text-4xl font-black w-44 whitespace-nowrap">
					<?php bloginfo('name'); ?>
				</a>
				<?php
			endif;
			?>
		</div>
	</nav>
</header>