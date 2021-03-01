<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
 <?php
echo do_shortcode('[smartslider3 slider=1]');
?>

			<section class="home__content">
				<h2>НАШИ ПРЕИМУЩЕСТВА</h2>
				<div class="edge">
					<div class="edge__item js-open-modal" data-modal="1">
						<div class="edge__icon">
							<i class="fa fa-database fa-3x" aria-hidden="true"></i>
						</div>
						<span class="edge__title">Выгода</span>
						<p class="edge__description">конкурентоспособная и своевременная оплата труда</p>
					</div>
					<!-- modal -->
					<div class="modal" data-modal="1">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<h4 class="modal__title">Выгода *</h4>
							<ul class="modal__list">
								<li>конкурентоспособная оплата труда </li>
								<li>«13-я зарплата» по итогам года</li>
								<li>повышение оклада за стаж (уже после первого года работы и в дальнейшем)</li>
								<li>ежегодная индексация зарплат</li>
								<li>дополнительные дни отпуска </li>
								<li>бесплатный проезд в столичном метро </li>
								<li>компенсация ж/д поездок на работу и обратно для жителей Подмосковья </li>
								<li>другие преференции</li>
							</ul>
							<cite>* социальные льготы комбинируются в зависимости от профессии</cite>
					</div>
					<!-- modal end -->
					<div class="edge__item js-open-modal" data-modal="2">
						<div class="edge__icon">
							<i class="fa fa-check-square fa-3x" aria-hidden="true"></i>
						</div>
						<span class="edge__title">Стабильность</span>
						<p class="edge__description">соблюдение законодательства и социальные гарантии</p>
					</div>
					<!-- modal -->
					<div class="modal" data-modal="2">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<h4 class="modal__title">Стабильность</h4>
						<ul class="modal__list">
							<li>официальное оформление и налоговые отчисления </li>
							<li>соблюдение законодательства РФ и Коллективного договора предприятия</li>
							<li>своевременная выплата зарплаты (дважды в месяц)</li>
							<li>защита со стороны профсоюза</li>
						</ul>
					</div>
					<!-- modal end -->
					<div class="edge__item js-open-modal" data-modal="3">
						<div class="edge__icon">
							<i class="fa fa-rocket fa-3x" aria-hidden="true"></i>
						</div>
						<span class="edge__title">Перспектива</span>
						<p class="edge__description">возможность профессионального и карьерного роста</p>
					</div>
					<!-- modal -->
					<div class="modal" data-modal="3">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<h4 class="modal__title">Перспектива</h4>
						<ul class="modal__list">
							<li>ежегодные конкурсы профессионального мастерства</li>
							<li>шанс получить профессиональное образование за счет метрополитена </li>
							<li>многоплановые образовательные программы, лекции, тренинги </li>
							<li>бесплатное обучение в корпоративном учебно-производственном центре </li>
							<li>отбор в кадровый резерв, развитие и карьерное продвижение</li>
						</ul>
					</div>
					<!-- modal end -->
					<div class="edge__item js-open-modal" data-modal="4">
						<div class="edge__icon">
							<i class="fa fa-users fa-3x" aria-hidden="true"></i>
						</div>
						<span class="edge__title">Забота</span>
						<p class="edge__description">медицинские осмотры определенных категорий работников</p>
					</div>
					<!-- modal -->
					<div class="modal" data-modal="4">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<h4 class="modal__title">Забота</h4>
						<ul class="modal__list">
						<li>работа рядом с домом (для ряда специалистов)</li>
						<li>гибкие графики работы (для ряда специалистов) </li>
						<li>форменная одежда (для ряда специалистов)</li>
						<li>медицинские осмотры определенных категорий работников</li>
						<li>насыщенная корпоративная жизнь (спорт, музыка, танцы, волонтерство, экскурсии, викторины и многое другое)</li>
						<li>льготный отдых в оздоровительном комплексе метрополитена</li>
						<li>детский оздоровительный лагерь и детский клуб </li>
						<li>подарки к праздникам</li>
						</ul>
					</div>
					<div class="overlay" id="overlay-modal"></div>
					<!-- modal end -->
				</div>
				<h2 class="entry-title">Вакансии</h2>
				<!-- <p><strong><span class="color__block">Подберите</span> подходящую вакансию и отправьте нам свое резюме.</strong></p>
				<p>В скором времени мы ответим на вашу заявку!</p> -->
				<section class="vacancy">
				<?php
				// параметры по умолчанию
				$posts = get_posts( array(
					'numberposts' => 8,
					'category'    => 0,
					'post_type'   => 'vacan',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );
				foreach( $posts as $post ){
					setup_postdata($post);
					?>
							<div class="vacancy__item">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
								<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							</div>
					<?php
				}
				wp_reset_postdata(); // сброс

				?>
				</section>
				<section class="video">
					<div class="video__item"><p>Если вы не нашли нужную вакансию, направьте нам резюме<br> с указанием желаемой должности на <a href="mailto:rabota@mosmetro.ru">rabota@mosmetro.ru</a></p></div>
					<div class="video__item js-open-modal" data-modal="5">
					</div>
					<div class="modal video-modal" data-modal="5">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<video src="<?php echo get_stylesheet_directory_uri(); ?>/video/video_index.mp4" controls="controls" controlslist="nodownload" class="vd"></video>
					</div>
				</section>
				<h2 class="entry-title">Контакты</h2>
				<section class="contact__index">
					<div class="contact__item">
						<p><span class="color__red">Единый центр </span> <strong>подбора персонала:</strong></p>
						<p><span class="color__red"><i class="fa fa-map-marker" aria-hidden="true"></i></span> второй ярус станции метро «Выставочная» <br>(последний вагон из центра, следуйте по навигации)</p>
						<p><strong>ВРЕМЯ РАБОТЫ</strong></p>
						<p>в рабочие дни — с 09:00 до 20:00<br>
							по субботам — с 09:00 до 15:00</p>
						<p><span class="color__red"><i class="fa fa-map-marker" aria-hidden="true"></i></span> ул. Криворожская, д.6, стр.1, станция метро «Нагорная»</p>
						<p><strong>ВРЕМЯ РАБОТЫ</strong></p>
						<p>в рабочие дни — с 09:00 до 20:00<br>
						по субботам — с 09:00 до 15:00</p>
						<div class="contact">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:rabota@mosmetro.ru">rabota@mosmetro.ru</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+74956222222">+7 495 622-22-22</a></p>
						</div>
					</div>
					<div class="contact__item">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A28c4fee36d80ec6c2d223d8a3e46d4caa0f35401793d0f3e400859a44fbaa270&amp;source=constructor" width="100%" height="491" frameborder="0"></iframe>
					</div>
				</section>
			</section>


	<?php

get_footer();
