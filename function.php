<?php

/* DarkIntaqt 2021 JSONSQL - (https://darkintaqt.com | https://github.com/DarkIntaqt/jsonsql)  */

function jsonsql($sql = false, $json = null, $databasename = "json") {


  /* List of all special characters */

  $c = "*aàȁáâǎãāăȃȧäåẚảạḁąᶏậặầằắấǻẫẵǡǟẩẳⱥæǽǣᴂꬱꜳꜵꜷꜹꜻꜽɐɑꭤᶐꬰɒͣᵃªᵄᵆᵅᶛᴬᴭᴀᴁₐbḃƅƀᵬɓƃḅḇᶀꞗȸßẞꞵꞛꞝᵇᵝᴮᴯʙᴃᵦcćĉčċƈçḉɕꞔꞓȼ¢ʗᴐᴒɔꜿᶗꝢꝣ©ͨᶜᶝᵓᴄdďḋᵭðđɗᶑḓḍḏḑᶁɖȡꝱǳʣǆʤʥȸǲǅꝺẟƍƌͩᵈᶞᵟᴰᴅᴆeèȅéēêěȇĕẽėëẻḙḛẹȩęᶒⱸệḝềḕếḗễểɇəǝɘɚᶕꬲꬳꬴᴔꭁꭂ•ꜫɛᶓȝꜣꝫɜᴈᶔɝɞƩͤᵉᵊᵋᵌᶟᴱᴲᴇⱻₑₔfẜẝƒꬵḟẛᶂᵮꞙꝭꝼʩꟻﬀﬁﬂﬃﬄᶠꜰgǵḡĝǧğġģǥꬶᵷɡᶃɠꞡᵍᶢᴳɢʛhħĥȟḣḧɦɧḫḥẖḩⱨꜧꞕƕɥʮʯͪʰʱꭜᶣᵸꟸᴴʜₕiìȉíīĩîǐȋĭïỉɨḭịįᶖḯıɩɪꭠꭡᴉᵻᵼĳỻİꟾꟷͥⁱᶤᶦᵎᶧᶥᴵᵢjȷĵǰɉɟʝĳʲᶡᶨᴶᴊⱼkḱǩꝁꝃꝅƙḳḵⱪķᶄꞣʞĸᵏᴷᴋₖlĺľŀłꝉƚⱡɫꬷꬸɬꬹḽḷḻļɭȴᶅꝲḹꞎꝇꞁỻǈǉʪʫɮˡᶩᶪꭝꭞᶫᴸʟᴌₗmḿṁᵯṃɱᶆꝳꬺꭑᴟɯɰꟺꟿꟽͫᵐᶬᶭᴹᴍₘnǹńñňŉṅᵰṇṉṋņŋɳɲƞꬻꬼȵᶇꝴꞃꞑꞥᴝᴞǋǌⁿᵑᶯᶮᶰᴺᴻɴᴎₙoᴏᴑòȍóǿőōõôȏǒŏȯöỏơꝍọǫⱺꝋɵøᴓǭộợồṑờốṍṓớỗỡṏȭȱȫổởœɶƣɸƍꝏʘꬽꬾꬿꭀꭁꭂꭃꭄꭢꭣ∅ͦᵒᶱºꟹᶲᴼᴽₒpṕṗꝕꝓᵽᵱᶈꝑþꝥꝧƥƪƿȹꟼᵖᴾᴘᴩᵨₚqʠɋꝙꝗȹꞯʘθᶿrŕȑřȓṙɍᵲꝵꞧṛŗṟᶉꞅɼɽṝɾᵳᴦɿſⱹɹɺɻ®ꝶꭇꭈꭉꭊꭋꭌͬʳʶʴʵᴿʀʁᴙᴚꭆᵣsśŝšṡᵴꞩṣşșȿʂᶊṩṥṧƨʃʄʆᶋᶘꭍʅƪﬅﬆˢᶳᶴꜱₛtťṫẗƭⱦᵵŧꝷṱṯṭţƫʈțȶʇꞇꜩʦʧʨᵺͭᵗᶵᵀᴛₜuùȕúűūũûǔȗŭüůủưꭒʉꞹṷṵụṳųᶙɥựǜừṹǘứǚữṻǖửʊᵫᵿꭎꭏꭐꭑͧᵘᶶᶷᵙᶸꭟᵁᴜᵾᵤvṽⱱⱴꝟṿᶌʋʌͮᵛⱽᶹᶺᴠᵥwẁẃŵẇẅẘⱳẉꝡɯɰꟽꟿʍʬꞶꞷʷᵚᶭᵂᴡxẋẍᶍ×ꭓꭔꭕꭖꭗꭘꭙˣ˟ᵡₓᵪyỳýȳỹŷẏÿẙỷƴɏꭚỵỿɣɤꝩʎƛ¥ʸˠᵞʏᵧzźẑžżƶᵶẓẕʐᶎʑȥⱬɀʒǯʓƺᶚƹꝣᵹᶻᶼᶽᶾᴢᴣ!=_-?123456789%&/()#+";


  /* Check for arguments */

  if($sql == false || $json == null) {
    return "jsonsql(\"SQL\",\"JSON or PHP Array\"); - No SQL or JSON given. ";
  }


  /* Convert to PHP Array */

  if(is_string($json)) {
    $json = json_decode($json,true);
    if(!is_array($json)) {
      return "Invalid json";
    }
  } elseif (!is_array($json)) {


    /* Return if Array is not valid */

    return "\$json is not a json string or an array. ";
  }


  /* Check for SELECT statement */

  if(substr(strtolower($sql),0,6) == "select") {
    $n = 1;
    switch(str_word_count(strtolower($sql),1,$c)[$n]) {


      /* CASE SELECT ALL */

      case "*":
        $a = $json;
        break;



      /* CASE SELECT DISTINCT */

      case "distinct":
        $n++;
        if(str_word_count($sql,1,$c)[$n] != null) {
          $b = str_word_count($sql,1,$c)[$n];
        } else {
          return "Row \"".str_word_count($sql,1,$c)[$n]."\" is empty or does not exist. ";
        }
        $a = [];
        foreach ($json as $key => $value) {
          $q = false;
          foreach ($a as $k => $v) {
            if($value[$b] == $v[$b]) {
              $q = true;
            }
          }
          if($q != true) {
            $a[$key] = $json[$key];
          }
        }
        break;



      /* DEFAULT CASE / SPECIAL ROW */

      default:
        if($json[0][str_word_count($sql,1,$c)[$n]] != null) {
          $a = [];
          foreach ($json as $key => $value) {
            $a[$key] = $value[str_word_count($sql,1,$c)[$n]];
          }
        } else {
          return "Unknown row \"".str_word_count($sql,1,$c)[$n]."\"";
        }
        break;
    }
    $n++;
    if(str_word_count(strtolower($sql),1,$c)[$n] != "from" || str_word_count(strtolower($sql),1,$c)[($n + 1)] != $databasename) {
      return "Unknown database: \"".str_word_count(strtolower($sql),1,$c)[($n + 1)]."\". Standard database name is \"json\". You can change the database name with the third argument: \"jsonsql(statement, json, DATABASENAME)\"";
    }

    $n++;$n++;


    /* Backup Variables */

    $x = $a;

    $e = true;

    $w = [];

    while ($e == true) {

      $e = false;

      switch(str_word_count(strtolower($sql),1,$c)[$n]) {


        /* WHERE CASE */

        case "where":
          $n++;
          if(empty($json[0][str_word_count($sql,1,$c)[$n]])) {
            return "Error: One or more where rows does not exists";
          }
          $n++;
          switch(str_word_count(strtolower($sql),1,$c)[$n]) {
            case "=":
              $n++;
              if(empty(str_word_count($sql,1,$c)[$n])) {
                return "Missing equal (=) argument near this: '".str_word_count($sql,1,$c)[($n - 2)]. " ". str_word_count($sql,1,$c)[($n - 1)]." ??MISSING??'";
              }
          }
      }
    }

    return json_encode($a) . $e;
  } else {
    return "Unknown Method - Currently available methods are: \"SELECT\"";
  }
}

?>