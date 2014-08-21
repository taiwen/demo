CREATE TABLE `{freetrial}` (
  `id`           INT(10) UNSIGNED         NOT NULL AUTO_INCREMENT,
  `username`     VARCHAR(64)              NOT NULL DEFAULT '',
  `work`        VARCHAR(64)             NOT NULL DEFAULT '',
  `company`      VARCHAR(64)             NOT NULL DEFAULT '',
  `comp_mail`      VARCHAR(64)             NOT NULL DEFAULT '',
  `phonenum`        INT(11) UNSIGNED         NOT NULL ,
  
   PRIMARY KEY        (`id`)
);
