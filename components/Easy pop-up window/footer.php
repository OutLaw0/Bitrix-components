<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
			</div>
		</div>
		<div id="space-for-footer"></div>
	</div>
	
	<div id="footer">
	
		<div id="copyright">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/copyright.php",
	Array(),
	Array("MODE"=>"html")
);
?>
		</div>
		<div class="footer-links">	
<?
$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
	"ROOT_MENU_TYPE" => "bottom",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);
?>
		</div>
		<div id="footer-design"><?=GetMessage("FOOTER_DISIGN")?></div>
	</div>
	
		<a href="#x" class="overlay" id="win1"></a>
    <div class="popup">
	<h3>Заказать звонок</h3>
<?$APPLICATION->IncludeComponent(
	"outlaw:main.feedback",
	"",
	Array( 
		"EMAIL_TO" => "anicemail@gmail.com",
		"EVENT_MESSAGE_ID" => ["7"],
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NONE"),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
        "AJAX_OPTION_SHADOW" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N"
       
	)
);?>
	<a class="close" title="Закрыть" href="#close"></a>
</div>
<a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
	<h3>Купить в один клик!</h3>
<?$APPLICATION->IncludeComponent(
	"outlaw:feedback",
	"",
	Array( 
		"EMAIL_TO" => "anicemail@gmail.com",
		"EVENT_MESSAGE_ID" => ["7"],
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NONE"),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
        "AJAX_OPTION_SHADOW" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N"
       
	)
);?>
	<a class="close" title="Закрыть" href="#close"></a>
</div>
	
</body>
</html>