<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><div class="index-section-1">
	<div class="container relative">
 <nav class="main-nav -flex -center -just-btw"> </nav>
		<div class="index-section-1__content">
			<h1>Продажа и обслуживание складской техники напрямую со склада производителя</h1>
			<div class="index-section-1__des">
				 Подберем технику за 15 минут <br>
				 на основании особенностей эксплуатации
			</div>
            <div class="horizontal-form">
                    <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "template1", Array(
                        "CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
                        "CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
                        "EDIT_URL" => "",	// Страница редактирования результата
                        "IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
                        "LIST_URL" => "",	// Страница со списком результатов
                        "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                        "SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
                        "USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
                        "VARIABLE_ALIASES" => array(
                            "RESULT_ID" => "RESULT_ID",
                            "WEB_FORM_ID" => "WEB_FORM_ID",
                        ),
                        "WEB_FORM_ID" => "1",	// ID веб-формы
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_SHADOW" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                    ),
                        false
                    );?>
            </div>
		</div>
		<div class="kube-1">
 <img src="<?=SITE_TEMPLATE_PATH?>/img/ku.png" alt=""><br>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>