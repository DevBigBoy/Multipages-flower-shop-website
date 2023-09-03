<?php include '../components/connect.php' ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--======================= BOX ICON =======================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--======================= CSS =======================-->
    <link rel="stylesheet" href="../css/admin_style.css?v= <?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <?php include '../components/admin_header.php' ?>


    <?php include '../components/admin_footer.php' ?>
    <!--========================= SWEETALERT =========================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!--========================= Custome Js  =========================-->
    <script src="../js/admin_script.js"></script>
    <!--========================= alert =========================-->
    <?php include '../components/alert.php' ?>
</body>

</html>