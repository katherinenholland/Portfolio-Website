<? php

if(!isset($_POST["save"]) || $_POST["save"] != "contact") {
	header("Location: contact-form.php"); exit;
}