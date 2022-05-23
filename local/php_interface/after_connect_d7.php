<?php
$connection = \Bitrix\Main\Application::getConnection();
$connection->queryExecute("SET NAMES 'utf8mb3'");
$connection->queryExecute('SET collation_connection = "utf8_unicode_ci"');
$connection->queryExecute("SET sql_mode=''");
$connection->queryExecute("SET innodb_strict_mode='OFF'");
