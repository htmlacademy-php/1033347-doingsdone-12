<?php
require_once 'config/config.php';
require_once 'config/settings.php';

function fetchProjects()
{
    global $connection;
    $sql = "SELECT p.title
            FROM projects AS p
            WHERE p.user_id = 1";

    $query = mysqli_query($connection, $sql);

    $fetch_result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return array_map(function ($el) {
        return $el['title'];
    }, $fetch_result);
}

function fetchTasks()
{
    global $connection;
    $sql = "SELECT t.title, t.deadline, t.status
            FROM tasks AS t
            WHERE t.project_id = 1";

    $query = mysqli_query($connection, $sql);

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}
