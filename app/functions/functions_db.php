<?php
require_once('config/config.php');

$mysqli = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);

mysqli_set_charset($mysqli, 'utf8');

if (!$mysqli) {
    echo('Ошибка подключения к базе данных' . mysqli_connect_error());
} else {
    $connection = $mysqli;
}

function fetchProjects($connection)
{
    $sql = "SELECT p.title
            FROM projects AS p
            JOIN users AS u ON u.id = 1
            AND u.id = p.user_id";

    $query = mysqli_query($connection, $sql);

    $fetch_result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return array_map(function ($el) {
        return $el['title'];
    }, $fetch_result);
}

function fetchTasks($connection)
{
    $sql = "SELECT t.title, t.deadline, t.status
            FROM tasks AS t
            JOIN projects AS p ON p.id = 1
            AND t.project_id = p.id";

    $query = mysqli_query($connection, $sql);

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}
