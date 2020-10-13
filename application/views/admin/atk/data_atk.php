<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Data ATK</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_jabatan') ?>" class="btn btn-primary">Tambah ATK</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>satuan Barang</th>
                            <th>Qty Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data_atk as $x) { ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $x->nama_barang; ?></td>
                                <td><?= $x->satuan; ?></td>
                                <td><?= $x->qty; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_jabatan/') . $x->id_atk; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url('admin/hapus_jabatan/') . $x->id_atk; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                </td>
                                </td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>