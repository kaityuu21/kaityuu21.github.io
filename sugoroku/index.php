<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="animate.css">
  <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">
  <title>SUGOROKU GAME</title>
  <script src="WOW-master/dist/wow.min.js"></script>
  <script>
    new WOW().init();

  </script>
</head>

<body>

  <div class="box__area">
    <div class="box box__bg_photo ">
      <h2>ここにはルール説明をかきます</h2>
      <p><img class="wow flipInY" src="images/edamanekun.png"> </p>
      <?php $pageNumber = 1;
            $number = rand(1,3);
            $pageNumber += $number;
            $money = 0; ?>


      <form action="map<?php echo $pageNumber ?>.php" method="post">
        <input type="hidden" name="addmoney" value="<?php echo $money ?>">
        <input type="hidden" name="num" value="<?php echo $number ?>">
        <input class="button" type="submit" value="サイコロをふる（１～３）">
      </form>
      <div class="map">
      </div>
    </div>
  </div>









</body>

</html>
