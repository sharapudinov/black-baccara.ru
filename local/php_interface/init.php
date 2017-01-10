<?php
/**
 * Created by PhpStorm.
 * User: shara
 * Date: 10.01.2017
 * Time: 23:47
 */

function test_dump($arg){
    global $USER;
    if ($USER->IsAdmin()){
        echo '<pre>';
        var_dump($arg);
        echo '</pre>';
    }
}