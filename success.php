<?php

    var_dump($_POST);
    $errors = [];

    if ($_POST) {

        foreach ($_POST as $field => $message) {
            echo $field;
            if(empty($_POST[$field])) {
                $errors[$field] = "Le champs " . $field . "est vide.";
            }

        }

        if (count($errors) == 0) {
            echo 'Succès';
        } else {

            foreach ($errors as $field) {?>
                <?php echo $field;?>
                <br />
            <?php}
        }


    }