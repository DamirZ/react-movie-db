<?php

/**
 * Request example:
 * rest/getshows.php
 */

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require_once '../handlers/ShowHandler.php';

(new Database)->use();
$showHandler = new ShowHandler;

$response = $showHandler->get();

header('Content-type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_SLASHES);

?>