<?php
require_once 'config/config.php';

$connection = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);

mysqli_set_charset($connection, 'utf8');

if (!$connection) {
    die('Ошибка подключения к базе данных' . mysqli_connect_error());
}
