<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
<?php /*

	do_action( 'generate_before_footer_content' );

	do_action( 'generate_footer' );

	do_action( 'generate_after_footer_content' );
	*/?>
	<footer class="grid-container grid-parent">
		<section class="footer__item">
		<p>ГУП «Московский метрополитен» © 1935–<?php echo date("Y");?></p>
		<a href="http://gup.mosmetro.ru/o-metropolitene/pravovaya-informatsiya/" target="_blank">Правовая информация</a></section>
		<section class="footer__item">
			<div><span class="footer__link"><a href="https://www.mos.ru/" target="_blank">mos.ru</a></span>Правительство Москвы</div>
			<div><span class="footer__link"><a href="https://mintrans.gov.ru/" target="_blank">mintrans.ru</a></span>Министерство Транспорта РФ</div>
			<div><span class="footer__link"><a href="https://transport.mos.ru/" target="_blank">transport.mos.ru</a></span>Московский Транспорт</div>
		</section>
		<section class="footer__item">
			<div><span class="footer__link"><a href="https://www.mos.ru/dt/" target="_blank">mos.ru</a></span>Департамент транспорта и развития дорожно-транспортной инфраструктуры</div>
			<div><span class="footer__link"><a href="http://www.mosgortrans.ru/" target="_blank">mosgortrans.ru</a></span>Государственное унитарное предприятие Мосгортранс</div>
		</section>
		<section class="footer__item">
			<h3 class="entry-title">Мы в социальных сетях</h3>
			<ul class="heateor_sss_follow_ul">
				<li class="heateorSssSharingRound"><i alt="Facebook" title="Facebook" class="heateorSssSharing heateorSssFacebookBackground"><a target="_blank" aria-label="Facebook" href="https://www.facebook.com/officialmosmetro" rel="noopener"><i class="heateorSssSharingSvg heateorSssFacebookSvg"></i></a></i></li>
				<li class="heateorSssSharingRound"><i alt="Twitter" title="Twitter" class="heateorSssSharing heateorSssTwitterBackground"><a target="_blank" aria-label="Twitter" href="https://twitter.com/moscowmetro/" rel="noopener"><i class="heateorSssSharingSvg heateorSssTwitterSvg"></i></a></i></li>
				<li class="heateorSssSharingRound"><i alt="Instagram" title="Instagram" class="heateorSssSharing heateorSssInstagramBackground"><a target="_blank" aria-label="Instagram" href="https://www.instagram.com/mosmetro/" rel="noopener"><i class="heateorSssSharingSvg heateorSssInstagramSvg"></i></a></i></li>
				<li class="heateorSssSharingRound"><i alt="Vkontakte" title="Vkontakte" class="heateorSssSharing heateorSssVkontakteBackground"><a target="_blank" aria-label="Vkontakte" href="https://vk.com/officialmosmetro" rel="noopener"><i class="heateorSssSharingSvg heateorSssVkontakteSvg"></i></a></i></li>
				<li class="heateorSssSharingRound"><i alt="Youtube Channel" title="Youtube Channel" class="heateorSssSharing heateorSssYoutubeBackground"><a target="_blank" aria-label="Youtube Channel" href="https://www.youtube.com/user/mosmetro" rel="noopener"><i class="heateorSssSharingSvg heateorSssYoutubeSvg"></i></a></i>
				</li>
			</ul>
		</section>
	</footer>
</div>


<?php /*
do_action( 'generate_after_footer' );
*/?>
<?php
wp_footer();
?>

</body>
</html>
