<?php get_header(); ?>
<div id="page" class="page">
<section id="content" class="page_content">

<?php the_post(); ?>

		
<article class="sp clearfix">

<div class="time_bar">
    <h1><?php the_date(); ?></h1>
</div>
<hgroup class="p_lt p_a">
	<header class="p_t">
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
	</header> 

</hgroup>

<div class="sp_c">
	<?php the_content(); ?>
</div>

</article>



</section>
<?php comments_template( '', true ); ?>

<?php get_footer(); ?>