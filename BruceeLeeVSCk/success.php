<html lang="fr">
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


        if (count($errors) == 0) { ?>

            <div class="message">
                <div>
                    <h2><?php echo 'Bonjour, voici le récapitulatif des informations que vous nous avez envoyé :'; ?></h2>
                    <div class="information">
                        <ul>
                            <li><?php echo 'Votre nom :' . "\t" . htmlentities($dataforms['lastname']); ?></li>
                            <li><?php echo 'Votre prénom :' . "\t" . htmlentities($dataforms['firstname']); ?></li>
                            <li><?php echo 'L\'adresse que vous fourni :' . "\t" . htmlentities($dataforms['address']); ?></li>
                            <li><?php echo 'Votre adresse mail :' . "\t" . htmlentities($dataforms['mail']); ?></li>
                            <li><?php echo 'Votre age :' . "\t" . htmlentities($dataforms['age']) . ' ans'; ?></li>
                            <li><?php echo 'Votre genre :' . "\t" . htmlentities($dataforms['genre']); ?></li>
                            <li><?php echo 'L\'audit choisi :' . "\t" . htmlentities($dataforms['audit']); ?></li>
                            <li><?php echo 'l\'art martial que vous pratiquez:' . "\t" . htmlentities($dataforms['martialArt']); ?></li>
                            <li><?php echo 'Le message que vous nous avez adressez :' . "\t" . htmlentities($dataforms['message']); ?></li>
                        </ul>
                        <p id="answer">
                            <?php echo 'Nous vous répondrons au plus vite à votre message'; ?>
                        </p>
                    </div>

                </div>

                <div class="img_Success">
                    <img src="img/brucelee-success.png" alt="success sending image" title="I'll call you later">
                </div>
            </div>

        <?php } else { ?>
            <div class="failed">
                <h2><?php echo 'ATTENTION !'; ?></h2>
                <?php foreach ($errors as $field => $message) { ?>

                <ul class="error">
                    <li ><?php echo htmlentities($message); ?></li>
                        <?php }

                    if ($errorEmail != null ) { ?>
                        <li class="normal_error"><?php echo htmlentities($errorEmail); ?></li>
                    <?php }

                        if ($errorLengthFirst != null) { ?>
                            <li class="normal_error"><?php echo htmlentities($errorLengthLast); ?></li>
                       <?php } ?>

                </ul>


            </div>
            <?php }





    } ?>

</main>
</body>
</html>