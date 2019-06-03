<?php

class Schema extends Connection
{
    /**
     * Schema for 'movies' table
     *
     * @return void
     */
    public static function movies() {
        $sql = 
            "CREATE TABLE IF NOT EXISTS movies (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                release_date INT(11) NULL,
                rating INT(10) NULL,
                description VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                image VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                director VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
            );";

        self::$connection->exec($sql);
    }

    /**
     * Schema for 'shows' table
     *
     * @return void
     */
    public static function shows() {
        $sql = 
            "CREATE TABLE IF NOT EXISTS shows (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                release_date INT(11) NULL,
                rating INT(10) NULL,
                description VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                image VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
                director VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
            );";

        self::$connection->exec($sql);
    }
}