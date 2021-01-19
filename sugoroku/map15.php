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

      <h2>ゴールしました！</h2>

      <div class="images">

        <p><img src="images/edamanekun.png"> <img src="images/birdkun.png"><img src="images/dog.png"><img src="images/ghost.png"><img src="images/egg.png">
        </p>
      </div>


      <?php $pageNumber = 15;
            $number = rand(1,3);
            $money = $_POST['addmoney'];
                          ?>
      <h2 class=" margint wow zoomIn" data-wow-duration="3s">

        <br>
        <?php echo '合計金額は'.$money. 'ドリーです！！！'; ?>
      </h2>
      <h2>金額に応じてランクを表示する予定</h2>


    </div>
  </div>










</body>

</html>
