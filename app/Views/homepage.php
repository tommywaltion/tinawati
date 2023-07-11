<?php $this->extend('layout/Master'); ?>
<?php $this->section('content'); ?>
<?= $this->include('include/header'); ?>
<div class="body">
    <ul>
        <li>
            <div class="introduction"><!-- <b class="introduction title">INTRODUCTION</b> -->
                <ul>
                    <li><img src="img/default/introduction.png" alt=""></li>
                    <li>
                        <ul class="introduction description">
                            <li class="no-mobile"><b class="introduction description title">ABOUT</b></li>
                            <li>
                                <p class="introduction description desc">Siapa sih yang gak kenal Puskesmas Tinewati! Salah satu Puskesmas terbaik di kabupaten Tasikmalaya. Puskesmas berfokus pada pencegahan, pengobatan, dan pemulihan kesehatan dengan melibatkan berbagai profesi kesehatan seperti dokter, perawat, bidan, apoteker, dan ahli gizi. </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="dokter-list"><b class="dokter-list title">KEPALA PUSKESMAS</b>
                <ul class="doctor-list">
                    <li>
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
                    </li>
                </ul>
            </div>
            <div class="dokter-list"><b class="dokter-list title">Kasubag TU</b>
                <ul class="doctor-list">
                    <li>
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
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <div class="facility-button">
                <a href="/fasilitas">
                    <img src="img/tinewati/Fasilitas depan.jpeg" alt=""></img>
                    <div>FACILITY AND ROOM</div>
                </a>
            </div>
        </li>
    </ul>
</div>
<?= $this->include('include/article'); ?>
<?= $this->include('include/FAQ'); ?>
<?= $this->include('include/govLogo'); ?>
<?php $this->endSection(); ?>