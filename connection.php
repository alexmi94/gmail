<?php
    include_once("./src/header.inc.php");
?>
<body>
    <header>
        <?php
        include_once("./src/nav.inc.php")
        ?>
    </header>

    <main class="main_connection">

    <h3>Bienvenue dans votre espace</h3>

    <div class="form" id="form" role="region">
            <fieldset>
                    <legend>Connectez-vous à votre compte</legend>
                    <form action="" method="post">
                        <label for="mail">Mail ou login*</label>
                        <input type="text" name="mail" id="mail" placeholder="Votre mail" aria-required="true">
                        <label for="password">Mot de passe *</label>
                        <input type="text" name="password" id="password" placeholder="Votre mot de passe" aria-required="true">
                        
                        <input type="submit" value="connexion à votre compte">
                    </form>
            </fieldset>
        </div>

    </main>


    <script src="./js/connection.js"></script>

</body>
</html>