<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$landing_footer_title = get_theme_mod('landing_footer_title');
$landing_footer_content = get_theme_mod('landing_footer_content');
?>
  <footer>
    <div class="footer">
      	<div class="footer-heading">
      		<?php if($landing_footer_title){ ?>
        		<h5><?php echo $landing_footer_title; ?></h5>
        	<?php } ?>
        </div>
        <?php if($landing_footer_content){ ?>
			<div class="footer-bottom">
				<p><?php echo $landing_footer_content; ?></p>
			</div>
  		<?php } ?>
    </div>
  </footer>

<?php wp_footer(); ?>

	</body>
</html>