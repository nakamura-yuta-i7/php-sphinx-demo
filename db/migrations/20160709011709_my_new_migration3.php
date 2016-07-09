<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration3 extends AbstractMigration
{
    function up()
    {
        // require_once __DIR__ . "/../seeds/UserSeeder.php";
        // $seeder = new UserSeeder();
        // $seeder->run();

        $this->execute("CREATE TABLE `users` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    }

    function down() {
        $this->execute("DROP TABLE users");
    }
}
