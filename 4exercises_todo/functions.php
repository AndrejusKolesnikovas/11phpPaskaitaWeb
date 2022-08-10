<?php

declare(strict_types=1);

function todosForEach() :void {
    $data = file_get_contents('./todos.json');
    $deserializedData = json_decode($data, true);
    foreach ($deserializedData as $id=> $value){
        echo '<div>'.$id.' : '. $value['new_TODO'].'</div>';
    }
}

