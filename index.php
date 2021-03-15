<?php
    include_once("./src/header.inc.php");
?>
<body>
    <header>
        <?php
        include_once("./src/nav.inc.php")
        ?>
    </header>

    <main class="main_index">
        <h2>Retrouvez la fluidité et la<br>simplicité de gmail sur<br>tous vos appareil</h2>
        <a href="#createaccount">créer un compte</a>
    </main>
    <footer id="createaccount">
        <h3>Une boîte de réception<br>entièrement repensée</h3>
        <p>Avec les nouveaux onglets personnalisable, repérez<br>immédiatement les nouveaux messages et choisissez<br>ceux que vous souhaitez lire en priorité.</p>
        <div class="form" id="form" role="region">
            <fieldset>
                    <legend>Créer un compte</legend>
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" placeholder="Votre nom" aria-required="true">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Votre prenom" aria-required="true">
                        <label for="mail">Mail *</label>
                        <input type="text" name="mail" id="mail" placeholder="Votre mail" aria-required="true">
                        <label for="password">Choisir votre mot de passe *</label>
                        <input type="text" name="password" id="password" placeholder="Votre mot de passe" aria-required="true">
                        
                        <input type="submit" value="valider votre compte">
                    </form>
            </fieldset>
        </div>
    </footer>
    
    <div class="arrow" role="region">
    <a href="#createaccount" ><img src="./image/arrow.png" alt="fleche"></a>
    </div>
    
    <script src="./js/app.js"></script>

</body>
</html>