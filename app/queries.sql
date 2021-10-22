USE
doingsdone;

INSERT INTO users (email, login, password)
VALUES ('tony@stark.org', 'tony_stark', MD5('morgan3000')),
       ('bruce@wayne.org', 'Im_Batman', MD5('selina')),
       ('fedor@dostoevsky.com', 'Dostoevsky', MD5('zero123'));

INSERT INTO projects (title, user_id)
VALUES ('Mark L', 1),
       ('Спасительница', 1),
       ('Gotham', 2),
       ('Superman', 2),
       ('Делишки', 3);

INSERT INTO tasks (title, status, user_id, project_id)
VALUES ('Обновить програмное обеспечение', false, 1, 1),
       ('Подобрать цветовую палитру', true, 1, 1),
       ('Заменить подшипники', false, 1, 2),
       ('Провести повторные испытания', false, 1, 2),
       ('Посетить лечебницу Аркхем', false, 2, 3),
       ('Проведать Гордона', false, 2, 3),
       ('Найти криптонит', false, 2, 4),
       ('Закончить роман Игрок', false, 3, 5),
       ('Расплатиться по долгам', false, 3, 5);

-- List of projects for current user

SELECT p.title
FROM projects AS p
       JOIN users AS u ON u.id = 1
  AND u.id = p.user_id;

-- List of tasks for current project

SELECT t.title
FROM tasks AS t
       JOIN projects AS p ON p.id = 5
  AND t.project_id = p.id;

-- Set status of current task to true

UPDATE tasks
SET status = false
WHERE task_title = 'Посетить лечебницу Аркхем';

-- Set task_label of current task by it's ID's

UPDATE tasks
SET task_title = 'Посетить Казино'
WHERE id = 9;
