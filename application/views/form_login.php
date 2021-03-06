<body style="background-image:url(<?php echo base_url("uploads/bg-login.png");?>">

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
               <img  src="<?php echo base_url('uploads/im_logo.png')?>" style="width: 125px; height: 125px;">
            </div>

            <div class="card card-success">
              <div class="card-body text-center"><h2>Login</h2></div>
              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1"  autofocus>
                     <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                     <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                Belum memiliki akun? Register <a href="<?php echo base_url('register') ?>">disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


