<?php
session_start();
include("db.php");
if(!isset($_SESSION['admin_id'])){
	Header("Location: login.php");
}

?>

<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.3/examples/dashboard/ -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Reload_Lab</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .nav-link{
      color: white;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
.container-fluid {
    height: 100%;
    overflow-y: hidden; /* don't show content that exceeds my height */
}
    
  </style>

  <!-- Custom styles for this template -->
  <link href="./Template/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.3}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.3}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src = "js/script.js"></script>>
</head>
<body>



  <nav class="navbar navbar-dark fixed-top bg-dark p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Панель администрирования</a>
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="logout.php">Выйти</a> 
  </nav>

  <div class="container-fluid" >
    <div class="row" height="100%">
      <nav class="col-md-2  bg-secondary sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link" href=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?view=add">Добавить студентов</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?view=addL">Добавить преподавателей
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?view=att">Сведения о посещаемости
              </a>
            </li>
            <li class="nav-item " >
              <a class="nav-link" href="?view=student">Сведения о студенте
              </a>
            </li>
          </ul>
         
          
        </div>    
      </nav>

      <main role="main" class=" px-4">
      <br>
 
		
    <?php
    if(isset($_GET['view'])){
      if($_GET['view'] == 'student'){
        include("student.php");
      }else if($_GET['view'] == 'att'){
        include("attendance.php");
      }else if($_GET['view'] == 'add'){
        include("add_student.php");
      }else if($_GET['view'] == 'addL'){
        include("add_lecturer.php");
      }
    }else{
        include("attendance.php");
      }
    ?>
  
    <?php //include("add_student.php") ?>

      </main>
    </div>
  </div>



</body>
</html>

</html>