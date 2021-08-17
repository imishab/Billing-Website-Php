<?php


function validatePost($post)
{
    $errors = array();

    // if (empty($post['title'])) {
    //     array_push($errors, 'Title is required');
    // }

    

    if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

   

    return $errors;
}