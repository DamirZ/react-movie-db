<?php
require_once dirname(dirname(__FILE__)) . '/helpers/loader.php';
require_once dirname(dirname(__FILE__)) . '/database/Database.php';

class ShowHandler
{
    /**
     * Table name.
     *
     * @var string
     */
    private $table = 'shows';
    

    public function __construct() {
        $config = loadConfig();
    }

    /**
     * Get all shows.
     *
     * @return void
     */
    public function get() {
        $shows = Database::$connection->query(
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

        return $shows->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Show creation.
     *
     * @param array $values
     * @return void
     */
    public function insert($values) {
        Database::$connection->query(
            "INSERT INTO $this->table (name, release_date, rating, description, image, director) 
            VALUES " . implode(',', $values)
        );

        $this->output('Show inserted.');
    }

    /**
     * Truncate shows.
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