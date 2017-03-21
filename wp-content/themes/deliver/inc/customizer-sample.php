<?php
/**
 * yourThemeName Theme Customizer
 *
 * @package yourThemeName
 */

function yourThemeName_customize_register( $wp_customize ) {
	// Settings

	/**
	 * Сеттинги это часть кастомайзера которая отвечает за запись какой-то настройки в базу данных.
	 * Для того чтоб связать какой-то элемент страницы с соответсвующим сеттингом необходимо взять ID сеттинга
	 * (в примере ниже ID = 'section_1_headline') и вписать в код <?php echo get_theme_mod('ID писать здесь') ?>.
	 * ID может быть любым (придуманым вами) в зависимости от того для чего создан сеттинг.
	 * Пример ниже сделан на основе хедера секции (заголовка и текста под ним).
	 * Порядок создания должен быть таким чтоб settings и sections (panels) создавались перед controls, иначе не будет работать.
	 ***/

	//section1
	$wp_customize->add_setting( 'section_1_header_headline' , array(
		'default'     => 'Headline',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'section_1_header_text' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

//Panels

	/**
	 * Панели это необязательные блоки которые группируют в себе секции (о секциях ниже).
	 * 'title' - имя панели которое будет отображаться в самом кастомайзере (второй аргумент - название темы).
	 * 'description' - не обязателен. Позволяет при наведении увидеть описания панели.
	 * 'priority' - определяет позицию данной панели (чем меньше число, тем выше позиция).
	 **/

	$wp_customize->add_panel('sections_options', array (
		'title' => __('Sections options', 'yourThemeName'),
		'description' => __('Choose a headline for your section.'),
		'priority'   => 10
	));

//Sections

	/**
	 * Секции это то что отображается в самом кастомайзере. Каждая секция это отдельный блок с текстом
	 * при нажатии на который мы переходим к контролам содержащимся в них (о контролах ниже).
	 * Секции можно группировать в панели. Панель это такой же блок как и сеттинги только в нём вместо контролов
	 * хранятся сеттинги чтоб их легче было группировать.
	 * 'title' - имя секции которое будет отображаться в самом кастомайзере (второй аргумент - название темы).
	 * 'panel' - выбираем панель в которую будет входить данная секция.
	 * 'priority' - определяет позицию данной секции (чем меньше число, тем выше позиция).
	 **/

	//section1
	$wp_customize->add_section( 'section_1' , array(
		'title'      => __( 'Section 1', 'yourThemeName' ),
		'panel' => 'sections_options',
		'priority'   => 10
	));

//Controls

	/**
	 * Контролы это именно то чем мы меняем наши настройки. Это может быть колорпикер, выбор картинки,
	 * текстовое поле, даже кастомное свойство стилей. От правильного использования WP_Customize_Control
	 * будет зависить поле настроек.
	 * Пример - WP_Customize_Control - выводит простое текстовое поле для ввода символов.
	 * WP_Customize_Color_Control - выведет колорпикер и т.д. (на оф. сайте есть вся инфа по контролам).
	 * 'label' - название контрола, которое будет отображаться над ним в самом кастомайзере
	 * (второй аргумент название темы).
	 * 'section' - секция в которую будет входить данный контрол и соответственно в которой он будет отображаться
	 * в кастомайзере.
	 * 'settings' - те сеттинги которые будут изменяться в последствии изменения каких либо знайчений
	 * (именно те сеттинги которые мы создали выше).
	 **/

	//section2
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_1_headline', array(
		'label'        => __( 'Section 1 headline', 'yourThemeName' ),
		'section'    => 'section_1',
		'settings'   => 'section_1_header_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_1_text', array(
		'label'        => __( 'Section 1 text', 'yourThemeName' ),
		'section'    => 'section_1',
		'settings'   => 'section_1_header_text'
	)));
}
add_action( 'customize_register', 'yourThemeName_customize_register' );
