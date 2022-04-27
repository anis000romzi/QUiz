<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mt-3 mb-5">
                <div class="card-header">
                    Tambah Data Berita
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                            <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="headline_news" class="form-label">Headline News</label>
                            <input type="text" name="headline_news" class="form-control" id="headline_news">
                            <small class="form-text text-danger"><?= form_error('headline_news'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_berita" class="form-label">Deskripsi Berita</label>
                            <textarea type="text" name="deskripsi_berita" class="form-control" id="deskripsi_berita"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi_berita'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_publikasi" class="form-label">Tanggal Berita</label>
                            <input type="date" name="tgl_publikasi" class="form-control" id="tgl_publikasi">
                            <small class="form-text text-danger"><?= form_error('tgl_publikasi'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis">
                            <small class="form-text text-danger"><?= form_error('penulis'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="kategori">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori">
                                <option value="Olahraga">Olahraga</option>
                                <option value="Teknologi">Teknologi</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Entertainment">Entertainment</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
