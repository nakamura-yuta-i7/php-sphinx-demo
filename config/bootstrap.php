<?php
require_once __DIR__ . "/passwords.php";

define("EMPOWERMENT_DB_NAME", "empowerment");
define("IS_TEST", defined("PHPUNIT_COMPOSER_INSTALL") || getenv("PHINX_ENV")=="testing" );
