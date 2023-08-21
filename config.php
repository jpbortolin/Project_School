<?php

$pdo = new PDO('mysql:host=localhost;dbname=escolata2022', 'root', '', array(PDO::ATTR_PERSISTENT => TRUE));

$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);