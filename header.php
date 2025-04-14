<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Website</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Top Navigation Menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php?page=welcome">My Website</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
	  aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item <?php echo ($page == 'welcome') ? 'active' : ''; ?>">
		  <a class="nav-link" href="index.php?page=welcome">Welcome</a>
		</li>
		<li class="nav-item <?php echo ($page == 'empty') ? 'active' : ''; ?>">
		  <a class="nav-link" href="index.php?page=empty">Empty Page</a>
		</li>
	  </ul>
	</div>
  </nav>
