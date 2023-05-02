<?php include FCPATH . 'application/views/templates/admin-nav-template.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="content-head h-100">
                <div class="content-head-title h-100">GALERI</div>
                <div class="content-head-title-line">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>galeri/galeriFoto">Galeri Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url() ?>galeri/galeriVideo">Galeri Video</a>
            </li>
        </ul>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= base_url() ?>galeri/tambahGaleriVideo" class="btn btn-success mb-3 px-3">Tambah</a>
                    <?php if (validation_errors())
                        echo validation_errors();
                    ?>
                    <?= $this->session->flashdata('pesan') ?>
                    <div class="data-table">
                        <table id="dt-galeri" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($galeriVideo as $gv) {
                                ?>
                                    <tr>
                                        <td>
                                            <iframe width="420" height="315" src="<?= $gv['galeri_item'] ?>">
                                            </iframe>
                                        </td>
                                        <td>
                                            <div class="button-action-wrapper">
                                                <a href="<?= base_url() ?>galeri/prosesHapusGaleri/<?= $gv['id_galeri'] ?>" class="btn btn-danger">DELETE</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>