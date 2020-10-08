<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bruce Lee </title>
    <link rel="stylesheet" href="success.css">
    <link href="//db.onlinewebfonts.com/c/d5e638ad62a611f703a8e0e951853da0?family=Herculanum" rel="stylesheet" type="text/css"/>
</head>
    <body>

        <?php
        $errors = [];
        $errorEmail = null;
        $dataforms = [];
        if($_POST){
            foreach ($_POST as $field => $message) {
                if(empty($_POST[$field])) {
                    $errors[$field] = "Le champs " . $field . " est vide.";
                } else {
                    $dataforms[$field] = $_POST[$field];
                }
            }
            var_dump($dataforms);
            
            if(!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
                $errorEmail = 'L\'email que vous avez fournis ne correspond pas au format demandé';
            }
            
            if (count($errors) == 0 && $errorEmail == null) { ?>
                <h1>
                    <?php echo 'Succès'; ?>
                </h1>
                <div>
                    <h2><?php echo 'Récapitulatif des donnée envoyé :'; ?></h2>
                    <?php echo 'Votre nom :' . "\t" . $_POST['lastname'];?>
                    <br />
                    <br />
                    <?php echo 'Votre prénom : ' . "\t" . $_POST['firstname'];?>
                    <br />
                    <br />
                    <?php echo 'Votre adresse : ' . "\t" . $_POST['address'];?>
                    <br />
                    <br />
                    <?php echo 'Votre mail : ' . "\t" . $_POST['email'];?>
                    <br />
                    <br />
                    <?php echo 'Votre age : ' . "\t" . $_POST['age'];?>
                    <br />
                    <br />
                    <?php echo 'Votre genre : ' . "\t" . $_POST['genre'];?>
                    <br />
                    <br />
                    <?php echo 'Comment vous nous avez connu : ' . "\t" . $_POST['audit'];?>
                    <br />
                    <br />
                    <?php echo 'L\'art martial que vous pratiquez : ' . "\t" . $_POST['martialArt'];?>
                    <br />
                    <br />
                    <?php echo 'Le message que vous voulez nous envoyer :' . "\t" . $_POST['message'];?>
                    <br />
                </div><?php
                } else {?>
                    <h1>
                        <?php echo 'ATTENTION !';?>
                    </h1>
                    <div>
                        <p><?php echo 'Veuillez remplir les champs suivants selon les critères spécifié :'; ?></p>
                    </div>
                    <br />
                    <?php foreach ($errors as $field => $message) { ?>
                        <br />
                        <ul>
                            <li>
                                <?php echo $message; ?>
                            </li>
                        </ul>
                        <br/>
                    <?php}
                }
            }
        }?>
    </body>
</html>