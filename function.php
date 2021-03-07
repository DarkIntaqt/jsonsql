<?php

/* DarkIntaqt 2021 JSONSQL - (https://darkintaqt.com | https://github.com/darkintaqt)  */

function jsonsql($sql = false, $json = null) {
  if($sql == false || $json == null) {
    return "jsonsql(\"SQL\",\"JSON or PHP Array\"); - No SQL or JSON given. ";
  }
  if(is_string($json)) {
    $json = json_decode($json,true);
    if(!is_array($json)) {
      return "Invalid json";
    }
  } elseif (!is_array($json)) {
    return "\$json is not a json string or an array. ";
  }
}

?>
