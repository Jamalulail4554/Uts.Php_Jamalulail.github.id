<?php
session_start();
if(session_destroy()) {
    header("Location: login.php");
}
?>


<?php
session_start();
if(session_destroy()) {
    header("Location: loop.php");
}
?>