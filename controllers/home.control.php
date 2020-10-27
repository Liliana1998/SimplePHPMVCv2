<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */

  function run(){
    $viewData = array(
      "prdName1" => "PANADOL",
      "prdName2" => "MIGRADORIXINA",
      "prdName3" => "KETEROLAKO TRAMANINA",

    );

    renderizar("home",$viewData);
  }
  run();
?>
