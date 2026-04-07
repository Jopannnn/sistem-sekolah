<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="grow container mx-auto ">
      <?php require_once $content ?>
    </main>







    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>


</body>

</html>