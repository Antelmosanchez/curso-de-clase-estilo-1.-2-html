<html>

<body>

<div style="background: red; width: 300px; color:black">

  <?php


  $numero1=50;
  $numero2=20;

  if ($numero1 > $numero2){
    echo $numero1 ." es mayor a ".$numero2;
  
  }

  ?>
</div>
<hr>
<div style="background: red; width: 300px; color:black">
  <?php
  $numero1=50;
  $numero2=20;
  $numero3=10;

  if ($numero1 < $numero2){
    if ($numero1 < $numero3){
      echo $numero1."es menor";
    }
    else {
      echo $numero3."es menor";
    }
  }
  else {
    if ($numero2 < $numero3){
      echo $numero2."es menor";
    }
    else {
      echo $numero3." es menor";
    }

  }
  
 
  
  ?>
</div>
</body>

</html>