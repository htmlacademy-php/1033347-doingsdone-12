<?php
function taskCounter($project_tasks, $project_title)
{
    $result = 0;
    foreach ($project_tasks as $project_task) {
        if ($project_task['category'] === $project_title) {
            $result++;
        }
    }

    return $result;
}

function isHotTask($task_date)
{
    if (is_null($task_date)) { return false; }
    $target = strtotime($task_date);
    $current = time();
    $interval = $target - $current;
    $period = 86400;
    return $interval <= $period;

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
