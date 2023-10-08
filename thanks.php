<!DOCTYPE html>

<?php

$prenom = $_POST['user_lastname'];
$nom = $_POST['user_firstname'];
$courriel = $_POST['user_email'];
$phone = $_POST['user_phone'];
$subject = $_POST['subject'];
?>

<div>
    <p>Merci <?= $prenom . ' ' . $nom ?> de nous avoir contacté à propos de <?= $subject ?>.
        <br>
        Un de nos conseillers vous contactera soit à l\’adresse <?= $courriel ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande :
        <br>
        <?= $message ?>
    </p>
</div>
