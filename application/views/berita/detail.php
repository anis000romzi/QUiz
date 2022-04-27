<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Berita
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?= $berita['judul']; ?></h4>
                    <h5 class="card-subtitle mb-2 text-muted"><?= $berita['headline_news']; ?></h5>
                    <p class="card-text"><?= $berita['deskripsi_berita']; ?></p>
                    <small class="card-text"><?= $berita['tgl_publikasi']; ?></small><br>
                    <small class="card-text"><?= $berita['penulis']; ?></small><br>
                    <strong><small class="card-text"><?= $berita['kategori']; ?></small></strong><br>
                    <a href="<?= base_url(); ?>berita/tampil" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>