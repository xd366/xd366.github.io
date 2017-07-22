<?php
if($_POST["message"]) {
    mail("xd366@hotmail.com", "Form to email message", $_POST["message"], "From: xd366@hotmail");
}
?>