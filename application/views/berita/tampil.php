<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>" class="btn btn-primary">Tambah Data Berita</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Berita</h3>
            <ul class="list-group">
                <?php foreach ($berita as $brt): ?>
                    <li class="list-group-item">
                        <?= $brt['judul']; ?> <small class="text-muted"> || <?= $brt['tgl_publikasi'] ?></small>
                        <a href="<?= base_url(); ?>berita/detail/<?= $brt['id']; ?>" class="badge bg-primary float-end">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>