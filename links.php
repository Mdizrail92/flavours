<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
<link rel="stylesheet" href="plugins/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick-theme.css">
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
<?php
function function_alert($message)
{
    // $redirect="signup.php";
    echo
    "<SCRIPT>
            window.location.replace('signup.php');
            alert('$message');
        </SCRIPT>";
}
?>