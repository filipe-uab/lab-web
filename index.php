<?php
// index.php

// Determine which page content to load. Default to 'welcome'.
$page = isset($_GET['page']) ? $_GET['page'] : 'welcome';

// List of allowed pages for security
$allowed_pages = ['welcome', 'empty'];
if (!in_array($page, $allowed_pages)) {
	$page = 'welcome';
}
?>
<?php include('header.php'); ?>

<main class="container my-5">
  <?php include($page . '.php'); ?>
</main>

<?php include('footer.php'); ?>
