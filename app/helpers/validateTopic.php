<?php
function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Topic Name  is required');
    }

    $existingTopic = SelectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        array_push($errors, "Topic name is already exists");
    }

    return $errors;

}

?>