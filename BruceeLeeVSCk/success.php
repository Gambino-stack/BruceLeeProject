<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="success.css">
    <title>Contrôle Message</title>
</head>
<body>

<main>
    <?php
    $errors = [];
    $errorLengthFirst = null;
    $errorLengthLast = null;
    $errorEmail = null;
    $dataforms = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        foreach ($_POST as $field => $message) {
            $dataforms[$field] = trim($message);
        }

        foreach ($dataforms as $field => $content) {
            if (empty($content)) {
                $errors[$field] = 'Le champ ' . $field . ' est vide';
            }
        }

        if (!(filter_var($dataforms['email'], FILTER_VALIDATE_EMAIL))) {
            $errorEmail = "Le format du mail fourni n'est pas valide";
        }

        if(strlen($dataforms['lastname']) > 50 ) {
            $errorLengthLast = 'doit contenir entre 1 à 50 caractère(s)';
        }

        if(strlen($dataforms['firstname']) > 50 ) {
            $errorLengthFirst = 'doit contenir entre 1 à 50 caractère(s)';
        }


        if (count($errors) == 0 && $errorEmail != null) { ?>

            <div class="message">
                <div>
                    <h2><?php echo 'Bonjour, voici le récapitulatif des informations que vous nous avez envoyé :'; ?></h2>
                    <ul>
                        <li><?php echo 'Votre nom :' . "\t" . $dataforms['lastname']; ?></li>
                        <li><?php echo 'Votre prénom :' . "\t" . $dataforms['firstname']; ?></li>
                        <li><?php echo 'L\'adresse que vous fourni :' . "\t" . $dataforms['address']; ?></li>
                        <li><?php echo 'Votre adresse mail :' . "\t" . $dataforms['mail']; ?></li>
                        <li><?php echo 'Votre age :' . "\t" . $dataforms['age']; ?></li>
                        <li><?php echo 'Votre genre :' . "\t" . $dataforms['genre']; ?></li>
                        <li><?php echo 'L\'audit choisi :' . "\t" . $dataforms['audit']; ?></li>
                        <li><?php echo 'l\'art martial que vous pratiquez:' . "\t" . $dataforms['martialArt']; ?></li>
                        <li><?php echo 'Le message que vous nous avez adressez :' . "\t" . $dataforms['message']; ?></li>
                    </ul>
                    <p>
                        <?php echo 'Nous vous répondrons au plus vite à votre message'; ?>
                    </p>
                </div>

                <div>
                    <img src="brucelee success.jpg">
                </div>
            </div>

        <?php } else { ?>

            <h1><?php echo 'ATTENTION !'; ?></h1>
            <?php foreach ($errors as $field => $message) {

                echo $message;

            }

            if ($errorEmail != null ) {
                echo $errorEmail;
            }

            if ($errorLengthFirst != null) {
                echo $errorLengthFirst;
            }

            if ($errorLengthLast != null) {
                echo $errorLengthLast;
            }

        }



    } ?>

</main>
</body>
</html>