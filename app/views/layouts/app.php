<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

   <?php
    require_once '../app/views/Layouts/partials/header.php';
   ?>

    <main class="grow container mx-auto ">
      <?php require_once $content ?>
    </main>

    <?php
    require_once '../app/views/Layouts/partials/footer.php';
    ?>
   


</body>

</html>