<body>
    <fieldset>
        <form id="form" method="<?= $method ?>" action="<?= $handleSubmit ?>">
            <legend>
                <img src="https://plesk.students-laplateforme.io/cp/theme/images/logos/plesk/logo.svg?1665649994"
                    alt="logo de plesk">
                <span>web host edition</span>
            </legend>
            <section>
                <div>
                    <label for="firstname">Votre prénom</label>
                    <input type="text" name="firstname" id="firstname" value="Elyas">
                </div>
                <div>
                    <label for="lastname">Votre nom</label>
                    <input type="text" name="lastname" id="lastname" value="Benyoub">
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="ebenyoub@me.com">
                </div>
                <div>
                    <label for="genre">Quel est votre genre ?</label>
                    <div class="select-wrapper">
                        <select name="genre" id="genre">
                            <option value="male">--Choisissez une option--</option>
                            <option value="male" checked="true">Homme</option>
                            <option value="female">Femme</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>
                <button type="submit">Envoyer</button>
            </section>
        </form>   
    </fieldset>
    <script src="https://kit.fontawesome.com/cf618d8113.js" crossorigin="anonymous"></script>
</body>