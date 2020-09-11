<?php
// echo $_POST["username"];
// echo $_POST["password"];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>TOEIC PSU Phuket Test Online System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
			<a href="#" class="navbar-brand">TOEIC PSU Phuket Test Online System</a>
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="schedule.php" class="nav-item nav-link active">Schedule</a></li>
					<li><a href="#" class="nav-item nav-link">Terms & Conditions</a></li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Applicant</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Student Name List</a>
							<a href="#" class="dropdown-item">Student Score</a>
							<a href="#" class="dropdown-item">General</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Admin Management</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Admin Management</a>
							<a href="index.php" class="dropdown-item">LOG OUT</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        jQuery(function($) {
    $(window).on('scroll', function() {
		if ($(this).scrollTop() >= 200) {
			$('.navbar').addClass('fixed-top');
		} else if ($(this).scrollTop() == 0) {
			$('.navbar').removeClass('fixed-top');
		}
	});
	
	function adjustNav() {
		var winWidth = $(window).width(),
			dropdown = $('.dropdown'),
			dropdownMenu = $('.dropdown-menu');
		
		if (winWidth >= 768) {
			dropdown.on('mouseenter', function() {
				$(this).addClass('show')
					.children(dropdownMenu).addClass('show');
			});
			
			dropdown.on('mouseleave', function() {
				$(this).removeClass('show')
					.children(dropdownMenu).removeClass('show');
			});
		} else {
			dropdown.off('mouseenter mouseleave');
		}
	}
	
	$(window).on('resize', adjustNav);
	
	adjustNav();
});
    </script>
  </body>
</html>