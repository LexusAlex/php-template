<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateNotes extends AbstractMigration
{
    public function up()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `notes_1` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NOT NULL,
          `description` VARCHAR(255) NOT NULL,
          PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci;

        CREATE TABLE IF NOT EXISTS `notes_2` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NOT NULL,
          `description` VARCHAR(255) NOT NULL,
          PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci;

        CREATE TABLE IF NOT EXISTS `notes_3` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NOT NULL,
          `description` VARCHAR(255) NOT NULL,
          PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci;
        ';

        $this->execute($sql);
    }

    public function down()
    {
        $sql = 'DROP TABLE `notes_1`;DROP TABLE `notes_2`;DROP TABLE `notes_3`;';
        $this->execute($sql);
    }
}
