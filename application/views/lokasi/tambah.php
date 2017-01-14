<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-map">
                    <div class="header">
                        <h4 class="title">Daftar Lokasi</h4>
                        <p class="category">Daftar Rekomendasi Lokasi Daerah Lombok</p>
                    </div>
                    <div class="map">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Masukkan Informasi</h4>
                    </div>
                    <div class="content">
                        <form method="POST" action="<?php echo base_url(); ?>lokasi/simpandata" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control border-input" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input type="text" name="latitude" id="latitude" class="form-control border-input" placeholder="Latitude">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input type="text" name="longitude" id="longitude" class="form-control border-input" placeholder="Longitude">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea id="alamat" name="alamat" class="form-control border-input"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control border-input" name="kategori">
                                            <?php foreach ($list_kategori as $k) {?>
                                            <option value="<?=$k->id?>"><?=$k->nama?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group clockpicker" data-autoclose="true" data-placement="top">
                                        <label>Waktu Buka</label>
                                        <input type="text" class="form-control border-input" value="00:00" name="waktu_buka" placeholder="Waktu Buka">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group clockpicker" data-autoclose="true" data-placement="top">
                                        <label>Waktu Tutup</label>
                                        <input type="text" class="form-control border-input" value="00:00" name="waktu_tutup" placeholder="Waktu Tutup">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="image" class="form-control border-input">
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