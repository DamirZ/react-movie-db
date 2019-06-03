<?php

/**
 * Request example:
 * rest/getmovies.php
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../handlers/MovieHandler.php';

(new Database)->use();
$movieHandler = new MovieHandler;

$response = $movieHandler->get();

header('Content-type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_SLASHES);

?>