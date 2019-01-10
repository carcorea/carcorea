<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>web</h1>
     <ol>
        <li><a href="index.php?id=html.txt"> HTML</a></li>
        <li><a href="index.php?id=css.txt"> CSS</a></li>
        <li><a href="index.php?id=javascript.txt"> JAVASCRIPT</a></li>
     </ol>
     <h2>
       <?
      echo $_GET['id']

       ?>
       <?php

         echo file_get_contents("data/".$$_GET['id']);

        ?>

    </h2>
<?
echo "hi 33o";


?>
ddddddd
  </body>
</html>
