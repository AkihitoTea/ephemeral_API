<?php
// Роутер пути users
//http://domain.com/users...
function route($method, $urlData, $formData)
{
    include_once "./config/DB.php";
        //http://domain.com/users/LOGIN/asd
    if ($method === 'POST' && $urlData[0] === "login") {

        $any = $urlData[1]; //ASD




        return;
    }
}