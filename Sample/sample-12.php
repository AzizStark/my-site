<html>
<head>
<title>PHP Functions</title>
</head>
<body>

  <?php
  function writeName($fname){
    echo $fname . " Gomez.<br />";
  }

  echo "My name is ";
  writeName("Selena");
  echo "My sister's name is ";
  writeName("Diaz");
  echo "My brother's name is ";
  writeName("Cruz");
  ?>

  </body>
  </html>
