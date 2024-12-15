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
                                <div class="flex justify-center items-center">
                                    <h1 class=" text-xl font-bold ">Surat Akademik</h1>
                                </div>
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