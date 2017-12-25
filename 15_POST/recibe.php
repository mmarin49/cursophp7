<?php
if (isset($_POST["submit"]))
{
    $nickname=filter_var($_POST["nickname"],FILTER_SANITIZE_STRING);
    echo $nickname;
    echo "<br>";

    $password=filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    echo $password;
    echo "<br>";
}