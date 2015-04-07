<?php 

require 'parks_login.php';
require 'db_connect.php'; 

$dbc->exec('DROP TABLE IF EXISTS parks');

$query = 'CREATE TABLE IF NOT EXISTS parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    location VARCHAR(25) NOT NULL,
    name VARCHAR(25) NOT NULL,
    date_established DATE,
    area_in_acres DOUBLE,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
