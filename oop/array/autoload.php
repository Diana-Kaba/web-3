<?php

function autoload1($className)
{
    $fileName = $className . '.php';
    include $fileName;
}

spl_autoload_register("autoload1");
