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
                        <form method="POST" action="<?php echo base_url(); ?>lokasi/doupdate" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control border-input" placeholder="Masukkan Nama" value="<?=$data['nama']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input type="text" name="latitude" id="latitude" class="form-control border-input" placeholder="Latitude" value="<?=$data['latitude']?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input type="text" name="longitude" id="longitude" class="form-control border-input" placeholder="Longitude" value="<?=$data['longitude']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea id="alamat" name="alamat" class="form-control border-input"><?=$data['alamat']?></textarea>
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
                                        <input type="text" class="form-control border-input" value="<?=$data['jam_buka']?>" name="waktu_buka" placeholder="Waktu Buka">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group clockpicker" data-autoclose="true" data-placement="top">
                                        <label>Waktu Tutup</label>
                                        <input type="text" class="form-control border-input" value="<?=$data['jam_tutup']?>" name="waktu_tutup" placeholder="Waktu Tutup">
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
                            <input type="hidden" name="id" value="<?=$data['id']?>">
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