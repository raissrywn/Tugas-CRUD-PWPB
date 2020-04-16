<?php
try
{
    $kon= new PDO("mysql:host=localhost;dbname=projek1","root","");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>