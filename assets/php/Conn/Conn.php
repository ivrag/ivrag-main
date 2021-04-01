<?php

require_once dirname(__FILE__) . "/../../../config.php";
require_once ROOT."vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->load();

$_MainDB = [
  "server" => $_ENV["ADMIN_SERVER"],
  "database" => $_ENV["ADMIN_DB"],
  "table" => $_ENV["ADMIN_WEBSITE_TABLE"],
  "username" => $_ENV["ADMIN_DB_UN"],
  "password" => $_ENV["ADMIN_DB_PWD"]
];