<?php if (!empty($biodata)): ?>
    <?php foreach ($biodata as $item): ?>

        <div class="min-h-screen bg-gray-100 flex">

                <link href="/output.css" rel="stylesheet">
                <?= $this->include('partials/sidebar') ?>
                
                <div class="ml-64 pt-6 pl-8 pr-2 flex gap-6 w-full">
                    <div class="flex flex-col gap-4 w-full">
                        <?= $this->include('partials/header') ?>
            
                            <div class="flex flex-row gap-4 w-100%">
                                <section class="bg-white p-4 rounded-lg shadow-md w-3/4 items-center">
                                    <div class="flex flex-row justify-between items-center">
                                        <h2 class="text-xl font-bold">Biodata Kerja Praktek</h2>
                                        <div class="cursor-pointer">
                                            <p class="text-blue-700 text-sm">More Info ></p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-6 p-4">
                                        <img src="<?= base_url('user.png') ?>" alt="Profile" class="h-40 w-40 rounded-full object-cover object-center border border-gray-300 shadow" />
                                        <div class="gap-y-1 text-base" style="display: grid; grid-template-columns: 150px auto; gap: 10px;">
                                            <p class="font-semibold">Nama:</p>
                                            <p><?= esc($item['nama']) ?></p>
                                            <p class="font-semibold">NIM:</p>
                                            <p><?= esc($item['nim']) ?></p>
                                            <p class="font-semibold">Konsentrasi:</p>
                                            <p><?= esc($item['konsentrasi']) ?></p>
                                            <p class="font-semibold">Tempat KP:</p>
                                            <p><?= esc($item['instansi']) ?></p>
                                            <p class="font-semibold">Judul KP:</p>
                                            <p><?= esc($item['judulkp']) ?></p>
                                            <p class="font-semibold">Dosen Pembimbing:</p>
                                            <p><?= esc($item['dospem']) ?></p>
                                        </div>
                                    </div>

                                </section>
                                <section class="bg-white p-4 rounded-lg shadow-md w-1/4">
                                    <h2 class="text-lg font-semibold">Hasil Studi</h2>
                                    <div class="flex items-center mt-4 justify-between">
                                        <div class="ml-2 text-base justify-between">
                                            <p><strong>Semester:</strong> <?= esc($item['semester']) ?> </p>
                                            <p><strong>IPK:</strong> <?= esc($item['ipk']) ?> </p>
                                            <p><strong>SKS:</strong> <?= esc($item['sks']) ?> </p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-md mb-6 w-full items-center">
                                <h1 class="text-lg font-bold">Pengambilan IRS KP</h1>
                                <p class="mt-2">
                                    Pengambilan MK TEL21383 Kerja Praktik di Isian Rencana Studi (IRS) sebaiknya dilakukan ketika melaksanakan Kerja Praktik atau setelah nilai Kerja Praktik (Form B-5) sudah keluar. Nilai Kerja Praktik (sesuai Form B-5) dapat dimasukkan ke nilai SIAP apabila memenuhi ketentuan:
                                </p>
                                <ol class="list-decimal ml-6 mt-3 space-y-2">
                                    <li>
                                        Laporan KP telah mendapatkan pengesahan dari Pembimbing dan Ketua Departemen.
                                    </li>
                                    <li>
                                        MK KP diambil di IRS pada semester berjalan.
                                    </li>
                                    <li>
                                        Masa pengisian nilai Kerja Praktik ke SIAP:
                                        <ul class="list-disc ml-6 mt-2 space-y-1">
                                            <li>Semester Ganjil paling lambat tanggal 31 Januari.</li>
                                            <li>Semester Genap paling lambat tanggal 31 Juli.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        Jika nilai KP (Form KP-B5) belum tersedia pada tanggal di atas, maka MK KP harus diambil kembali di IRS semester berikutnya.
                                    </li>
                                </ol>
                            </div>
                            <div class="bg-white rounded-lg shadow-md px-6 py-4">
                                <div class="flex justify-center items-center">
                                    <h1 class=" text-xl font-bold ">Upload Makalah Kerja Praktek</h1>
                                </div>
                            </div>

                    </div>
                </div>
            
        </div>
        <?php endforeach; ?>
<?php else: ?>
    <p>Tidak ada data biodata tersedia.</p>
<?php endif; ?>