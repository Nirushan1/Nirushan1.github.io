<?php
if($_POST["message"]) {
    mail("1997nirushan@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>