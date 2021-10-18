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
						<p class="color__red contact__title">Единый центр подбора персонала:</p>
						<div class="points__block">
                        	<div class="points__items">
                        	<svg width="25" height="36" viewBox="0 0 25 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2636 6.16482C21.0571 2.39438 17.1379 0.0908788 12.7797 0.00284765C12.5937 -0.000949218 12.4064 -0.000949218 12.2203 0.00284765C7.86214 0.0908788 3.94298 2.39438 1.73643 6.16482C-0.51898 10.0188 -0.580687 14.6482 1.57133 18.5485L10.5869 34.8881C10.591 34.8954 10.595 34.9026 10.5992 34.9098C10.9959 35.5925 11.7065 36 12.5001 36C13.2937 36 14.0043 35.5924 14.4009 34.9098C14.4051 34.9026 14.4092 34.8954 14.4132 34.8881L23.4288 18.5485C25.5807 14.6482 25.519 10.0188 23.2636 6.16482ZM12.5 16.3125C9.68084 16.3125 7.3873 14.0415 7.3873 11.25C7.3873 8.45855 9.68084 6.18753 12.5 6.18753C15.3191 6.18753 17.6127 8.45855 17.6127 11.25C17.6127 14.0415 15.3192 16.3125 12.5 16.3125Z" fill="#D7282F"/>
                            </svg>
                            <p><b>2-й ярус ст. метро "Выставочная"</b> <br><span>(последний вагон из центра, следуйте по навигации)</span></p>
                        	</div>
                        	<div class="points__items">
                        	<svg width="25" height="36" viewBox="0 0 25 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2636 6.16482C21.0571 2.39438 17.1379 0.0908788 12.7797 0.00284765C12.5937 -0.000949218 12.4064 -0.000949218 12.2203 0.00284765C7.86214 0.0908788 3.94298 2.39438 1.73643 6.16482C-0.51898 10.0188 -0.580687 14.6482 1.57133 18.5485L10.5869 34.8881C10.591 34.8954 10.595 34.9026 10.5992 34.9098C10.9959 35.5925 11.7065 36 12.5001 36C13.2937 36 14.0043 35.5924 14.4009 34.9098C14.4051 34.9026 14.4092 34.8954 14.4132 34.8881L23.4288 18.5485C25.5807 14.6482 25.519 10.0188 23.2636 6.16482ZM12.5 16.3125C9.68084 16.3125 7.3873 14.0415 7.3873 11.25C7.3873 8.45855 9.68084 6.18753 12.5 6.18753C15.3191 6.18753 17.6127 8.45855 17.6127 11.25C17.6127 14.0415 15.3192 16.3125 12.5 16.3125Z" fill="#D7282F"/>
                            </svg>
                            <p><b>наземный вестибюль станции метро «Черкизовская»</b></p>
                        	</div>
                        	<div class="points__items">
                        	<svg width="25" height="36" viewBox="0 0 25 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2636 6.16482C21.0571 2.39438 17.1379 0.0908788 12.7797 0.00284765C12.5937 -0.000949218 12.4064 -0.000949218 12.2203 0.00284765C7.86214 0.0908788 3.94298 2.39438 1.73643 6.16482C-0.51898 10.0188 -0.580687 14.6482 1.57133 18.5485L10.5869 34.8881C10.591 34.8954 10.595 34.9026 10.5992 34.9098C10.9959 35.5925 11.7065 36 12.5001 36C13.2937 36 14.0043 35.5924 14.4009 34.9098C14.4051 34.9026 14.4092 34.8954 14.4132 34.8881L23.4288 18.5485C25.5807 14.6482 25.519 10.0188 23.2636 6.16482ZM12.5 16.3125C9.68084 16.3125 7.3873 14.0415 7.3873 11.25C7.3873 8.45855 9.68084 6.18753 12.5 6.18753C15.3191 6.18753 17.6127 8.45855 17.6127 11.25C17.6127 14.0415 15.3192 16.3125 12.5 16.3125Z" fill="#D7282F"/>
                            </svg>
                            <p><b>ул. Криворожская, д.6, стр.1, станция метро «Нагорная»</b></p>
                        	</div>
                        </div>
						<p class="contact__title"><strong>Время работы центров:</strong></p>
						<p>Пн-пт: с 09:00 до 20:00</p>
						<p>Сб: с 09:00 до 15:00</p>

						<div class="contact">
							<p class="contact__mail"><svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M16.5713 9.53299L24.9994 14.803V4.04044L16.5713 9.53299Z" fill="#D7282F"/>
                               <path d="M0 4.04044V14.803L8.42813 9.53299L0 4.04044Z" fill="#D7282F"/>
                               <path d="M23.4366 0.90625H1.56161C0.781921 0.90625 0.163171 1.48116 0.0459833 2.22143L12.4991 10.3366L24.9522 2.22143C24.835 1.48116 24.2163 0.90625 23.4366 0.90625Z" fill="#D7282F"/>
                               <path d="M15.1412 10.4664L12.9302 11.9068C12.799 11.9918 12.6505 12.0335 12.5005 12.0335C12.3505 12.0335 12.2021 11.9918 12.0708 11.9068L9.85991 10.4649L0.0505351 16.6019C0.170848 17.336 0.786473 17.9062 1.56304 17.9062H23.438C24.2146 17.9062 24.8302 17.336 24.9505 16.6019L15.1412 10.4664Z" fill="#D7282F"/>
                               </svg> <a href="mailto:rabota@mosmetro.ru">rabota@mosmetro.ru</a></p>
							<p class="contact__phone"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M20.4288 15.4119L17.4982 12.4813C16.4516 11.4346 14.6723 11.8533 14.2536 13.2139C13.9396 14.1559 12.893 14.6793 11.951 14.4699C9.85771 13.9466 7.03176 11.2253 6.50844 9.02733C6.19444 8.08531 6.82243 7.03866 7.76441 6.72471C9.12506 6.30605 9.54371 4.52675 8.49707 3.4801L5.56645 0.54949C4.72914 -0.183163 3.47316 -0.183163 2.74051 0.54949L0.751877 2.53812C-1.23675 4.63141 0.961206 10.1786 5.88045 15.0979C10.7997 20.0171 16.3469 22.3198 18.4402 20.2265L20.4288 18.2378C21.1615 17.4005 21.1615 16.1445 20.4288 15.4119Z" fill="#D7282F"/>
                               </svg> <a href="tel:+74956222222">8 (495) 622-22-22 (для Москвы)</a></p>
							<p class="contact__phone"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M20.4288 15.4119L17.4982 12.4813C16.4516 11.4346 14.6723 11.8533 14.2536 13.2139C13.9396 14.1559 12.893 14.6793 11.951 14.4699C9.85771 13.9466 7.03176 11.2253 6.50844 9.02733C6.19444 8.08531 6.82243 7.03866 7.76441 6.72471C9.12506 6.30605 9.54371 4.52675 8.49707 3.4801L5.56645 0.54949C4.72914 -0.183163 3.47316 -0.183163 2.74051 0.54949L0.751877 2.53812C-1.23675 4.63141 0.961206 10.1786 5.88045 15.0979C10.7997 20.0171 16.3469 22.3198 18.4402 20.2265L20.4288 18.2378C21.1615 17.4005 21.1615 16.1445 20.4288 15.4119Z" fill="#D7282F"/>
                               </svg> <a href="tel:+78002202202">8 (800) 220-22-02 (бесплатный номер для регионов РФ)</a></p>
						</div>
						<p class="contact__title"><strong>Время работы контактного центра:</strong></p>
                        <p>Ежедневно с 8:00 до 20:00</p>
					</div>
					<div class="contact__item">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adc011f5c25e32ff01498e8c3379d389fce669e55cd19688de2e23feb67a1cff2&amp;source=constructor" width="100%" height="532" frameborder="0"></iframe>
					</div>
				</section>
			</section>


	<?php

get_footer();
