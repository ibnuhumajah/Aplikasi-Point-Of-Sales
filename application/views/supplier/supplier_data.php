<section class="content-header">
    <h1>
        Supplier
        <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-little">Data Supplier</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>
                    Create
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Supplier</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->name_supplier ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->description ?></td>
                            <td class="text-center" widht="160px">
                                <a href="<?= site_url('supplier/edit/' . $data->supplier_id) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= site_url('supplier/del/' . $data->supplier_id) ?>" onclick="return confirm('Data Akan Dihapus?')" class="btn btn-danger">Delete</a>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


</section>