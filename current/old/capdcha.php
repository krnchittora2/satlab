<?php

session_start();

function generate_capdcha() {
    $n1 = rand(0, 99); $_SESSION["n1"] = $n1;
    $n2 = rand(0, 99); $_SESSION["n2"] = $n2;
    
    return $n1." + " . $n2 . " = \n<input type=\"hidden\" name=\"hash\" value=\"".md5($n1 + $n2)."\" />";
}

?>