<?php
get_header();
?>
<div class="container mx-auto">
	<div class="flex flex-col justify-center items-center py-40">
		<h1 class="text-9xl font-extrabold text-black tracking-widest">404</h1>
		<div class="bg-[#FF6A3D] px-2 text-sm rounded rotate-12 absolute mb-10">
			Page Not Found
		</div>
		<div>
			<a href="<?php echo home_url(); ?>"
				class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring">
				<span
					class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#FF6A3D] group-hover:translate-y-0 group-hover:translate-x-0"></span>
				<span class="relative block px-8 py-3 bg-[#1A2238] border border-current">
					Go Home
				</span>
			</a>
		</div>

	</div>

</div>
<?php
get_footer();