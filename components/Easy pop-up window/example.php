
<?// Cсылка на всплывающее окно, вставляем в нужном месте	?>

<a href="#win1"><p>Форма обратной связи</p></a></div>
	
<a href="#win2"><p>Заказать звонок</p></a></div>
	
<?// Добавляем наши скрытые компоненты, лучше в footer	?>

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


<?/* И обязательно стили CSS

.overlay {
background-color: rgba(0, 0, 0, 0.7);
bottom: 0;
cursor: default;
left: 0;
opacity: 0;
position: fixed;
right: 0;
top: 0;
visibility: hidden;
z-index: 10;
-webkit-transition: opacity .5s;
-moz-transition: opacity .5s;
-ms-transition: opacity .5s;
-o-transition: opacity .5s;
transition: opacity .5s;
}
.overlay:target {
visibility: visible;
opacity: 1;
}
.popup {
background-color: #fff;
border: 3px solid #fff;
display: inline-block;
left: 50%;
opacity: 0;
padding: 15px;
position: fixed;
text-align: justify;
font: 14px Helvetica, Arial, Sans-Serif;
top: 40%;
visibility: hidden;
z-index: 10;

-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);

-webkit-border-radius: 10px;
-moz-border-radius: 10px;
-ms-border-radius: 10px;
-o-border-radius: 10px;
border-radius: 10px;

-webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
-moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
-ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
-o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-webkit-transition: opacity .5s, top .5s;
-moz-transition: opacity .5s, top .5s;
-ms-transition: opacity .5s, top .5s;
-o-transition: opacity .5s, top .5s;
transition: opacity .5s, top .5s;
}
.overlay:target+.popup {
top: 50%;
opacity: 1;
visibility: visible;
}
.close {
background-color: rgba(0, 0, 0, 0.8);
border: 2px solid #ccc;
height: 24px;
line-height: 24px;
position: absolute;
right: -13px;
font-weight: bold;
text-align: center;
text-decoration: none;
top: -15px;
width: 24px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
-ms-border-radius: 15px;
-o-border-radius: 15px;
border-radius: 15px;
-moz-box-shadow: 1px 1px 3px #000;
-webkit-box-shadow: 1px 1px 3px #000;
box-shadow: 1px 1px 3px #000;
}
.close:before {
color: rgba(255, 255, 255, 0.9);
content: "X";
font-size: 14px;
text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
}
.close:hover {
background-color: rgba(64, 128, 128, 0.8);
}
*/
?>