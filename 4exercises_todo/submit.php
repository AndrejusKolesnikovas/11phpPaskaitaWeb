<?php

declare(strict_types=1);
if (!file_exists('./todos.json')) {
    file_put_contents('./todos.json', json_encode([$_POST], JSON_PRETTY_PRINT | JSON_FORCE_OBJECT));
} else {
    $data = file_get_contents('./todos.json');

    $deserializedData = json_decode($data, true);

    $deserializedData[] = $_POST;

    $serializedData = json_encode($deserializedData, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);

    file_put_contents('./todos.json', $serializedData);
}

echo 'Form submitted';
