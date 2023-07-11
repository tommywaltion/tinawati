<ul class="facility-list-table">
    <?php foreach ($data_fasilitas as $datas) { ?>
        <li>
            <div class="template-facility">
                <div class="template-facility-image-wrapper"><img src="data:image/<?= $datas["extension"]; ?>;charset=utf8;base64,<?= base64_encode($datas["image"]); ?>" alt="asset/template_image.png"></div>
                <b class="template-facility-nama"><?= $datas["nama"]; ?></b>
            </div>
        </li>
    <?php }; ?>
</ul>