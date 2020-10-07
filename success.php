<?php


    $errors = [];

    if ($_POST) {

        foreach($errors as $field) {
            if(empty($_POST[$field])) {
                $errors[$field] = "Le champs " . $field . "est vide.";
            }
        }

        if (count($errors) === 0) {
            echo 'Succès';
        } else {

            foreach ($errors as $field => $message) {
                echo $message;
            }
        }


    }