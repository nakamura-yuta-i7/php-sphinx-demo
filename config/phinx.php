<?php
require_once __DIR__ . "/bootstrap.php";

$dbname = EMPOWERMENT_DB_NAME . ( IS_TEST ? "_test" : "" );
$pdo = new PDO("mysql:host=localhost;dbname={$dbname};charset=utf8",'root',EMP_DB_PASSWORD);

# Phinx用設定ファイル
# See: http://docs.phinx.org/en/latest/configuration.html
# Note:
# - %%PHINX_CONFIG_DIR%% = phinx.php があるフォルダパス
return [
  "paths" => [
    # See: http://docs.phinx.org/en/latest/migrations.html
    "migrations" => "%%PHINX_CONFIG_DIR%%/../db/migrations",
    # See: http://docs.phinx.org/en/latest/seeding.html
    "seeds" => "%%PHINX_CONFIG_DIR%%/../db/seeds",
  ],
  "environments" => [
    # マイグレーション状態の管理用テーブル名
    "default_migration_table" => "_phinxlog",
    
    # -e オプションを省略した時に使われる環境設定名のキーを指定
    # $ vendor/bin/phinx migrate -c ./config/phinx.php -e {環境設定名のキー} 
    "default_database" => "development",
    
    # 本番用
    "production" => [
      "name" => $dbname,
      "connection" => $pdo,
    ],
    # Staging用
    "staging" => [
      "name" => $dbname,
      "connection" => $pdo,
    ],
    # Dev用
    "development" => [
      "name" => $dbname,
      "connection" => $pdo,
    ],
    # Test実行時のみ
    "testing" => [
      "name" => $dbname,
      "connection" => $pdo,
    ],
  ],
];