<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
      .heading{
        padding-top: 50px;
      }
      .menu button{
        border: 3px solid green;
        color: black;
        min-height: 40px;
        background-color: white;
        transition: all 0.3s;
        margin-top: 5px;
        margin-right: 5px;
      }
      .menu button:hover{
        background-color: green;
        color: white;
      }
      .menu{
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <center><h1 class="heading">Сайт учителя английского языка<br>
Суворовы Марины Николаевны</h1></center>
<div class="menu">
  <a href="index.php"><button type="button" name="button">главная</button></a>
  <a href="portfolio.php"><button type="button" name="button">портфолио</button></a>
  <a href="forTeachers.php"><button type="button" name="button">коллегам</button></a>
  <a href="forStudents.php"><button type="button" name="button">студентам</button></a>
  <a href="forParents.php"><button type="button" name="button">родителям</button></a>
  <a href="contacts.php"><button type="button" name="button">контакты</button></a>
  <a href="distant.php"><button type="button" name="button">дистанционное обучение</button></a><hr>
  <a href="admin.php"><button type="button" name="button">🔑</button></a><hr>

</div>
</body>
</html>
