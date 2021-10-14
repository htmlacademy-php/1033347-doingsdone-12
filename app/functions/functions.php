<?php
function tasksСounter($project_tasks, $project_title)
{
    $result = 0;
    foreach ($project_tasks as $project_task) {
        if ($project_task["category"] === $project_title) {
            $result++;
        }
    }

    return $result;
}

function isHotTask($task_date)
{
    if (!is_null($task_date)) {
        $target = strtotime($task_date);
        $current = time();
        $interval = $target - $current;
        $period = 86400;
        $result = false;
        if ($interval <= $period) {
            $result = true;
        }
        return $result;
    }
}
