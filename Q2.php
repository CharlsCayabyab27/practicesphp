<?php

function isPasswordValid($password) {
    $minLength = 8; // minimum password length
  
    if (strlen($password) >= $minLength) {
      return true;
    } else {
      return false;
    }
  }


$password = "Admin";
if (isPasswordValid($password)) {
    echo "Password is valid.";

} else {
    echo "Pass.";
}
?>