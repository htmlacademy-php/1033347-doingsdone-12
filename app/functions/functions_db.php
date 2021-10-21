<?php
require_once ('../config/config.php');
require_once ('../config/settings.php');

function dbConnect($db)
{
    $mysqli = new mysqli($db['host'], $db['user'], $db['password'], $db['database']);

    $mysqli -> set_charset('utf8');

    return $mysqli;
}

function fetchProjects()
{
    return ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
}

function fetchTasks()
{
    return [
        [
            'title' => 'Собеседование в IT компании',
            'date' => '20.10.2021',
            'category' => 'Работа',
            'status' => false,
        ],
        [
            'title' => 'Выполнить тестовое задание',
            'date' => '15.10.2021',
            'category' => 'Работа',
            'status' => false,
        ],
        [
            'title' => 'Сделать задание первого раздела',
            'date' => '20.10.2021',
            'category' => 'Учеба',
            'status' => true,
        ],
        [
            'title' => 'Встреча с другом',
            'date' => '20.10.2021',
            'category' => 'Входящие',
            'status' => false,
        ],
        [
            'title' => 'Купить корм для кота',
            'date' => null,
            'category' => 'Домашние дела',
            'status' => false,
        ],
        [
            'title' => 'Заказать пиццу',
            'date' => null,
            'category' => 'Домашние дела',
            'status' => false,
        ],
    ];
}
