<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<div class="container px-8 mx-auto xl:px-5 max-w-screen-lg py-5 lg:py-8 !pt-0">
			<div class="max-w-screen-md mx-auto">
				<!-- title -->
				<h1
					class="mt-2 mb-3 text-3xl font-semibold tracking-tight text-center lg:leading-snug text-brand-primary lg:text-4xl dark:text-white">
					<?php echo get_the_title(); ?>
				</h1>

				<div class="flex justify-center mt-3 space-x-3 text-gray-500 ">
					<div class="flex items-center gap-3">
						<!-- author -->
						<div class="relative flex-shrink-0 w-10 h-10">
								<img alt="<?php echo get_the_author_meta('display_name'); ?>"
									src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
									class="rounded-full object-cover"
									style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
						</div>
						<div>
							<p class="text-gray-800 dark:text-gray-400">
									By <b>
										<?php echo get_the_author_meta('display_name'); ?>
									</b>
							</p>
							<div class="flex items-center space-x-2 text-sm">
								<time class="text-gray-500 dark:text-gray-400">
									<?php echo get_the_date('d/m/Y'); ?>
								</time>
								<?php if (current_user_can('manage_options')) { ?>
									<span class="text-xs text-gray-300 dark:text-gray-600">•</span>
									<span class="text-sm">
										<?php echo edit_post_link(); ?>
									</span>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		$thumbnail_url_img = get_the_post_thumbnail_url();
		if ($thumbnail_url_img) {
			?>
			<div class="px-5">
				<div class="relative z-0 max-w-screen-lg mx-auto overflow-hidden rounded-lg aspect-video">
					<img alt="Thumbnail" src="<?php echo $thumbnail_url_img; ?>" class="object-cover"
						style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
				</div>
			</div>
			<?php
		}
		?>
		<div class="container px-8 mx-auto xl:px-7 max-w-screen-lg py-5 lg:py-8">
			<div class="max-w-screen-md mx-auto ">
				<div class="mx-auto my-3 prose dark:prose-invert prose-a:text-blue-600">
					<?php
					the_content();
					?>
				</div>
			</div>
			<div class="flex justify-center mt-7 mb-7">
				<a class="px-5 py-2 text-sm text-blue-600 rounded-full dark:text-blue-500"
					href="<?php echo home_url(); ?>">← View all posts</a>
			</div>
		</div>
	</div>
</article>