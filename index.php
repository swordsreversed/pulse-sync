<?php

require "bootstrap.php";
require "entities/Programme.php";

$progs = $entity_manager->getRepository('entities\Programme')->findBy([], ['name' => 'ASC']);

foreach ($progs as $prog) {
    echo "Name is: " . $prog->getName() . " image is: " . $prog->getImageId() . "\n";
}