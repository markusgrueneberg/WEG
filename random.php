<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
  include "satz.php";

  $r= rand(0,254);
  $g= rand(0,254);;
  $b= rand(0,254);;
  
  $students = array(
    "Ella",
    "Moritz",
    "Vincent",
    "Stine",
    "Malte"
  ) ;
  
  $students[] = "Marta";


  var_dump($students);
  
  
  unset($students[2]);
  $students[10] = "Rio";
  
  
  var_dump($students);
  
  $phonebook = array(
    "Moritz" => "+49123455887",
    "Ella" => "+4917912334587" ,
    "Mori" => "+4937464627"
  );
  
  echo "<pre>";
  var_dump($phonebook);
  echo "</pre>";
  
  echo "<pre>";
  print_r($phonebook);
  echo "</pre>";
?>

<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Random Backgound</title>
  <style type="text/css">
   body {
    background-color: rgb(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>);
   }
   </style>
  </head>
  <body>
  test
     <p><?php echo $satz ?></p>
     <div>hallo ... und der Rest:</div>
     <ul>
      <?php foreach($students AS $kind) { ?>
        <li><?php echo $kind; ?></li>
      <?php }  ?>
     </ul>
     
     
          <ul>
      <?php foreach($phonebook AS $p => $number) { ?>
        <li><?php echo $p . ":" . $number; ?></li>
      <?php }  ?>
     </ul>
  </body>
</html>