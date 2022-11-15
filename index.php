<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marika</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
  <style media="screen">
  a{
    color: green;
  }
  a:hover{
    color: darkgreen;
  }
  .content{
    margin-left: 20px;
    margin-top: 10px;
  }
  .content img{
    float: left;
    margin-right: 20px;
  }
  .posts{

  }
  </style>
  </head>
  <body>
    <div class="container">
      <?php require 'header.php'; ?>
      <div class="row">
        <div class="col-lg-8 content">
          <img src="img/photo.jpg" width="150px" height="200px" alt="">
          <p>
            В современном мире уже трудно представить себя без мобильного телефона и интернета. Да и зачем? Новые компьютерные технологии заняли особое положение в нашей жизни.

            Давайте же использовать новые технологии для поднятия своего уровня образованности.

            Этот сайт предназначен, в первую очередь, коллегам-учителям английского языка, работающим в начальной школе, родителям, заинтересованным в том, чтобы их дети изучали иностранный язык с удовольствием, а также моим ученикам, которые любят этот предмет и хотят совершенствовать свой английский язык. Надеюсь, что представленная на сайте информация будет вам полезна!
          </p>
          <div class="posts">
            <div class="post">
              <hr>
              <h2>Заголовок поста</h2>
              <p>Краткое описание поста</p>
              <a href="#">Читать далее...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 sidebar">

        </div>
      </div>

    </div>
  </body>
</html>
