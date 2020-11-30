<section class="content-header">
    <h1>
        Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-little">Data Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
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
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->username ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->level == 1 ? "Admin" : "Kasir" ?></td>
                            <td class="text-center" widht="160px">
                                <form action="<?= site_url('user/del') ?>" method="post">
                                    <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-warning">Edit</a>
                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                    <button onclick="return confirm('Data Akan Dihapus?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


</section>