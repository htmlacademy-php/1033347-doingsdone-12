<?php
function tasks_counter ($project_tasks, $project_title)
{
    $result = 0;
    foreach ($project_tasks as $project_task) {
        if ($project_task["category"] === $project_title) {
            $result++;
        }
    }

    return $result;
}
