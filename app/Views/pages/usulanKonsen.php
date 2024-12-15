<?php if (!empty($biodata)): ?>
    <?php foreach ($biodata as $item): ?>
        <form action="<?= base_url('formkp/submit') ?>" method="POST">
            <div class="min-h-screen bg-gray-100 flex">
                <div class="flex flex-col lg:flex-row gap-4 w-full"> <!-- Hapus ml-64, pl-6, dan pr-1 -->
                    <link href="/output.css" rel="stylesheet">
                    <?= $this->include('partials/sidebar') ?>

                    <div class="flex-1 pt-6 pl-8 pr-2 ml-64"> <!-- Gunakan px-6 untuk padding kiri-kanan -->
                        <div class="flex flex-col gap-4 w-full">
                            <?= $this->include('partials/header') ?>

                            <div class="bg-white rounded-lg shadow-md px-6 py-4">
                                <h1 class="font-bold text-lg">Yang perlu diperhatikan dalam usulan pemilihan konsentrasi</h1>
                                <ol class="list-decimal ml-6 mt-3 space-y-2">
                                    <li>Usulan konsentrasi sesuai dengan prioritas pilihan.</li>
                                    <li>Pilihan 1 s/d 5 tidak boleh ada yang sama.</li>
                                    <li>Selama batas akhir waktu belum berakhir usulan konsentrasi masih bisa diedit.</li>
                                    <li>Setelah waktu usulan berakhir, usulan yang digunakan sebagai pertimbangan adalah usulan yang terakhir.</li>
                                    <li>Batas Akhir waktu usulan konsentrasi adalah tanggal 06-07-2024.</li>
                                    <li>Bagi yang tidak mengisi Usulan Konsentrasi sampai dengan batas akhir, maka pilihan konsentrasi ditentukan oleh Prodi.</li>
                                </ol>
                            </div>

                            <div class="bg-white rounded-lg shadow-md px-6 py-4">
                                <h1 class="font-bold text-2xl text-center text-blue-900">Isi Data Berikut:</h1>
                                <br/>
                                <div class="grid grid-cols-2 gap-4 w-full">
                                    <div class="col-span-2">
                                        <label for="dosen" class="block font-medium mb-1">Pilihan Konsentrasi</label>
                                        <div class="grid grid-cols-3 gap-4">
                                            <select id="dosen1" name="dosen1" class="p-2 rounded-lg bg-gray-200">
                                                <option value="" disabled selected>Pilihan 1</option>
                                                <option value="teknologi-informasi">Teknologi Informasi</option>
                                                <option value="power">Teknik Tenaga Listrik</option>
                                                <option value="kontrol">Teknik Telekomunikasi</option>
                                                <option value="elektronika">Elektronika</option>
                                                <option value="kontrol-dan-instrument">Kontrol dan Instrument</option>
                                            </select>
                                            <select id="dosen2" name="dosen2" class="p-2 rounded-lg bg-gray-200">
                                                <option value="" disabled selected>Pilihan 2</option>
                                                <option value="teknologi-informasi">Teknologi Informasi</option>
                                                <option value="power">Teknik Tenaga Listrik</option>
                                                <option value="kontrol">Teknik Telekomunikasi</option>
                                                <option value="elektronika">Elektronika</option>
                                                <option value="kontrol-dan-instrument">Kontrol dan Instrument</option>
                                            </select>
                                            <select id="dosen3" name="dosen3" class="p-2 rounded-lg bg-gray-200">
                                                <option value="" disabled selected>Pilihan 3</option>
                                                <option value="teknologi-informasi">Teknologi Informasi</option>
                                                <option value="power">Teknik Tenaga Listrik</option>
                                                <option value="kontrol">Teknik Telekomunikasi</option>
                                                <option value="elektronika">Elektronika</option>
                                                <option value="kontrol-dan-instrument">Kontrol dan Instrument</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-5 w-full">
                                    <button type="submit" class="text-white bg-blue-900 p-2 rounded-lg justify-center items-center w-72">Submit</button>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-md px-6 py-4">
                                <h1 class=" text-base font-bold">Hasil Penetapan konsentrasi : <?= esc($item['konsentrasi']) ?> </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php endforeach; ?>
<?php else: ?>
    <p>Tidak ada data biodata tersedia.</p>
<?php endif; ?>