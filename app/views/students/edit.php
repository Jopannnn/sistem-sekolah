<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
        <div class="mt-8 space-y-4">
            <div Class="bg-white shadow rounded-lg p-4 ">
                <h1 class="text-2xl font-bold">Edit Siswa</h1>
                <p>Melakukan perubahan data siswa yang terdaftar</p>
            </div>
    
            <div class="bg-white shadow rounded-lg">
                <form action="" class="p-4 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="block font-bold" for="name">Nama</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="name" id="name" placeholder="Masukan nama">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="nis">NIS</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="nis" placeholder="Masukan NIS">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="class">Kelas</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="class" id="class" placeholder="Masukan kelas">
                    </div>
                    <div class="space-y-2">
                        <label class="block font-bold" for="phone-number">No Telepon</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="phone-number" id="phone-number" placeholder="Masukan no telepon">
                    </div>
                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                        <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-lg">Simpan</button>
                    </div>

                </form>
            </div>  
        </div>
    </main>







    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y') ?> Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>


</body>

</html>