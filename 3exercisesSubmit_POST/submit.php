<?php

declare(strict_types=1);

$data = file_get_contents('./person.json');

$deserializedData = json_decode($data, true);
$deserializedData[] = $_POST;
$serializedData = json_encode($deserializedData, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);

file_put_contents('./person.json', $serializedData);


echo 'Hello, ' . $_POST['first_name'] . ' ' . $_POST['last_name'] . ' ' . 'how are you today?';


