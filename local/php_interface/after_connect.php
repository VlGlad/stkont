<?php
$DB = \Bitrix\Main\Application::getConnection();
$DB->Query("SET NAMES 'utf8mb3'");
$DB->Query("SET collation_connection = 'utf8_unicode_ci'");