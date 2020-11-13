<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?
		$APPLICATION->ShowHead();
		use Bitrix\Main\Page\Asset;
		?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/img/sun.png" /> 	
	</head>
	<body>
	<?$APPLICATION->ShowPanel();?>
	<header class="header">
			<div class="header__menu">
				<div class="header__links">
				<ul>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
				</ul>
					
					<div class="searh__bar">
							<div class="header__searhc">
							<!-- 	<input type="text" >
								<button class="colortext">ПОИСК</button> -->
								<?$APPLICATION->IncludeComponent(
									"bitrix:search.form", 
									"search", 
									array(
										"PAGE" => "/search/",
										"USE_SUGGEST" => "N",
										"COMPONENT_TEMPLATE" => "search"
									),
									false
								);?>
							</div>
					</div>
				</div>
			<div class="header__logo">		
				<a href="/"><?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "/includes/logo.php",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "/includes/logo.php"
					),
					false
				);?>
				</a>
			</div>
		</div>
	</header>
	<main>
				<div class="left__block">
				<div class="menu">
					<h2>
						Меню
					</h2>
				<div class="nav__links">
					 <?$APPLICATION->IncludeComponent("bitrix:menu", "side_menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "side",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
						false
					);?>
				</div>
				</div>	
						<div class="login">
							<h2 class="regestration">Регистрация</h2>
								<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "login_form", Array(
									"FORGOT_PASSWORD_URL" => "/forgot/",	// Страница забытого пароля
										"PROFILE_URL" => "/",	// Страница профиля
										"REGISTER_URL" => "/register/",	// Страница регистрации
										"SHOW_ERRORS" => "N",	// Показывать ошибки
										"COMPONENT_TEMPLATE" => "auth"
									),
									false
								);?>
							
						</div>
				<div class="shout">
					<div class="shout__content">
						<h2 class="shout__title">Объявления</h2>
						<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"side_shouts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "side_shouts",
		"DETAIL_URL" => "/#IBLOCK_CODE#/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "70",
		"PROPERTY_CODE" => array(
			0 => "AUTHOR",
			1 => "EMAIL",
			2 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
						

					<div class="other__shouts">
						<a href="/shouts/">Другие объявления</a>
					</div>
					
					</div>
				</div>
			</div>
		<div class="right__block">
	<div class="right__block__inner">