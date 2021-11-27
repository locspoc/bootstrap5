<!--
 Template Name: Bootstrap 5 Page
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css'; ?>">
</head>
<body>
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success!</strong>
        Bootstrap 5 has now been installed and both the CSS and JavaScript is working.
    </div>
    <script src="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
</body>
</html>