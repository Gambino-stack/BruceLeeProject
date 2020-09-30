<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width initial-scale=1.0"/>
        <title>Bruce Lee</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Contient le Logo -->
        <header>
            <!-- Contient le Logo -->
            <div>


            </div>
        </header>

        <div>

            <!-- Contient la Description-->
            <section>

            </section>

            <!-- Contient les skills -->
            <section>

            </section>

            <!-- Contient les hobbies -->
            <section>

            </section>

        </div>


        <!-- Contient les Experiences -->
        <section>

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
