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

      <p class="trout"> <?php if ($_POST['num'] == 1){
  echo '1の目が出た！';
} elseif ($_POST['num'] == 2){
 echo '2の目が出た！';
} elseif ($_POST['num'] == 3){
  echo '3の目が出た！';
}?></p>

      <div class="images">
        <p><img class="wow zoomIn" src="images/12.png"> </p>
        <p><img class="wow shake" data-wow-duration="3s" data-wow-iteration="100" src="images/edamanekun.png">
          <img class="wow rubberBand" data-wow-duration="3s" data-wow-iteration="100" src="images/edamanekun.png"> </p>
      </div>


      <?php $pageNumber = 7;
            $number = rand(1,3);
            $money = $_POST['addmoney'];
            $money += 600; ?>
      <p class="total-p">
        <img src="images/okane.png">
        <br>
        <?php echo $money. 'ドリー'; ?>
      </p>

      <?php $pageNumber += $number ?>
      <form action="map<?php echo $pageNumber ?>.php" method="post">
        <input type="hidden" name="addmoney" value="<?php echo $money ?>">
        <input type="hidden" name="num" value="<?php echo $number ?>">
        <input class="button" type="submit" value="サイコロをふる（１～３）">
      </form>

    </div>
  </div>










</body>

</html>
