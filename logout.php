Vous êtes déconnecté.<br>

<a href='index.php'>Cliquez ici pour vous connecter</a><br>

<?php
session_start();
session_destroy();
session_unset();
?>

<script type="text/javascript">
    //REDIRECTION AUTOMATIQUE
    function Redirect() {
        window.location = "index.php";
    }
    document.write("Vous allez y être redirigé.");
    setTimeout('Redirect()', 5000);
</script>