<form action="<?= base_url('formkp/submit') ?>" method="POST">
    <div class="min-h-screen bg-gray-100 flex">
        <div class="flex flex-col lg:flex-row gap-4 ml-64 pl-6 pr-1 w-100% mb-10">
            <link href="/output.css" rel="stylesheet">
            <?= $this->include('partials/sidebar') ?>
            
            <div class="flex-1 pt-6 pl-2 pr-2">
                <div class="flex flex-col gap-4 w-full">
                    <?= $this->include('partials/header') ?>
    
                    <div class=" bg-white rounded-lg shadow-md px-6 py-4">
                        <h1 class="font-bold text-lg">FORM PENGAJUAN PEMBIMBING KP (KP-A0)</h1>
                        <br/>
                        <p>Sebelum memulai Kerja Praktek, langkah pertama yang harus dilakukan oleh mahasiswa adalah mengajukan permintaan KP ke pengelola administrasi di Program Studi Sarjana Teknik Elektro. Dalam permintaan ini, mahasiswa diperbolehkan mengusulkan calon pembimbing Kerja Praktek (usulan maksimal 3 orang dosen). Usulan ini dapat dijadikan bahan pertimbangan bagi Ketua/Sekretaris Prodi dalam penentuan pembimbing KP bagi mahasiswa ybs.</p>
                        <br/>
                        <p> <strong>PENTING!</strong> Mahasiswa perlu memastikan memenuhi syarat:</p>
                        <ol class="list-decimal ml-6 mt-3 space-y-2">
                            <li>
                            Terdaftar di semester berjalan (dibuktikan dengan KRS)
                            </li>
                            <li>
                            Telah mengambil lulus minimal 70 SKS, dibuktikan dengan transkrip kemajuan studi.
                            </li>
                        </ol>
                    </div>
                    <div class=" bg-white rounded-lg shadow-md px-6 py-4">
                        <h1 class="font-bold text-2xl text-center text-blue-900">Isi Data Berikut:</h1>
                        <br/>
                        <div class="grid grid-cols-2 gap-4 w-full">
                            <div>
                                <label for="nama" class="block font-medium mb-1">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" value="<?= isset($biodata['nama']) ? esc($biodata['nama']) : '' ?>" class="w-full p-2 rounded-lg bg-gray-200" />
                            </div>
                            <div>
                                <label for="nim" class="block font-medium mb-1">NIM</label>
                                <input type="text" id="nim" name="nim" value="<?= isset($biodata['nim']) ? esc($biodata['nim']) : '' ?>" class="w-full p-2 rounded-lg bg-gray-200" />
                            </div>
                            <div>
                                <label for="konsentrasi" class="block font-medium mb-1">Konsentrasi</label>
                                <select id="konsentrasi" name="konsentrasi" class="w-full p-2 rounded-lg bg-gray-200">
                                    <option value="" disabled selected>Pilih Konsentrasi</option>
                                    <option value="teknologi-informasi">Teknologi Informasi</option>
                                    <option value="power">Teknik Tenaga Listrik</option>
                                    <option value="kontrol">Teknik Telekomunikasi</option>
                                    <option value="elektronika">Elektronika</option>
                                    <option value="kontrol-dan-instrument">Kontrol dan Instrument</option>
                                </select>
                            </div>
                            <div>
                                <label for="instansi" class="block font-medium mb-1">Instansi/Perusahaan</label>
                                <input type="text" id="instansi" name="instansi" placeholder="Instansi/Perusahaan yang dituju" class="w-full p-2 rounded-lg bg-gray-200" />
                            </div>
                            <div class="col-span-2">
                                <label for="alamat-instansi" class="block font-medium mb-1">Alamat Instansi/Perusahaan</label>
                                <input type="text" id="alamat-instansi" name="alamat-instansi" placeholder="Alamat Instansi/Perusahaan yang dituju" class="w-full p-2 rounded-lg bg-gray-200" />
                            </div>
                            <div class="col-span-2">
                                <label for="dosen" class="block font-medium mb-1">Usulan dosen pembimbing</label>
                                <div class="grid grid-cols-3 gap-4">
                                    <select id="dosen1" name="dosen1" class="p-2 rounded-lg bg-gray-200">
                                        <option value="" disabled selected>Pilih Dosen 1</option>
                                        <option value="arfan">Arfan</option>
                                        <option value="eko">Eko</option>
                                        <option value="wahyudi">Wahyudi</option>
                                        <option value="maman">Maman</option>
                                        <option value="agus">Agus</option>
                                    </select>
                                    <select id="dosen2" name="dosen2" class="p-2 rounded-lg bg-gray-200">
                                        <option value="" disabled selected>Pilih Dosen 2</option>
                                        <option value="arfan">Arfan</option>
                                        <option value="eko">Eko</option>
                                        <option value="wahyudi">Wahyudi</option>
                                        <option value="maman">Maman</option>
                                        <option value="agus">Agus</option>
                                    </select>
                                    <select id="dosen3" name="dosen3" class="p-2 rounded-lg bg-gray-200">
                                        <option value="" disabled selected>Pilih Dosen 3</option>
                                        <option value="arfan">Arfan</option>
                                        <option value="eko">Eko</option>
                                        <option value="wahyudi">Wahyudi</option>
                                        <option value="maman">Maman</option>
                                        <option value="agus">Agus</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-5 w-full">
                            <button type="submit" class="text-white bg-blue-900 p-2 rounded-lg justify-center items-center w-72">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
