<section class="section-form">
    <h2 id="form-title">FORMULAIRE DE CONTACT</h2>

    <form class="form" method="post" action="success.php">
        <div class="form-lastname">
            <label for="lastname">Nom : </label>
            <input type="text" name="lastname" id="lastname" placeholder="" />
        </div>
        <div class="form-firstname">
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" id="firstname" placeholder="" />
        </div>
        <div class="form-address">
            <label for="address">Adresse :</label>
            <input type="text" name="address" id="address" placeholder="" />
        </div>
        <div class="form-email">
            <label for="email">Mail :</label>
            <input type="email" name="email" id="email" placeholder="" />
        </div>

        <div class="form-age-genre">
            <div class="form-age">
                <label for="age">Age : </label>
                <input type="number" name="age" id="age" />
            </div>
            <div class="form-genre">
                <label for="genre">Sexe : </label>
                <select name="genre" id="genre">
                    <option value=""></option>
                    <option value="Homme">Male</option>
                    <option value="femme">Female</option>
                    <option value="Enfant">Kids</option>
                    <option value="hermaphrodite">Hermaphrodite</option>
                </select>
            </div>
        </div>

        <div class="form-select-audit">
            <label for="audit">Comment avez vous connu Bruce Lee ?</label>
            <select name="audit" id="audit">
                <option value=""></option>
                <option value="internet">Internet</option>
                <option value="friends">Amis</option>
                <option value="school">Autre école</option>
            </select>
        </div>
        <div class="form-select-martialArt">
            <label for="martialArt">Pratiquez vous un sport de combat ?</label>
            <select name="martialArt" id="martialArt">
                <option value=""></option>
                <option value="karate">Karaté</option>
                <option value="jujitsu">Jujitsu</option>
                <option value="muayThai">Muay Thaï</option>
                <option value="savate">Savate Autrichienne</option>
                <option value="chainSaw">La mandalette</option>
                <option value="tartiflette">Tartiflette</option>
            </select>
        </div>

        <div class="form-message">
            <label for="message">Message : </label>
            <textarea name="message" id="message" placeholder="" ></textarea>
        </div>

        <div class="form-button">
            <button id="button-form">Envoyer !</button>
        </div>
    </form>

</section>