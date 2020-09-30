<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1.0" />
    <title>Bruce Lee</title>
    <link rel="stylesheet" href="style.css">
</head>

    <body>
        <!-- Contain the Logo -->
        <header>


            <!-- principal picture of the website-->
            <img src="img/bruce-lee.jpg" alt="logo_Bruce_Lee" >


            <!-- Contain the Name and Surname -->
            <div class="maintitle">
                <!-- Left Dragon picture -->
                <img id="leftDragon" src="https://via.placeholder.com/150/000000/FFFFFF/


C/O https://placeholder.com/ " alt="logo_Left_Dragon" >

                <h1>BRUCE LEE - LE << PETIT DRAGON >> LEE JUN FAN - 李振藩</h1>

                <!-- Left Dragon picture -->
                <img id="rightDragon" src="https://via.placeholder.com/150/000000/FFFFFF/

C/O https://placeholder.com/ " alt="logo_Right_Dragon" >
            </div>
        </header>

        <div class="sidebar">

            <!-- Contient la Description-->
            <section>
                <h2>DESCRIPTION</h2>
                <article>
                    "Je sais ce que vous vous dites! Ah c'est Bruce lee ! , mais ce n'est que mon nom de scene, en réalité je m'appelle Lee Jun-fan, moins clinquant non ?
                    Je suis un artiste martial, acteur, git réalisateur, producteur et scénariste sino-américain qui trouve encore le temps de faire autre chose de ma vie. En effet,
                    j'ai crée mon propre art martial. Vous voulez fracasser des gueules à la Bruce Lee ? Lancez vous dans l'aventure "jeet kune do" en remplissant le formulaire
                    en bas de la page."
                </article>
            </section>
            <!-- Contient la quick informations-->
            <section id="firstInformations">
                <p><b>Basics informations</b></p>
                    <ul>
                        <li>Age : 32 years, older but faster than you</li>
                        <li>🏡 : 'Wherever the wind brings me' </li>
                        <li>📞 : 911 in  case you need help for fighting</li>
                        <li>📧 : Check the form down below</li>
                    </ul>
            </section>

            <!-- Contient les skills -->
            <section id="skillset">
                <p><b>Skillset</b></p>
                <ul>
                    <li>Martial Arts (inventor & precursor of Jeet Kune Do)</li>
                    <li>Trainer / Teacher</li>
                    <li>Acting</li>
                    <li>Producing / Directing movies</li>
                    <li>Fight choregrapher</li>
                    <li>Philosopher / Quoter</li>
                </ul>
            </section>

            <!-- Contient les hobbies -->
            <section id="hobbies">
                <p><b>Hobbies</b></p>
                    <ul>
                        <li>Practicing & perfectionning my martial art</li>
                        <li>Training hard 24/7 to reach the top</li>
                        <li>Playing ping-pong with nunchaku <a href="https://www.youtube.com/watch?v=qHe6vhexm6g">(Check this out mate)<a/></li>
                        <li>Doing push-ups with 2 fingers <a href="https://www.youtube.com/watch?v=JlQfBg3VJJU">(Check this out buddy)<a/></li>
                    </ul>
            </section>

        </div>


        <!-- Contient les Experiences -->
        <section>
            <h2>EXPERIENCES</h2>
            <article>
                <img src="https://cdn.dribbble.com/users/1242068/screenshots/4271999/brucelee.png" alt="BruceLee image">
                <br>
                Ma carriere est composée de plusieurs expériences dans divers domaines:
                <ul>
                    <li>Les arts martiaux :en 1960 création du Jeet kune do et enseignement de ce sport dans mon ecole</li>
                    <li>Acting : entre 1941 et 1973 j'ai joué dans 30 films en Chine et aux Etats-Unis</li>
                    <li>Scenariste : Entre 1971 et 1978 j'ai écris 5 films differents</li>
                    <li>Realisateur : La réalisation de deux films : "La fureur du dragon" et "Le jeu de la mort"</li>
                </ul>
            </article>

        </section>

        <!-- Contient les Formations -->
        <section>

        </section>


        <!-- Contient Contact Form -->
        <section>
            <form method="post" action="">
                <h2>Form</h2>

                <label for="firstname">firstname : </label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname" required/>

                <label for="lastname">lastname : </label>
                <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname" required/>

                <label for="age">age : </label>
                <input type="number" name="age" id="age" required/>

                <label for="genre">genre : </label>
                <select name="genre" id="genre">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="kids">Kids</option>
                    <option value="hermaphrodite">Hermaphrodite</option>
                </select>

                <label for="audit"></label>
                <select name="audit" id="audit">
                    <option value="">How did you know the school? required</option>
                    <option value="internet">Internet</option>
                    <option value="friends">Friends</option>
                    <option value="school">Other School</option>
                </select>

                <label for="martialArt"></label>
                <select name="martialArt" id="martialArt">
                    <option value="">have you ever pratice a martial art?</option>
                    <option value="karate">Karaté</option>
                    <option value="jujitsu">Jujitsu</option>
                    <option value="muayThai">Muay Thaï</option>
                    <option value="savate">Savate Autrichienne</option>
                    <option value="chainSaw">Chainsaw</option>
                    <option value="tartiflette">Tartiflette</option>
                </select>

                <label for="message">your message : </label>
                <textarea name="message" id="message" placeholder="Enter your message" required></textarea>

                <button id="buttonForm">Send !</button>

            </form>

        </section>

        <!-- Contient Le footer -->
        <footer>

        </footer>

    </body>

</html>
