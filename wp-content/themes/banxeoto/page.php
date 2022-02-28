<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	</div>
	<!-- end lh-header -->
	<div class="module-news-detail">
		<div class="container">
			<div class="bread-crumb">
				<a href="<?php bloginfo('url');?>">Trang chủ</a>
				<span class="dot">/</span>
				<span class="name"><?php the_title();?></span>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="border">
						<p class="lh2-title1"><?php the_title();?></p>
						<div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php echo get_the_date('d/m/Y');?></div>
						<?php the_content();	?>
					</div>
				</div>
				<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar();?>
				</div>
			</div>
			
		</div>
	</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer();?>