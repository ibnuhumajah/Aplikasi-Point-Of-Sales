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
            <div class="pull-right col-md-8">

            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Submit</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                        <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                            <label for="Name"> Name*</label>
                            <input type="text" name="fullname" class="form-control" value="<?= set_value('fullname') ?>">
                            <span class="help-block"><?= form_error('fullname') ?></span>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label for="Username"> Username*</label>
                            <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>">
                            <span class="help-block"><?= form_error('username') ?></span>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label for="Password"> Password*</label>
                            <input type="password" name="password" class="form-control" value="<?= set_value('password') ?>">
                            <span class="help-block"><?= form_error('password') ?></span>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                            <label for="Password"> Password Confirmation*</label>
                            <input type="password" name="passconf" class="form-control" value="<?= set_value('passconf') ?>">
                            <span class="help-block"><?= form_error('passconf') ?></span>
                        </div>

                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label for="level"> Level*</label>
                            <select name="level" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Kasir</option>
                                <span class="help-block"><?= form_error('level') ?></span>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>