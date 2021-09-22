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
						<h4 class="modal__title">Выгода</h4>
							<ul class="modal__list">
								<li>конкурентоспособная оплата труда </li>
								<li>ежегодная индексация</li>
								<li>«13-я» зарплата</li>
								<li>повышение оклада за стаж уже после первого года работы и в дальнейшем</li>
								<li>дополнительные дни отпуска для работников многих профессий</li>
								<li>бесплатный проезд в столичном метро и компенсация ж/д поездок на работу и обратно по Москве и Подмосковью</li>
								<li>другие бонусы от предприятия</li>
							</ul>
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
							<li>гарантия соблюдения законодательства РФ</li>
							<li>своевременные выплаты зарплаты дважды в месяц</li>
							<li>дополнительные льготы по Коллективному договору: выплаты молодым родителям, транспортные компенсации, поддержка молодых специалистов и другие преференции</li>
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
							<li>бесплатное обучение и повышение квалификации в Корпоративном университете</li>
							<li>шанс получить высшее образование за счет предприятия </li>
							<li>многоплановые образовательные программы, лекции, тренинги </li>
							<li>ежегодные конкурсы профессионального мастерства </li>
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
						<li>льготный отдых и корпоративный досуг</li>
						<li>сообщества по интересам: спорт, музыка, театр и многое другое </li>
						<li>скидки на отдых в Оздоровительном комплексе метрополитена</li>
						<li>оздоровительный лагерь и развивающий клуб для детей</li>
						<li>подарки к праздникам, экскурсии, билеты в театр и на концерты</li>
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
					<div class="video__item">
					<div class="information__p">
					    <p>Среди самых востребованных вакансий Москвы – работа машинистом электропоезда метро, водителем автобуса и водителем трамвая.</p>
                        <p>Но у нас сотни профессий!</p>
                        <p>Если вы не нашли работу по себе среди открытых вакансий транспорта Москвы, направьте резюме с указанием желаемой должности на <a href="mailto:rabota@mosmetro.ru">rabota@mosmetro.ru</a></p>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-n.png" class="information__img">
					</div>
					<div class="video__item js-open-modal" data-modal="5">
					</div>
					<div class="modal video-modal" data-modal="5">
						<svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
						<video src="<?php echo get_stylesheet_directory_uri(); ?>/video/video_index.mp4" controls="controls" controlslist="nodownload" class="vd"></video>
					</div>
				</section>
				<h2 class="entry-title">Контакты</h2>
				<section class="contact__index">
					<div class="contact__item">
						<p><span class="color__red">Единый центр </span> <strong>подбора персонала:</strong></p>
						<p><span class="color__red"><i class="fa fa-map-marker" aria-hidden="true"></i></span> второй ярус станции метро «Выставочная» <br>(последний вагон из центра, следуйте по навигации)</p>
						<p><span class="color__red"><i class="fa fa-map-marker" aria-hidden="true"></i></span> наземный вестибюль станции метро «Черкизовская»</p>
						<p><span class="color__red"><i class="fa fa-map-marker" aria-hidden="true"></i></span> ул. Криворожская, д.6, стр.1, станция метро «Нагорная»</p>
						<p><strong>ВРЕМЯ РАБОТЫ</strong></p>
						<p>в рабочие дни — с 09:00 до 20:00<br>
						по субботам — с 09:00 до 15:00</p>
						<div class="contact">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:rabota@mosmetro.ru">rabota@mosmetro.ru</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+74956222222">8 (495) 622-22-22 (для Москвы)</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+78002202202">8 (800) 220-22-02 (для регионов)</a></p>
						</div>
					</div>
					<div class="contact__item">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adc011f5c25e32ff01498e8c3379d389fce669e55cd19688de2e23feb67a1cff2&amp;source=constructor" width="100%" height="491" frameborder="0"></iframe>
					</div>
				</section>
			</section>


	<?php

get_footer();
