<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Masukkan Informasi</h4>
                        <p class="category">Informasi Kategori</p>
                    </div>
                    <div class="content">
                        <form method="POST" action="<?php echo base_url(); ?>kategori/simpandata">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control border-input" placeholder="Masukkan Nama Kategori">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" align="center">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>