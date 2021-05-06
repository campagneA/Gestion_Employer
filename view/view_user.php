<?php
function formulaireConnexionUser()
{
?>
    <form action="Check_connection.php" method="POST">
        <h1>Connectez-vous</h1>
        <h2>Compte Mail</h2>
        <input type="text" name="userMail" placeholder="abc@example.com" autofocus>
        <h2>Mot de Passe</h2>
        <input type="password" name="passWord" placeholder="*******">
        <button type="submit">Connection</button>
        <div>
            <a href="#" type="button">
                <h3>Mot de Passe oublié? Par ICI !!!</h3>
            </a>
            <a href="New_Compte.php" type="button">
                <h3>Pas de Compte? Par ICI !!!</h3>
            </a>
        </div>
    </form>
<?php
}

function formulaireInscriptionUser()
{
?>
    <form action="Creation_Compte.php" method="POST">
        <h1>Créez un compte</h1>
        <h2>Compte Mail</h2>
        <input type="text" name="newUser" placeholder="abc@example.com" autofocus>
        <h2>Mot de Passe</h2>
        <input type="password" name="newPass" placeholder="*******">
        <h2>Confirmer Mot de Passe</h2>
        <input type="password" name="newPassConf" placeholder="*******">
        <button type="submit">Créer</button>
        <a href="Connexion.php">Vous avez déjà un compte?</a>
    </form>
<?php
}
?>