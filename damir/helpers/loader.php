<?php

/**
 * Config variables
 *
 * @return void
 */
function loadConfig() {
    return parse_ini_file(dirname(dirname(__FILE__)) . '/conf.ini');
}