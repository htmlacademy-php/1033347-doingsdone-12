CREATE DATABASE IF NOT EXISTS doingsdone DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

CREATE TABLE IF NOT EXISTS users
(
  id                INT AUTO_INCREMENT PRIMARY KEY,
  registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  email             VARCHAR(128) UNIQUE NOT NULL,
  user_login        VARCHAR(128) UNIQUE NOT NULL,
  user_password     VARCHAR(255)        NOT NULL
);

CREATE TABLE IF NOT EXISTS projects
(
  id            INT AUTO_INCREMENT PRIMARY KEY,
  project_title VARCHAR(128) UNIQUE NOT NULL,
  user_id       INT                 NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE IF NOT EXISTS tasks
(
  id            INT AUTO_INCREMENT PRIMARY KEY,
  creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status        BOOL      DEFAULT FALSE,
  task_title    VARCHAR(128) NOT NULL,
  file_link     TEXT,
  dead_line     TIMESTAMP DEFAULT 0,
  user_id       INT          NOT NULL,
  project_id    INT          NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id),
  FOREIGN KEY (project_id) REFERENCES projects (id)
);
