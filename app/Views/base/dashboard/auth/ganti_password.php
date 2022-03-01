<!-- Login Content -->
<div class="container-login d-flex align-items-center justify-content-center">
    <div class="row d-flex flex-column align-items-center">
            
            <div class="d-flex justify-content-center">
                <img src="<?= base_url() ?>/assets/base/img/logo.png" height="50px">
            </div>

            <div class="card shadow-sm mt-4" style='width:100%;max-width:400px'>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Ganti Password</h1>
                                </div>
                                <?php 
                                $session = session();
                                $errors = $session->getFlashdata('errors');
                                if($errors != null): ?>
                                    <div class="alert alert-danger" role="alert" id="ikierror">
                                        <span class="mb-0">
                                            <strong>Error!<strong> 
                                            <?php
                                                foreach($errors as $err){
                                                    echo $err;
                                                }
                                            ?>
                                        </span>
                                    </div>
                                <?php endif ?>
                                <form method="post" action="<?php echo base_url('update_password'); ?>" class="user">
                                    <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_user" value="<?= $id_user ?>">
                                        <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Password Baru" name="pass">
                                    </div>
                                   <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Konfirmasi Password" name="pass2">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Ganti Password</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a href="<?php echo base_url('login'); ?>">Kembali Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Login Content -->