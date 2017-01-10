<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("С_FEEDBACK_FORM_DESC_NAME"),
	"DESCRIPTION" => GetMessage("С_FEEDBACK_FORM_DESC_DESC"),
	"ICON" => "",
	"CACHE_PATH" => "Y",
	"SORT" => 40,
	"PATH" => array(
		"ID" => "baccara",
		"NAME" => "Блэк Баккара",
		"CHILD" => array(
			"ID" => "feedback",
			"NAME" => GetMessage("С_FEEDBACK_FORM_DESC_NAME"),
			"SORT" => 20,
		)
	),
);

?>