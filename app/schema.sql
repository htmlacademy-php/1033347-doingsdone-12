CREATE DATABASE IF NOT EXISTS doingsdone DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

CREATE TABLE IF NOT EXISTS users
(
  id            INT AUTO_INCREMENT PRIMARY KEY,
  registered_at DATETIME DEFAULT NOW(),
  email         VARCHAR(320) UNIQUE NOT NULL,
  login         VARCHAR(128) UNIQUE NOT NULL,
  password      VARCHAR(255)        NOT NULL
);

CREATE TABLE IF NOT EXISTS projects
(
  id      INT AUTO_INCREMENT PRIMARY KEY,
  title   VARCHAR(128) UNIQUE NOT NULL,
  user_id INT                 NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id)
);

CREATE TABLE IF NOT EXISTS tasks
(
  id            INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW(),
  status        BOOL     DEFAULT FALSE,
  title         VARCHAR(128) NOT NULL,
  file_link     TEXT,
  deadline      DATETIME DEFAULT NULL,
  user_id       INT          NOT NULL,
  project_id    INT          NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id),
  FOREIGN KEY (project_id) REFERENCES projects (id)
);
