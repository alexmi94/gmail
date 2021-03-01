<?php
    include_once("./src/header.inc.php");
?>
<body>
    <header>
        <?php
        include_once("./src/nav.inc.php")
        ?>
    </header>
    <main>
        <h2>Retrouvez la fluidité et la simplicité de gmail sur tous vos appareil</h2>
        <a href="">créer un compte</a>
    </main>
    <footer>
        <h3>Une boîte de réception entièrement repensée</h3>
        <p>Avec les nouveaux onglets personnalisable, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.</p>

        <fieldset>
                <legend>Créer un compte</legend>
                <form action="" method="post">
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom">
                    <label for="prenom">Prénom *</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Votre prenom">
                    <label for="prenom">Mail *</label>
                    <input type="text" name="mail" id="mail" placeholder="Votre mail">
                    <label for="prenom">Choisir votre mot de passe *</label>
                    <input type="text" name="password" id="password" placeholder="Votre mot de passe">
                    
                    <input type="submit" value="valider votre compte">
                </form>

        </fieldset>

    </footer>
</body>
</html>