<?php

/* DarkIntaqt 2021 JSONSQL - (https://darkintaqt.com | https://github.com/darkintaqt)  */

function jsonsql($sql = false, $json = null, $databasename = "json") {
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
  if(substr(strtolower($sql),0,6) == "select") {
    $n = 1;
    switch(str_word_count(strtolower($sql),1,'*')[$n]) {


      /* SELECT * */

      case "*":
        $n++;
        if(str_word_count(strtolower($sql),1,'*')[$n] == "from") {
          return $json;
        } else {
          return "No database given. The default Database name is \"json\". (SELECT * FROM json)";
        }
        break;


      /* DISTINCT */

      case "distinct":
        $n++;
        $a = [];
        foreach ($json as $key => $value) {
          $q = false;
          foreach ($ as $k => $v) {
            if($json[$key][] == $a[$k][]) {
              $q = true;
            }
          }
          if($q != true) {
            $a[$key] = $json[$key];
          }
        }
        break;


      /* CUSTOM ROW NAME */

      default:
        return "Unknown command";
        break;
    }
  } else {
    return "Unknown Method - Currently available methods are: \"SELECT\"";
  }
}

?>
