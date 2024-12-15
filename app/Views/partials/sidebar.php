<?php
use App\Models\BiodataModel;

$model = new BiodataModel();
$biodata = $model->getBiodata(1); // Ambil data berdasarkan ID mahasiswa (contoh: ID 2)
?>

<link href="/output.css" rel="stylesheet">


<div class="fixed top-4 left-4 h-[95vh] w-64 bg-white p-4 rounded-lg shadow-lg flex flex-col">
    <div>
        <a href="/" class="flex flex-col items-start mt-3">
            <img src="<?= base_url('Logo.png') ?>" alt="Logo" class="h-16" />
            <h1 class="text-lg font-bold text-center text-blue-900">SITITA TEKNIK ELEKTRO</h1>
        </a>
        <div class="flex flex-col gap-3 mb-8 mt-16">
            <a href="/" class="hover:bg-blue-900 hover:text-white p-1 pl-3 rounded-lg">Home</a>
            <a href="/KerjaPraktek" class="hover:bg-blue-900 hover:text-white p-1 pl-3 rounded-lg">Kerja Praktek</a>
            <a href="/TugasAkhir" class="hover:bg-blue-900 hover:text-white p-1 pl-3 rounded-lg">Tugas Akhir</a>
            <a href="/UsulanKonsen" class="hover:bg-blue-900 hover:text-white p-1 pl-3 rounded-lg">Usulan Konsentrasi</a>
            <a href="/Persuratan" class="hover:bg-blue-900 hover:text-white p-1 pl-3 rounded-lg">Persuratan</a>
        </div>
    </div>
    <footer class="mt-auto pt-4 border-t border-gray-300">
        <div class="flex items-center gap-2 mb-3">
            <img src="<?= base_url('user.png') ?>" alt="Profile" class="w-10 h-10 rounded-full" />
            <div class="flex flex-col">
                <span class="font-semibold"><?= esc($biodata['nama']) ?></span>
                <span class="text-sm text-gray-600"><?= esc($biodata['konsentrasi']) ?></span>
            </div>
        </div>
    </footer>
</div>
