<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="col-md-4">
                            <h4 class="title">Daftar Lokasi</h4>
                            <p class="category">Daftar Rekomendasi Lokasi Daerah Lombok</p>
                        </div>
                        <div class="pull-right">
                            <a href="<?=base_url();?>lokasi/tambah" class="btn btn-info">Tambah Lokasi</a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nama Lokasi</th>
                                <th>Jam Buka</th>
                                <th>Jam Tutup</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $d) {?>
                                <tr>
                                    <td><?=$d->id?></td>
                                    <td><?=$d->nama?></td>
                                    <td><?=$d->jam_buka?></td>
                                    <td><?=$d->jam_tutup?></td>
                                    <td><?=$d->nama_kategori?></td>
                                    <td>
                                        <img src="<?php echo base_url() . 'uploads/' . $d->image; ?>" class="img-thumbnail" width="100" height="50">
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . 'lokasi/edit/' . $d->id; ?>" class="btn btn-info">Edit</a>
                                        <a href="<?php echo base_url() . 'lokasi/delete/' . $d->id; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>