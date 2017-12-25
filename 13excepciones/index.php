<?php
function dividir(... $ints)
{
    if(!$ints[0]||!$ints[1])
    {
        throw new Exception("División por cero capturadada");
    }
    return $ints[0]/$ints[1];
}
try{
    echo dividir(2,1);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
echo "<br>";
try{
    echo dividir(2);
}
catch (Exception $e)
{
    echo $e->getMessage();
}
finally {
    echo "<br> Primer finally";
}

function comprovar_email(string $email)
{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        throw new Exception("El mail introducido no es correcto, excepción capturada");
    }
    return "email correcto";
}
echo "<br>";
try{
    echo comprovar_email("manelmagmail.com");
}
catch (Exception $e)
{
    echo $e->getMessage();
}
finally {
    echo "<br> Segundo finally";
}
