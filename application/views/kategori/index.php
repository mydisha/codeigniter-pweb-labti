<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="col-md-4">
                            <h4 class="title">Daftar Kategori</h4>
                            <p class="category">Daftar Kategori Rekomendasi Lombok</p>
                        </div>
                        <div class="pull-right">
                            <a href="<?=base_url();?>kategori/tambah" class="btn btn-info">Tambah Kategori</a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $d) {?>
                                <tr>
                                    <td><?=$d->id?></td>
                                    <td><?=$d->nama?></td>
                                    <td>
                                        <a href="<?php echo base_url() . 'kategori/edit/' . $d->id; ?>" class="btn btn-info">Edit</a>
                                        <a href="<?php echo base_url() . 'kategori/delete/' . $d->id; ?>" class="btn btn-danger">Hapus</a>
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