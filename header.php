<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <title>Marika</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
<?php wp_head(); ?>
    <style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
      .heading{
        padding-top: 50px;
      }
      .menu li{
        border: 3px solid green;
        color: black;
        padding: 3px;
        height: 40px;
        background-color: white;
        transition: all 0.3s;
        margin-top: 5px;
        margin-right: 5px;
      }
      .menu li:hover{
        background-color: green;
        color: white;
      }
      .menu li a{
        width: 100%;
        height: 50px;
        color: black;
      }
      .menu{
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin-bottom: 20px;
        list-style-type: none;
      }
      a{
        color: green;
      }
      a:hover{
        color: darkgreen;
      }
      .content{
        margin-left: 20px;
        margin-top: 10px;
        padding-left: 20px;
      }
      .content img{
        float: left;
        margin-right: 20px;
      }

    </style>
  </head>
  <body>
    <?php
  	wp_body_open();
  	?>
    <div class="container">
      <div class="header">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">  <center><h1 class="heading">Сайт учителя английского языка<br>
    Суворовы Марины Николаевны</h1></center></a>
    <?php
      wp_nav_menu(
        array(
            'theme_location'=>'top',
            'container'=>false,
            'menu_class'=>'menu'
      ));
    ?>
    <!-- <div class="menu">
      <a href="index.php"><button type="button" name="button">главная</button></a>
      <a href="portfolio.php"><button type="button" name="button">портфолио</button></a>
      <a href="forTeachers.php"><button type="button" name="button">коллегам</button></a>
      <a href="forStudents.php"><button type="button" name="button">студентам</button></a>
      <a href="forParents.php"><button type="button" name="button">родителям</button></a>
      <a href="contacts.php"><button type="button" name="button">контакты</button></a>
      <a href="distant.php"><button type="button" name="button">дистанционное обучение</button></a><hr>
      <a href="admin.php"><button type="button" name="button">🔑</button></a><hr>
      </div> -->
    </div>
