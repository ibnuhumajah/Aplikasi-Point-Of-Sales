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
            <h3 class="box-little"><?= ucfirst($page) ?> Data Supplier</h3>
            <div class="pull-right col-md-8">

            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= site_url('supplier/process') ?>" method="post">

                        <div class="form-group">
                            <label for="Name"> Name*</label>
                            <input type="hidden" name="id" value="<?= $row->supplier_id ?>">
                            <input type="text" name="name_supplier" class="form-control" value="<?= $row->name_supplier ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="PHONE"> Telephone*</label>
                            <input type="number" name="phone" class="form-control" value="<?= $row->phone ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="Address"> Address*</label>
                            <textarea name="addr" class="form-control" required><?= $row->address ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Descripton"> Descripton*</label>
                            <textarea name="desc" class="form-control" re><?= $row->description ?></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">Save</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>