
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- sf_guard_user_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_profile`;


CREATE TABLE `sf_guard_user_profile`
(
	`sf_guard_user_profile_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`name` VARCHAR(250)  NOT NULL,
	`lastname` VARCHAR(250)  NOT NULL,
	`lastname2` VARCHAR(250)  NOT NULL,
	`email` VARCHAR(100) default 'unknown' NOT NULL,
	PRIMARY KEY (`sf_guard_user_profile_id`),
	INDEX `sf_guard_user_profile_FI_1` (`user_id`),
	CONSTRAINT `sf_guard_user_profile_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- red_social
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `red_social`;


CREATE TABLE `red_social`
(
	`red_social_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(250)  NOT NULL,
	PRIMARY KEY (`red_social_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- anonimo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `anonimo`;


CREATE TABLE `anonimo`
(
	`anonimo_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(250)  NOT NULL,
	`email` VARCHAR(250)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`anonimo_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- blog
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;


CREATE TABLE `blog`
(
	`blog_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`nombre` VARCHAR(250)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`blog_id`),
	INDEX `blog_FI_1` (`user_id`),
	CONSTRAINT `blog_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- mensaje
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mensaje`;


CREATE TABLE `mensaje`
(
	`mensaje_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`destinatario_id` INTEGER  NOT NULL,
	`remitente_id` INTEGER  NOT NULL,
	`anonimo` INTEGER default 0 NOT NULL,
	`asunto` VARCHAR(250)  NOT NULL,
	`mensaje` TEXT,
	`send_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`mensaje_id`),
	INDEX `mensaje_FI_1` (`destinatario_id`),
	CONSTRAINT `mensaje_FK_1`
		FOREIGN KEY (`destinatario_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `mensaje_FI_2` (`remitente_id`),
	CONSTRAINT `mensaje_FK_2`
		FOREIGN KEY (`remitente_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- respuesta_mensaje
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuesta_mensaje`;


CREATE TABLE `respuesta_mensaje`
(
	`respuesta_mensaje_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`mensaje_id` INTEGER  NOT NULL,
	`cuerpo` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`respuesta_mensaje_id`),
	INDEX `respuesta_mensaje_FI_1` (`mensaje_id`),
	CONSTRAINT `respuesta_mensaje_FK_1`
		FOREIGN KEY (`mensaje_id`)
		REFERENCES `mensaje` (`mensaje_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- tematica
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tematica`;


CREATE TABLE `tematica`
(
	`tematica_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(250)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`tematica_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- blog_x_tematica
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog_x_tematica`;


CREATE TABLE `blog_x_tematica`
(
	`blog_x_tematica_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`blog_id` INTEGER  NOT NULL,
	`tematica_id` INTEGER  NOT NULL,
	PRIMARY KEY (`blog_x_tematica_id`),
	INDEX `blog_x_tematica_FI_1` (`blog_id`),
	CONSTRAINT `blog_x_tematica_FK_1`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`blog_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `blog_x_tematica_FI_2` (`tematica_id`),
	CONSTRAINT `blog_x_tematica_FK_2`
		FOREIGN KEY (`tematica_id`)
		REFERENCES `tematica` (`tematica_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo_post
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_post`;


CREATE TABLE `tipo_post`
(
	`tipo_post_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(250)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`tipo_post_id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- post
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `post`;


CREATE TABLE `post`
(
	`post_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`tipo_post_id` INTEGER  NOT NULL,
	`user_id` INTEGER  NOT NULL,
	`blog_id` INTEGER  NOT NULL,
	`nombre` VARCHAR(45)  NOT NULL,
	`nota` VARCHAR(250)  NOT NULL,
	`tags` VARCHAR(250)  NOT NULL,
	`visitas` INTEGER default 0 NOT NULL,
	`published_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`post_id`),
	INDEX `post_FI_1` (`tipo_post_id`),
	CONSTRAINT `post_FK_1`
		FOREIGN KEY (`tipo_post_id`)
		REFERENCES `tipo_post` (`tipo_post_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `post_FI_2` (`user_id`),
	CONSTRAINT `post_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `post_FI_3` (`blog_id`),
	CONSTRAINT `post_FK_3`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`blog_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- comentario
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comentario`;


CREATE TABLE `comentario`
(
	`comentario_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`post_id` INTEGER  NOT NULL,
	`comentario` TEXT,
	`respuesta` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`comentario_id`),
	INDEX `comentario_FI_1` (`user_id`),
	CONSTRAINT `comentario_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `comentario_FI_2` (`post_id`),
	CONSTRAINT `comentario_FK_2`
		FOREIGN KEY (`post_id`)
		REFERENCES `post` (`post_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- respuesta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `respuesta`;


CREATE TABLE `respuesta`
(
	`respuesta_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`post_id` INTEGER  NOT NULL,
	`opcion` VARCHAR(250)  NOT NULL,
	`cantidad` VARCHAR(250)  NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`respuesta_id`),
	INDEX `respuesta_FI_1` (`post_id`),
	CONSTRAINT `respuesta_FK_1`
		FOREIGN KEY (`post_id`)
		REFERENCES `post` (`post_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- boletin
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `boletin`;


CREATE TABLE `boletin`
(
	`boletin_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`blog_id` INTEGER  NOT NULL,
	`nombre` VARCHAR(250)  NOT NULL,
	`send_at` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`boletin_id`),
	INDEX `boletin_FI_1` (`blog_id`),
	CONSTRAINT `boletin_FK_1`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`blog_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- notas_boletin
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `notas_boletin`;


CREATE TABLE `notas_boletin`
(
	`notas_boletin_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`boletin_id` INTEGER  NOT NULL,
	`post_id` INTEGER  NOT NULL,
	`es_principal` TINYINT default 0 NOT NULL,
	`orden` INTEGER default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`notas_boletin_id`),
	INDEX `notas_boletin_FI_1` (`boletin_id`),
	CONSTRAINT `notas_boletin_FK_1`
		FOREIGN KEY (`boletin_id`)
		REFERENCES `boletin` (`boletin_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `notas_boletin_FI_2` (`post_id`),
	CONSTRAINT `notas_boletin_FK_2`
		FOREIGN KEY (`post_id`)
		REFERENCES `post` (`post_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- red_social_x_perfil
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `red_social_x_perfil`;


CREATE TABLE `red_social_x_perfil`
(
	`red_social_x_perfil_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`red_social_id` INTEGER  NOT NULL,
	`url` VARCHAR(250)  NOT NULL,
	PRIMARY KEY (`red_social_x_perfil_id`),
	INDEX `red_social_x_perfil_FI_1` (`user_id`),
	CONSTRAINT `red_social_x_perfil_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `red_social_x_perfil_FI_2` (`red_social_id`),
	CONSTRAINT `red_social_x_perfil_FK_2`
		FOREIGN KEY (`red_social_id`)
		REFERENCES `red_social` (`red_social_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
