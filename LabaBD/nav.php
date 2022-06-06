<?php
	session_start();
?>

<?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">

							<a href="index.php">
						
							</a>
					</li>
					<li>
							<a href="index.php?page=dashboard">Статистика</a>
					</li>
					<li>
							<a href="index.php">Отметить посещение</a>
					</li>
					<li>
							<a href="index.php?page=studentinfo">Список студентов</a>
					</li>
					<li>
							<a href="index.php?page=reports">Отчет</a>
					</li>
					<li>
							<a href="index.php?page=logout">Выйти</a>
					</li>
			</ul>
	</nav>
	<?php elseif (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 0) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">

							<a href="index.php">
						
							</a>
					<li>
							<a href="index.php?page=reports">Отчет</a>
					</li>
					<li>
							<a href="index.php?page=logout">Выйти</a>
					</li>
			</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php">
								
							</a>
					</li>
			    <li><a>Помощь</a></li>
				<li><a href="#">Контакты</a></li>
				<li><a href="#">Вход</a></li>
			</ul>
	</nav>
<?php endif; ?>
