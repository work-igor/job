<?php
/**
 * Template name: Другие вакансии
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php echo get_post_field('post_content', $post->ID); ?>
<style>
    .entry-title,
    .filter,
    .result-filter,
    .result {
        padding: 0 40px;
    }
    .result {
        margin-top: 80px;
    }
    .filter {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        background: #F9F9F9;
        margin-top: 40px;
    }
    .filter__click {
        font-size: 17px;
        font-weight: bold;
        color: #D7282F;
        padding: 15px 0;
        margin-bottom: 0;
    }
    .filter__click:hover {
        cursor: pointer;
    }
    .filter__item {
        margin: 0 1rem;
    }
    .filter__item:first-child {
        margin-left: 0;
    }
    .filter .checkbox label,
    .filter input[type="checkbox"]:hover {
        cursor: pointer;
    }
    .filter .checkbox input[type="checkbox"]:checked {
        background: #cf2e2e;
    }
    .filter__item {
        position: relative;
    }
    .filter__block {
        position: absolute;
        z-index: 100;
        color: #3A3A3A;
        background: #F9F9F9;
        width: auto;
        display: block;
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.14);
    }
    .filter__block:before {
        content: '';
        display: table;
        position: absolute;
        top: -16px;
        left: 20px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid #F9F9F9;
    }
    .checkbox label {
        white-space: nowrap;
    }
    .filter .hidden {
        display: none;
    }
    /* style accordion */
    .accordion__btn {
        width: 100%;
        border: 0;
        background-color: transparent;
        color: #3a3a3a;
        text-align: left;
        font-size: 20px;
        font-weight: bold;
        padding: 1rem 0;
        cursor: pointer;
    }
    .accordion__btn:hover,
    .accordion__btn:focus {
        background-color: #ffffff;
        color: #3a3a3a;
    }
    .accordion__content {
        overflow: hidden;
        max-height: 0;
    }
    .accordion__content.active {
        display: block;
    }
    .accordion__btn:after {
        content: "+";
        float: right;
        right: 0;
        color: #777;
        font-weight: 300;
    }
    .active .accordion__btn:after {
        content: "-";
    }
    .accordion__money {
        font-weight: bold;
    }
    .accordion__title {
        display: block;
        color: #cf2e2e;
        font-weight: bold;
        background: rgba(0,0,0,.05);
        margin-bottom: 1.5em;
        padding: 1.2rem;
    }
    .accordion__content li {
        margin-bottom: 1.5rem;
    }
    .btn__block {
        display: block !important;
    }
    a.btn__item {
        border: none;
        border-radius: 28px;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        font-size: 18px;
        margin: 0 0 1rem 0;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        overflow-wrap: break-word;
        background-color: #cf2e2e;
        color: #FFFFFF;
    }
    /* end style accordion*/
    .filter input[type="checkbox"] {
        display: none;
    }
    .filter label:before {
        content: " ";
        display: inline-block;
        margin-right: 15px;
        position: relative;
        width: 15px;
        height: 15px;
        background: #FFF;
        border: 1px solid #BEBEBE;
        vertical-align: middle;
        margin-bottom: 3px;
    }
    .filter input:checked + label {
        color: #D7282F;
    }
    .filter input:checked + label:before {
        background: #D7282F;
    }
    /* filter panel */
    .filter__panel {
        color: #D7282F;
        font-weight: bold;
    }
    .filter__panel label {
        display: none;
        position: relative;
        padding-top: 0px;
        padding-bottom: 15px;
        padding-right: 0.5rem;
        padding-left: 0;
    }
    .filter__panel label:hover,
    .filter__panel label::after {
        cursor: pointer;
    }
    .filter__panel label::after {
        content: '\00D7';
        display: inline-block;
        position: relative;
        font-size: 1.2rem;
        color: #D7282F;
        margin-left: 8px;
    }
    .result-filter {
        display: flex;
        flex-wrap: wrap;
        background: #F9F9F9;
    }
    /* end filter panel */
    .filter__click {
        position: relative;
        z-index: 10;
    }
    .arrow-filter {
        width: 8px;
        height: 3px;
        z-index: -10;
        padding-left: 10px;
    }
    .arrow-transform .arrow-filter svg {
        transform: rotate(180deg);
    }
    .filter__reset {
        display: none;
        margin-left: auto;
    }
    .filter__reset:hover {
        cursor: pointer;
    }
    .filter__reset {
        font-weight: bold;
    }
    .checkbox {
        padding: 0.5rem;
    }
/*  site style  */
    .site-footer {
        margin-top: 25rem;
    }

/* site style   */
@media (max-width: 768px) {
    .filter__item {
        width: 45%;
    }
    .checkbox {
        padding: 1rem;
    }
    .result .accordion__item .accordion__btn {
        padding: 1rem 0;
    }
}
@media (max-width: 568px) {
    .filter {
        flex-direction: column;
        padding: 0 1rem;
    }
    .filter__item {
        margin: 0;
        width: 100%;
    }
    .filter__block {
        width: 100%;
    }
    .checkbox label {
        display: flex;
        white-space: normal;
    }
    .checkbox {
        padding: 0;
    }
    .checkbox label {
        padding: 1rem;
        border-bottom: 1px solid #BEBEBE;
    }
    .filter label:before {
        display: none;
    }
    .filter input:checked + label {
        background: #D7282F;
        color: #FFFFFF;
    }
    .filter__block:before {
        display: none;
    }
    .btn__item {
        margin-top: 1rem;
    }
    .entry-title,
    .filter,
    .result-filter,
    .result {
        padding: 0px 10px;
    }
}
</style>
<section class="filter">
<!--Фильтр опыт работы -->
    <div class="filter__item filter__experience">
        <h2 class="filter__click">Опыт работы<span class="filter__click arrow-filter"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 4L9 1" stroke="#D7282F" stroke-width="2"/></svg></span></h2>
        <div class="filter__block hidden">
            <div class="checkbox">
                <input type="checkbox" rel="experience__no" onchange="change();" id="b1"/>
                <label for="b1">Без опыта работы</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="experience__yes" onchange="change();" id="b2"/>
                <label for="b2">С опытом работы</label>
            </div>
        </div>
    </div>
<!--Фильтр образование -->
    <div class="filter__item filter__education">
        <h2 class="filter__click">Образование<span class="filter__click arrow-filter"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 4L9 1" stroke="#D7282F" stroke-width="2"/></svg></span></h2>
        <div class="filter__block hidden">
            <div class="checkbox">
                <input type="checkbox" rel="high" onchange="change();" id="b3"/>
                <label for="b3">Высшее</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="secondary-vocational" onchange="change();" id="b4"/>
                <label for="b4">Среднее профессиональное</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="average-general" onchange="change();" id="b5"/>
                <label for="b5">Среднее общее</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="basic-general" onchange="change();" id="b6"/>
                <label for="b6">Основное общее</label>
            </div>
        </div>
    </div>
<!--Фильтр график работы -->
    <div class="filter__item filter__schedule">
        <h2 class="filter__click">График работы<span class="filter__click arrow-filter"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 4L9 1" stroke="#D7282F" stroke-width="2"/></svg></span></h2>
        <div class="filter__block hidden">
            <div class="checkbox">
                <input type="checkbox" rel="schedule-one" onchange="change();" id="b7"/>
                <label for="b7">5/2</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="schedule-two" onchange="change();" id="b8"/>
                <label for="b8">2/2</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="schedule-three" onchange="change();" id="b9"/>
                <label for="b9">1/3</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="schedule-four" onchange="change();" id="b10"/>
                <label for="b10">Сменный</label>
            </div>
        </div>
    </div>
<!--Фильтр профобласть -->
    <div class="filter__item filter__professional">
        <h2 class="filter__click">Профобласть<span class="filter__click arrow-filter"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 4L9 1" stroke="#D7282F" stroke-width="2"/></svg></span></h2>
        <div class="filter__block hidden">
            <div class="checkbox">
                <input type="checkbox" rel="professional__administrative-staff" onchange="change();" id="b11"/>
                <label for="b11">Административный персонал</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__working-staff" onchange="change();" id="b12"/>
                <label for="b12">Рабочий персонал</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__security" onchange="change();" id="b13"/>
                <label for="b13">Безопасность</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__finance" onchange="change();" id="b14"/>
                <label for="b14">Бухгалтерия, управленческий учет, финансы</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__it" onchange="change();" id="b15"/>
                <label for="b15">Информационные технологии, телефония</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__driving-staff" onchange="change();" id="b16"/>
                <label for="b16">Водительский состав</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__engineer" onchange="change();" id="b17"/>
                <label for="b17">Технические, инженерные специальности</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__cleaning" onchange="change();" id="b18"/>
                <label for="b18">Клининг</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__pr" onchange="change();" id="b19"/>
                <label for="b19">Маркетинг, реклама, PR</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__medicine" onchange="change();" id="b20"/>
                <label for="b20">Медицина</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__sales" onchange="change();" id="b21"/>
                <label for="b21">Консультирование, продажи</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__control" onchange="change();" id="b22"/>
                <label for="b22">Управление персоналом, обучение персонала</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__lawyer" onchange="change();" id="b23"/>
                <label for="b23">Юристы</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="professional__management" onchange="change();" id="b24"/>
                <label for="b24">Руководство</label>
            </div>
        </div>
    </div>
<!--Фильтр Работодатель -->
    <div class="filter__item filter__employer">
        <h2 class="filter__click">Работодатель<span class="filter__click arrow-filter"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L5 4L9 1" stroke="#D7282F" stroke-width="2"/></svg></span></h2>
        <div class="filter__block hidden">
            <div class="checkbox">
                <input type="checkbox" rel="employer-ampp" onchange="change();" id="b25"/>
                <label for="b25">Московский паркинг</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-op" onchange="change();" id="b26"/>
                <label for="b26">Организатор перевозок</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-mm" onchange="change();" id="b27"/>
                <label for="b27">Московский метрополитен</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-m" onchange="change();" id="b28"/>
                <label for="b28">Мосгортранс</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-mtp" onchange="change();" id="b29"/>
                <label for="b29">МосТрансПроект</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-codd" onchange="change();" id="b30"/>
                <label for="b30">Центр организации дорожного движения</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-mt" onchange="change();" id="b31"/>
                <label for="b31">Музей Транспорта Москвы</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-madi" onchange="change();" id="b32"/>
                <label for="b32">Московская административная дорожная инспекция</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" rel="employer-mdto" onchange="change();" id="b33"/>
                <label for="b33">Московская дирекция транспортного обслуживания</label>
            </div>
        </div>
    </div>
</section>
    <section class="result-filter">
        <div class="experience__no filter__panel"><label for="b1">Без опыта работы</label></div>
        <div class="experience__yes filter__panel"><label for="b2">С опытом работы</label></div>
        <div class="high filter__panel"><label for="b3">Высшее</label></div>
        <div class="secondary-vocational filter__panel"><label for="b4">Среднее профессиональное</label></div>
        <div class="average-general filter__panel"><label for="b5">Среднее общее</label></div>
        <div class="basic-general filter__panel"><label for="b6">Основное общее</label></div>
        <div class="schedule-one filter__panel"><label for="b7">5/2</label></div>
        <div class="schedule-two filter__panel"><label for="b8">2/2</label></div>
        <div class="schedule-three filter__panel"><label for="b9">1/3</label></div>
        <div class="schedule-four filter__panel"><label for="b10">Сменный</label></div>
        <div class="professional__administrative-staff filter__panel"><label for="b11">Административный персонал</label></div>
        <div class="professional__working-staff filter__panel"><label for="b12">Рабочий персонал</label></div>
        <div class="professional__security filter__panel"><label for="b13">Безопасность</label></div>
        <div class="professional__finance filter__panel"><label for="b14">Бухгалтерия, управленческий учет, финансы</label></div>
        <div class="professional__it filter__panel"><label for="b15">Информационные технологии, телефония</label></div>
        <div class="professional__driving-staff filter__panel"><label for="b16">Водительский состав</label></div>
        <div class="professional__engineer filter__panel"><label for="b17">Технические, инженерные специальности</label></div>
        <div class="professional__cleaning filter__panel"><label for="b18">Клининг</label></div>
        <div class="professional__pr filter__panel"><label for="b19">Маркетинг, реклама, PR</label></div>
        <div class="professional__medicine filter__panel"><label for="b20">Медицинаы</label></div>
        <div class="professional__sales filter__panel"><label for="b21">Консультирование, продажи</label></div>
        <div class="professional__control filter__panel"><label for="b22">Управление персоналом, обучение персонала</label></div>
        <div class="professional__lawyer filter__panel"><label for="b23">Юристы</label></div>
        <div class="professional__management filter__panel"><label for="b24">Руководство</label></div>
        <div class="employer-ampp filter__panel"><label for="b25">Московский паркинг</label></div>
        <div class="employer-op filter__panel"><label for="b26">Организатор перевозок</label></div>
        <div class="employer-mm filter__panel"><label for="b27">Московский метрополитен</label></div>
        <div class="employer-m filter__panel"><label for="b28">Мосгортранс</label></div>
        <div class="employer-mtp filter__panel"><label for="b29">МосТрансПроект</label></div>
        <div class="employer-codd filter__panel"><label for="b30">Центр организации дорожного движения</label></div>
        <div class="employer-mt filter__panel"><label for="b31">Музей Транспорта Москвы</label></div>
        <div class="employer-madi filter__panel"><label for="b32">Московская административная дорожная инспекция</label></div>
        <div class="employer-mdto filter__panel"><label for="b33">Московская дирекция транспортного обслуживания</label></div>
        <span class="filter__reset">Очистить фильтры</span>
    </section>
<section class="result">
<?php
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'post_type'   => 'drugie',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
foreach( $posts as $post ){
  setup_postdata($post);
  ?>
  <div class="accordion__item <?php the_field('experience'); ?> <?php the_field('education'); ?> <?php the_field('schedule_f'); ?> <?php the_field('professional'); ?> <?php the_field('employer'); ?>">
  <button class="accordion__btn"><?php the_title() ?></button>
      <div class="accordion__content">
        <p class="accordion__money"><?php the_field('schedule_title'); ?></p>
        <p class="accordion__money"><?php the_field('salary'); ?></p>
        <span class="accordion__title">Обязанности</span>
        <?php the_field('duty'); ?>
        <span class="accordion__title">График работы</span>
        <?php the_field('schedule'); ?>
        <span class="accordion__title">Требования к кандидатам</span>
        <?php the_field('requirements'); ?>
        <div class="btn__block">
            <a class="btn__item wp-block-button__link has-background has-vivid-red-background-color" href="mailto:rabota@mosmetro.ru?subject=Резюме на вакансию &quot;<?php the_title() ?>&quot;" rel=""><strong>ОТПРАВИТЬ РЕЗЮМЕ</strong></a>
            <a class="btn__item wp-block-button__link has-background has-vivid-red-background-color" href="tel:+74956220201"><strong>ПОЗВОНИТЬ</strong></a>
        </div>
      </div>
  </div>
  <?php
}
wp_reset_postdata(); // сброс

?>
<script>
// Функция фильтра
function change() {
    let experienceFilter = document.querySelectorAll(".filter__experience input[type='checkbox']");
    let educationFilter = document.querySelectorAll(".filter__education input[type='checkbox']");
    let scheduleFilter = document.querySelectorAll(".filter__schedule input[type='checkbox']");
    let professionalFilter = document.querySelectorAll(".filter__professional input[type='checkbox']");
    let employerFilter = document.querySelectorAll(".filter__employer input[type='checkbox']");

    let filters = {
        experience: getClassOfCheckedCheckboxes(experienceFilter),
        education: getClassOfCheckedCheckboxes(educationFilter),
        schedule: getClassOfCheckedCheckboxes(scheduleFilter),
        professional: getClassOfCheckedCheckboxes(professionalFilter),
        employer: getClassOfCheckedCheckboxes(employerFilter)
    };

    filterResults(filters);
}

function getClassOfCheckedCheckboxes(checkboxes) {
    let classes = [];

    if (checkboxes && checkboxes.length > 0) {
        for (let i = 0; i < checkboxes.length; i++) {
            let cb = checkboxes[i];

            if (cb.checked) {
                classes.push(cb.getAttribute("rel"));
            }
        }
    }

    return classes;
}

function filterResults(filters) {
    let rElems = document.querySelectorAll(".result div");
    let hiddenElems = [];
    let filterPanelItem = document.querySelectorAll('.filter input[type="checkbox"]');
    let resultFilterItem = document.querySelectorAll('.result-filter label');
    let resetFilterBtn = document.querySelector('.filter__reset');
    resetFilterBtn.addEventListener('click', function () {
        location.reload();
    });

    for (let i = 0; i < filterPanelItem.length; i++) {
        if (filterPanelItem[i].id === resultFilterItem[i].htmlFor) {
            if (filterPanelItem[i].checked) {
                resultFilterItem[i].style.display = 'inline-block';
            } else {
                resultFilterItem[i].style.display = 'none';
            }
        }
    }

    if (!rElems || rElems.length <= 0) {
        return;
    }

    for (let i = 0; i < rElems.length; i++) {
        let el = rElems[i];

        if (filters.experience.length > 0) {
            let isHidden = true;

            for (let j = 0; j < filters.experience.length; j++) {
                let filter = filters.experience[j];

                if (el.classList.contains(filter)) {
                    isHidden = false;
                    break;
                }
            }



            if (isHidden) {
                hiddenElems.push(el);
            }
        }

        if (filters.education.length > 0) {
            let isHidden = true;

            for (let j = 0; j < filters.education.length; j++) {
                let filter = filters.education[j];

                if (el.classList.contains(filter)) {
                    isHidden = false;
                    break;
                }
            }

            if (isHidden) {
                hiddenElems.push(el);
            }
        }

        if (filters.schedule.length > 0) {
            let isHidden = true;

            for (let j = 0; j < filters.schedule.length; j++) {
                let filter = filters.schedule[j];

                if (el.classList.contains(filter)) {
                    isHidden = false;
                    break;
                }
            }

            if (isHidden) {
                hiddenElems.push(el);
            }
        }

        if (filters.professional.length > 0) {
            let isHidden = true;

            for (let j = 0; j < filters.professional.length; j++) {
                let filter = filters.professional[j];

                if (el.classList.contains(filter)) {
                    isHidden = false;
                    break;
                }
            }

            if (isHidden) {
                hiddenElems.push(el);
            }
        }

        if (filters.employer.length > 0) {
            let isHidden = true;

            for (let j = 0; j < filters.employer.length; j++) {
                let filter = filters.employer[j];

                if (el.classList.contains(filter)) {
                    isHidden = false;
                    break;
                }
            }

            if (isHidden) {
                hiddenElems.push(el);
            }
        }

    }

    for (let i = 0; i < rElems.length; i++) {
        rElems[i].style.display = "block";
    }

    if (hiddenElems.length <= 0) {
        resetFilterBtn.style.display = "none";
        return;
    }

    for (let i = 0; i < hiddenElems.length; i++) {
        hiddenElems[i].style.display = "none";
        resetFilterBtn.style.display = "block";
    }

}
//

// Функция показа выпадающего фильтра
(function dropDown() {
        let filterClick = document.querySelectorAll('.filter__click'); // находим все фильтры
        let arrowTransform = document.querySelectorAll('.arrow-filter');

        for (let i = 0; i < filterClick.length; i++) {
            filterClick[i].addEventListener('click', function () { // слушаем клик по фильтру
                let filter = this.nextElementSibling; // находим следующий за кнопкой блок с выпадающим списком фильтров
                filter.classList.toggle('hidden');
                filterClick[i].classList.add('arrow-transform');

                document.addEventListener('click',  function (event) { // слушаем если был клик вне блока с фильтром
                    const target = event.target;
                    if ((target !== filterClick[i]) && (!target.closest('.filter__block'))) {
                        filter.classList.add('hidden');
                        filterClick[i].classList.remove('arrow-transform');
                    }
                });
            });
        }

})();
//

//Функция гармошка
(function accordion() {
    let accordionButtons = document.querySelectorAll('.accordion__btn'); // находим все кнопки списка

    for (let i = 0; i < accordionButtons.length; i++) {
        accordionButtons[i].addEventListener('click', openAccordionButtons);
    }

    function openAccordionButtons () {
        for (let i = 0; i < accordionButtons.length; i++) {
            let parent = accordionButtons[i].parentElement;
            let accordionContent = accordionButtons[i].nextElementSibling;

            if (this === accordionButtons[i] && !parent.classList.contains('active')) {
                parent.classList.add('active');
                accordionContent.style.display = 'block';
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                parent.scrollIntoView(top);
            }
            else {
                parent.classList.remove('active');
                accordionContent.style.maxHeight = '0px';
            }
        }
    }
})();
//
</script>
<?php


get_footer();
