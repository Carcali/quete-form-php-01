<!DOCTYPE html>

<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_lastname">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="phone" id="phone" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujets :</label>
        <input list="subject">
        <datalist id="subject">
            <option value="Message">
            <option value="Devis">
            <option value="Proposition">
        </datalist>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>

</form>

<?php
var_dump($_POST);
?>

<?php
echo  $_GET['user_firstname'];
?>




</html>