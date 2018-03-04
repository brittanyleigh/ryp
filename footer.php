<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<div class="container-fluid cta bg-2">
	<div class="row">
		<div class="col-xs-12 center default-padding overlay">
			<?php if (dynamic_sidebar( 'cta' ) ) : 
				get_sidebar('cta');
				endif;
			?>
		</div>
	</div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row main-footer center">
			<div class="footer col-sm-4">
				<?php if (dynamic_sidebar( 'footer1' ) ) : 
					get_sidebar('footer1');
					endif;
				?>
			</div>
			<div class="footer col-sm-4">
				<?php if (dynamic_sidebar( 'footer2' ) ) : 
					get_sidebar('footer2');
					endif;
				?>
			</div>
			<div class="footer col-sm-4 ">
				<?php if (dynamic_sidebar( 'footer3' ) ) : 
					get_sidebar('footer3');
					endif;
				?>
			</div>
		</div>
	
		<div class="site-info row">
			<div class="col-sm-6 left">
				<p>Copyright &copy; Rochester Young Professionals
                <?php echo date('Y'); ?></p>
			</div>
			<div class="col-sm-6 right">
				<p>Website by <a href="https://www.brittanyisenberg.com" target="_blank">Brittany Isenberg</a></p>
			</div>
		</div><!-- close .site-info -->

		<div class="row footer-menu">
			<div class="col-xs-12 center">
				<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
			</div>
		</div>

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
