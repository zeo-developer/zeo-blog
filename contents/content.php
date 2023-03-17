<article <?php post_class(); ?>>
	<div class="cursor-pointer">
		<div class="overflow-hidden transition-all bg-gray-100 rounded-md hover:scale-105">
			<?php
			$thumbnail_url_img = get_the_post_thumbnail_url();
			if ($thumbnail_url_img) {
				?>
				<a class="relative block aspect-square" href="<?php echo esc_url(get_permalink()); ?>">
					<img src="<?php echo $thumbnail_url_img; ?>" class="object-cover transition-all"
						style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
				</a>
				<?php
			} else {
				?>
				<a class="relative aspect-square flex justify-center items-center"
					href="<?php echo esc_url(get_permalink()); ?>">
					<svg version="1.1" class="w-20 h-20 " xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.19 123.38"
						style="enable-background:new 0 0 115.19 123.38" xml:space="preserve">
						<g>
							<path class="st0"
								d="M93.13,79.5c12.05,0,21.82,9.77,21.82,21.82c0,12.05-9.77,21.82-21.82,21.82c-12.05,0-21.82-9.77-21.82-21.82 C71.31,89.27,81.08,79.5,93.13,79.5L93.13,79.5z M8.08,0.25h95.28c2.17,0,4.11,0.89,5.53,2.3c1.42,1.42,2.3,3.39,2.3,5.53v70.01 c-2.46-1.91-5.24-3.44-8.25-4.48V9.98c0-0.43-0.16-0.79-0.46-1.05c-0.26-0.26-0.66-0.46-1.05-0.46H9.94 c-0.43,0-0.79,0.16-1.05,0.46C8.63,9.19,8.43,9.58,8.43,9.98v70.02h0.03l31.97-30.61c1.28-1.18,3.29-1.05,4.44,0.23 c0.03,0.03,0.03,0.07,0.07,0.07l26.88,31.8c-4.73,5.18-7.62,12.08-7.62,19.65c0,3.29,0.55,6.45,1.55,9.4H8.08 c-2.17,0-4.11-0.89-5.53-2.3s-2.3-3.39-2.3-5.53V8.08c0-2.17,0.89-4.11,2.3-5.53S5.94,0.25,8.08,0.25L8.08,0.25z M73.98,79.35 l3.71-22.79c0.3-1.71,1.91-2.9,3.62-2.6c0.66,0.1,1.25,0.43,1.71,0.86l17.1,17.97c-2.18-0.52-4.44-0.79-6.78-0.79 C85.91,71.99,79.13,74.77,73.98,79.35L73.98,79.35z M81.98,18.19c3.13,0,5.99,1.28,8.03,3.32c2.07,2.07,3.32,4.9,3.32,8.03 c0,3.13-1.28,5.99-3.32,8.03c-2.07,2.07-4.9,3.32-8.03,3.32c-3.13,0-5.99-1.28-8.03-3.32c-2.07-2.07-3.32-4.9-3.32-8.03 c0-3.13,1.28-5.99,3.32-8.03C76.02,19.44,78.86,18.19,81.98,18.19L81.98,18.19z M85.82,88.05l19.96,21.6 c1.58-2.39,2.5-5.25,2.5-8.33c0-8.36-6.78-15.14-15.14-15.14C90.48,86.17,87.99,86.85,85.82,88.05L85.82,88.05z M100.44,114.58 l-19.96-21.6c-1.58,2.39-2.5,5.25-2.5,8.33c0,8.36,6.78,15.14,15.14,15.14C95.78,116.46,98.27,115.78,100.44,114.58L100.44,114.58z" />
						</g>
					</svg>
				</a>
				<?php
			}
			?>
		</div>
		<?php
		the_title('<h2 class="mt-2 text-lg font-semibold leading-snug tracking-tight dark:text-white"><a href="' . esc_url(get_permalink()) . '" rel="bookmark"><span class="bg-gradient-to-r from-green-200 to-green-100 dark:from-purple-800 dark:to-purple-900 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">', '</span></a></h2>');
		?>
		<div class="flex items-center mt-3 space-x-3 text-gray-500 dark:text-gray-400">
			<div class="flex items-center gap-3">
				<div class="relative flex-shrink-0 w-5 h-5">
					<img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
						class="object-cover rounded-full"
						style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
				</div>
				<span class="text-sm">
					<?php echo get_the_author_meta('display_name'); ?>
				</span>
			</div>
			<span class="text-xs text-gray-300 dark:text-gray-600">•</span>
			<time class="text-sm">
				<?php echo get_the_date('d/m/Y'); ?>
			</time>
			<?php
			if (current_user_can('manage_options')) {
				?>
				<span class="text-xs text-gray-300 dark:text-gray-600">•</span>
				<span class="text-sm">
					<?php echo edit_post_link(); ?>
				</span>
				<?php
			}
			?>
		</div>
	</div>
</article>