<?php if (!empty($biodata)): ?>
    <?php foreach ($biodata as $item): ?>

        <div class="min-h-screen bg-gray-100 flex">
            <link href="/output.css" rel="stylesheet">

            <?= $this->include('partials/sidebar') ?>
            

            <div class="ml-64 pt-6 pl-8 pr-2 flex gap-6 w-full">
                <!-- Biodata -->
                <div class="flex-1">
                    <h1 class="text-3xl font-bold mb-4">Selamat Datang <?= esc($item['nama']) ?></h1>
                    <div class="flex flex-row gap-4 w-full">
                        <section class="bg-white p-4 rounded-lg shadow-md mb-6 w-3/4 items-center">
                            <h2 class="text-xl font-bold">Biodata</h2>
                            <div class="flex items-start mt-4">
                                <img src="<?= base_url('user.png') ?>" alt="Profile" class="h-40 w-40 rounded-full object-cover object-center " />
                                <div class="ml-4" style="display: grid; grid-template-columns: 150px auto; gap: 10px;">
                                    <p class="text-lg"><strong>Nama:</strong></p>
                                    <p class="text-lg"><?= esc($item['nama']) ?></p>
                                    <p class="text-lg"><strong>NIM:</strong></p>
                                    <p class="text-lg"><?= esc($item['nim']) ?></p>
                                    <p class="text-lg"><strong>Konsentrasi:</strong></p>
                                    <p class="text-lg"><?= esc($item['konsentrasi']) ?></p>
                                    <p class="text-lg"><strong>Alamat:</strong></p>
                                    <p class="text-lg"><?= esc($item['alamat']) ?></p>
                                </div>
                            </div>
                        </section>
                        <section class="bg-white p-4 rounded-lg shadow-md mb-6 w-1/4">
                            <h2 class="text-xl font-bold">Hasil Studi</h2>
                            <div class="flex items-center mt-4">
                                <div class="ml-4">
                                    <p><strong>Semester:</strong> <?= esc($item['semester']) ?> </p>
                                    <p><strong>IPK:</strong> <?= esc($item['ipk']) ?> </p>
                                    <p><strong>IPKs:</strong> <?= esc($item['ipks']) ?> </p>
                                    <p><strong>SKS:</strong> <?= esc($item['sks']) ?> </p>
                                    <p><strong>SKS semester:</strong> <?= esc($item['sks_semester']) ?> </p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Main Content -->
                    <section class="bg-white p-4 rounded-lg shadow-md mb-6">
                        <h2 class="text-xl font-bold">Jadwal Wisuda</h2>
                        <table class="w-full mt-4 border-collapse border border-gray-300 text-sm">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 p-2"></th>
                                    <th class="border border-gray-300 p-2">Agustus 2024</th>
                                    <th class="border border-gray-300 p-2">September 2024</th>
                                    <th class="border border-gray-300 p-2">Desember 2024</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 p-2 text-center">Batas akhir sidang</td>
                                    <td class="border border-gray-300 p-2 text-center">31 Jul 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Sep 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Des 2024</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2 text-center">Pameran TA</td>
                                    <td class="border border-gray-300 p-2 text-center">31 Jul 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Sep 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Des 2024</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 p-2 text-center">Wisuda</td>
                                    <td class="border border-gray-300 p-2 text-center">31 Jul 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Sep 2024</td>
                                    <td class="border border-gray-300 p-2 text-center">06 Des 2024</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-4 text-sm font-bold">
                            Syarat pendaftaran Pameran dan Sidang TA:
                            <ol class="list-disc ml-5 mt-2">
                            <li>Menyelesaikan proyek tugas akhir kelompok.</li>
                            <li>Lulus semua mata kuliah yang dibutuhkan.</li>
                            <li>Telah mengikuti dan lulus matrikulasi mata kuliah, dibuktikan dengan transkrip matrikulasi.</li>
                            <li>Mengumpulkan dokumen pengembangan produk lengkap (B100 – B500) yang telah disetujui pembimbing.</li>
                            <li>Mengumpulkan draft TA perorangan yang telah disetujui pembimbing, sesuai format.</li>
                            <li>Menyiapkan video presentasi produk (3-5 menit), dan telah diupload di channel Youtube Prodi Teknik Elektro.</li>
                            <li>Menunjukkan skor TOEFL yang masih berlaku minimal 400, dari SEU atau ETS.</li>
                            <li>Telah mempublikasikan hasil TA dalam jurnal.</li>
                            <li>Naskah draft TA, laporan kelompok dan publikasi jurnal telah dinyatakan bebas plagiat menggunakan Turnitin, dengan skor kemiripan (similarity score) maksimal 25%,sesuai Perak 2020 revisi.
                            (cek plagiasi HARUS dilakukan di Perpustakaan Teknik Elektro – Undip).</li>
                            <li>Telah melengkapi proses bimbingan TA di SIAP*.</li>
                            </ol>
                            <br />
                            <p><strong>Catatan:</strong></p>
                            <p>*Untuk dapat melengkapi proses bimbingan dan mendaftar Ujian TA di SIAP, mahasiwa harus terdaftar di semester ini dan mengambil <strong>IRS MK Tugas Akhir.</strong></p>
                        </p>
                    </section>
                </div>
            

                <!-- Right Sidebar -->
                <div class="w-64 space-y-5">
                    <div class="rounded-lg">
                        <input type="text" placeholder="Search" class="w-full px-3 py-1 rounded-3xl bg-white border border-gray-300" />
                    </div>
                    <div class="p-4 rounded-lg shadow-md bg-blue-950">
                        <h2 class="text-xl font-bold mb-2 text-white">Pengumuman</h2>
                        <p class="text-base text-white">
                            Semua mahasiswa yang akan atau telah mengambil KP TA harap menghubungi Tata Usaha Program Studi.
                            <br /><br />
                            <strong>Kontak:</strong> teknik.elektro.undip@gmail.com
                        </p>
                    </div>
                    <div class="w-64 space-y-5">
                    <!-- Kalender -->
                    <div class="container mx-auto mt-10 bg-white p-4 rounded-lg shadow-md">
                        <h1 class="text-xl font-bold mb-4">Calendar</h1>

                        <!-- Navigasi Bulan -->
                        <div class="flex justify-between items-center mb-4">
                            <a href="?month=<?= $currentMonth - 1 ?>&year=<?= $currentYear ?>" 
                               class="text-blue-500 hover:underline"><</a>
                            <span class="font-bold">
                                <?= date('F Y', strtotime("$currentYear-$currentMonth-01")) ?>
                            </span>
                            <a href="?month=<?= $currentMonth + 1 ?>&year=<?= $currentYear ?>" 
                               class="text-blue-500 hover:underline">></a>
                        </div>

                        <!-- Header Hari -->
                        <div class="grid grid-cols-7 text-center text-gray-700 font-semibold">
                            <div>S</div>
                            <div>M</div>
                            <div>T</div>
                            <div>W</div>
                            <div>Th</div>
                            <div>F</div>
                            <div>S</div>
                        </div>

                        <!-- Tanggal -->
                        <div class="grid grid-cols-7 text-center text-sm mt-2">
                            <?php foreach ($calendar as $week): ?>
                                <?php foreach ($week as $day): ?>
                                    <?php if ($day === null): ?>
                                        <div class="py-2"></div>
                                    <?php else: ?>
                                        <div class="py-1 <?= date('j') == $day && date('m') == $currentMonth && date('Y') == $currentYear ? ' bg-blue-900 text-white rounded-full' : '' ?>">
                                            <?= $day ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold mb-2">Link Blogroll</h2>
                        <ul class="space-y-2 text-blue-600 text-sm">
                            <li><a href="#">Fakultas Teknik</a></li>
                            <li><a href="#">Form Surat Fakultas dan Format TA</a></li>
                            <li><a href="#">Universitas Diponegoro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<?php else: ?>
    <p>Tidak ada data biodata tersedia.</p>
<?php endif; ?>