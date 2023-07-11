<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<div></div>
<div class="ketua">
    <div class="dokter-list">
        <b class="dokter-list title">KEPALA PUSKESMAS</b>
        <ul class="doctor-list">
            <?php if (isset($kapus)) { ?>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="data:image/<?= $kapus["extension"]; ?>;charset=utf8;base64,<?= base64_encode($kapus["image"]); ?>" alt="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama"><?= $kapus["nama"]; ?></b>
                </div>
            <?php } else { ?>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            <?php } ?>
        </ul>
    </div>
    <div class="dokter-list">
        <b class="dokter-list title">KASUBAG TU</b>
        <ul class="doctor-list">
            <?php if (isset($katu)) { ?>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="data:image/<?= $katu["extension"]; ?>;charset=utf8;base64,<?= base64_encode($katu["image"]); ?>" alt="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama"><?= $katu["nama"]; ?></b>
                </div>
            <?php } else { ?>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="dokter-list">
    <b class="dokter-list title">DOKTER</b>
    <ul class="doctor-list">
        <?php if (!empty($dokter)) {
            foreach ($dokter as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">PERAWAT</b>
    <ul class="doctor-list">
        <?php if (!empty($perawat)) {
            foreach ($perawat as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">FARMASI</b>
    <ul class="doctor-list">
        <?php if (!empty($farmasi)) {
            foreach ($farmasi as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">LABORATORIUM</b>
    <ul class="doctor-list">
        <?php if (isset($lab)) { ?>
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <img src="data:image/<?= $lab["extension"]; ?>;charset=utf8;base64,<?= base64_encode($lab["image"]); ?>" alt="img/default/template_image.png"></img>
                </div>
                <b class="template-doctor-nama"><?= $lab["nama"]; ?></b>
            </div>
        <?php } else { ?>
            <div class="template-doctor">
                <div class="template-doctor-image-wrapper">
                    <img src="img/default/template_image.png"></img>
                </div>
                <b class="template-doctor-nama">Kategori Kosong</b>
            </div>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">BIDAN</b>
    <ul class="doctor-list">
        <?php if (!empty($bidan)) {
            foreach ($bidan as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="dokter-list">
    <b class="dokter-list title">STAFF</b>
    <ul class="doctor-list">
        <?php if (!empty($staff)) {
            foreach ($staff as $datas) { ?>
                <li>
                    <div class="template-doctor">
                        <div class="template-doctor-image-wrapper">
                            <img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="img/default/template_image.png">
                        </div>
                        <b class="template-doctor-nama"><?= $datas["nama"]; ?></b>
                    </div>
                </li>
            <?php }; ?>
        <?php } else { ?>
            <li>
                <div class="template-doctor">
                    <div class="template-doctor-image-wrapper">
                        <img src="img/default/template_image.png"></img>
                    </div>
                    <b class="template-doctor-nama">Kategori Kosong</b>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div></div>
<?php $this->endSection(); ?>