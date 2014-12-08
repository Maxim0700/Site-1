<?php
include_once "PrX/library/errors.php";
include_once "PrX/library/hookup_bd.php";

session_start();

include_once "PrX/library/checkpoint.php"; //Вход в адимн-панель



if (isset($admin_panel)){
if ($admin_panel=="go_admin_panel") { //ссылка на админ-панель
		
		include_once "PrX/control_board/apanel.php";
		}
		}
else {

include_once "PrX/library/default.php";

}
?>
