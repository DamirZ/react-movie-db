<?php
require_once 'Connection.php';
require_once 'Schema.php';
require_once dirname(dirname(__FILE__)) . '/database/seeds/MoviesSeeder.php';
require_once dirname(dirname(__FILE__)) . '/database/seeds/ShowsSeeder.php';

class Database extends Connection
{
    /**
     * Database name
     *
     * @var string
     */
    private $db;

    /**
     * Host name
     *
     * @var string
     */
    private $host;

    /**
     * Database port
     *
     * @var integer
     */
    private $port;

    /**
     * Database user name
     *
     * @var string
     */
    private $user;

    /**
     * Database password
     *
     * @var string
     */
    private $password;

    
    public function __construct() {
        $config = loadConfig();

        $this->db = $config['db_name'];
        $this->host = $config['db_host'];
        $this->port = $config['db_port'];
        $this->user = $config['db_user'];
        $this->password = $config['db_password'];
    }

    /**
     * Database usage.
     *
     * @return void
     */
    public function use() {
        try {
            $this->conn();

            self::$connection->exec("use $this->db");
            self::$connection->exec("SET NAMES UTF8");

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Database creation.
     *
     * @return void
     */
    public function create() {
        try {
            $this->conn();
    
            $sql = "CREATE DATABASE IF NOT EXISTS $this->db 
                    CHARACTER SET utf8 COLLATE utf8_unicode_ci";

            self::$connection->exec($sql);
            self::$connection->exec("use $this->db");
            $this->createTables();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function seeds() {
        $this->use();

        MoviesSeeder::down();
        ShowsSeeder::down();

        MoviesSeeder::up();
        ShowsSeeder::up();
    }

    /**
     * Get connection.
     *
     * @return void
     */
    protected function conn() {
        self::$connection = new PDO(
            "mysql:host=$this->host;port=$this->port", 
            $this->user, 
            $this->password
        );
        self::$connection->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );

    }

    /**
     * Tables creation
     *
     * @return void
     */
    private function createTables() {
        Schema::movies();
        Schema::shows();
    }
}