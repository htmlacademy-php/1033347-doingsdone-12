<?php
require_once 'config/config.php';
require_once 'config/settings.php';
require_once 'helpers.php';
require_once 'functions/functions.php';
require_once 'functions/fetchers.php';

$title = 'Дела в порядке: главная';
$user_name = 'Tony Stark';
$show_complete_tasks = rand(0, 1);
$projects = fetchProjects();
$tasks = fetchTasks();

$content = include_template('main.php', [
    'projects' => $projects,
    'tasks' => $tasks,
    'show_complete_tasks' => $show_complete_tasks,
]);

$layout = include_template('layout.php', [
    'title' => $title,
    'user_name' => $user_name,
    'content' => $content,
]);

echo($layout);
