
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>Register</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?php echo e(route('register')); ?>" method="post"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="">
            <?php if($errors->has('name')): ?>
                 <span class="text-danger"><?php echo $errors->first('name'); ?></span>
             <?php endif; ?>
        </div>
        
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        <div class="div">
            <?php if($errors->has('email')): ?>
            <span class="text-danger"><?php echo $errors->first('email'); ?></span>
              <?php endif; ?>
         </div>
         
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="">
            <?php if($errors->has('password')): ?>
            <span class="text-danger"><?php echo $errors->first('password'); ?></span>
            <?php endif; ?>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" name="password1" class="form-control" placeholder="Retype password">
          <?php if($errors->has('password1')): ?>
          <span class="text-danger"><?php echo $errors->first('password1'); ?></span>
         <?php endif; ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        
        <div class="input-group mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
            <?php if($errors->has('phone')): ?>
            <span class="text-danger"><?php echo $errors->first('phone'); ?></span>
             <?php endif; ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>

                    <!-- Hinh anh -->
                    <div class="row mb-3">
                        <label for="avatar"  style=" padding-left: 50px;"class="col-md-4 col-form-label text-md-end"><?php echo e(__('Avatar')); ?></label>

                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="avatar" value="<?php echo e(old('avatar')); ?>" required autocomplete="avatar">

                            <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo $message; ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                    </div>


        <div class="row">
          <div class="col-8">
            <a href="<?php echo e(route('login')); ?>" class="text-center">I already accout </a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>




    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\lap-trinh-laravel-khoa-pham-2022-master\Source\resources\views/admin/users/register.blade.php ENDPATH**/ ?>