<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
					<img src="<?= base_url('assets');?>/img/LOGODWP.png" style="width:120px;height:120px;">
					<h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                  </div>
				  <form class="user" method="post" action="<?= base_url('auth'); ?>">
				  <?php echo $this->session->flashdata('message'); ?>
                    <div class="form-group">
					  <input type="text" class="form-control form-control-user" id="username" name="username"  placeholder="Enter Username...">
					  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
					  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
					  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
					</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
