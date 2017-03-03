
DROP DATABASE IF EXISTS `snmof`;

-- on supprime, si refresh, dans la table user de la base mysql l'utilisateur créé
DELETE FROM mysql.user WHERE user='admin' and host='admin';

CREATE DATABASE `snmof`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

-- création d'un utilisateur spécifique qui n'aura que des droits sur une base de données déterminée
GRANT ALL PRIVILEGES ON `snmof`.* to 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION;
