<?php
require_once dirname(dirname(__FILE__)) . '/helpers/loader.php';
require_once dirname(dirname(__FILE__)) . '/database/Database.php';

class MovieHandler
{
    /**
     * Table name.
     *
     * @var string
     */
    private $table = 'movies';
    

    public function __construct() {
        $config = loadConfig();
    }

    /**
     * Get all movies.
     *
     * @return void
     */
    public function get() {
        $movies = Database::$connection->query(
            "SELECT
                id,
                name,
                release_date,
                rating,
                description,
                image,
                director
            FROM 
                $this->table"
        );

        return $movies->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Movie creation.
     *
     * @param array $values
     * @return void
     */
    public function insert($values) {
        Database::$connection->query(
            "INSERT INTO $this->table (name, release_date, rating, description, image, director) 
            VALUES " . implode(',', $values)
        );

        $this->output('Movie inserted.');
    }

    /**
     * Truncate movies.
     *
     * @return void
     */
    public function truncate() {
        Database::$connection->query(
            "TRUNCATE TABLE $this->table"
        );
    }

    /**
     * Console message.
     *
     * @param string $msg
     * @param boolean $terminate
     * @return void
     */
    private function output($msg, $terminate = false) {
        echo $msg . PHP_EOL;
        if ($terminate) exit; 
    }
}