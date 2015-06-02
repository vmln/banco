<?PHP
session_start();
// destruimos la session de usuarios.
session_destroy();
sleep(1);
Header("Location:../index.php");
?>
