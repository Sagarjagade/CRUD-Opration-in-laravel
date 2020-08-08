<?php $__env->startSection('content'); ?>
	<br><br><br><br><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<?php if(Session::has('errormsglogin')): ?>
			<div class="alert alert-danger"><?php echo e(Session::get('errormsglogin')); ?></div>
			<?php endif; ?>
		</div>
		<div class="col-md-1"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center style="color: white;background-color: black;height: 40px;"><b>Employee Login</b></center>

			<form action="<?php echo e(route('login.data')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<br>
					<div class="form-group">
							<label>Email ID</label>
									<input type="text" class="form-control <?php echo e(($errors->any() && $errors->first('gmailID')) ? 'is-invalid' : ''); ?>" name="gmailID">

								<?php if($errors->any()): ?>
								<div class="">
								<span><?php echo e($errors->first('gmailID')); ?></span>
								</div>
								<?php endif; ?>
					</div>

					<div class="form-group">
							<label>Password</label>
									<input type="password" class="form-control <?php echo e(($errors->any() && $errors->first('password')) ? 'is-invalid' : ''); ?>" name="password">

								<?php if($errors->any()): ?>
								<div class="">
								<span><?php echo e($errors->first('password')); ?></span>
								</div>
								<?php endif; ?>
					</div>
					<div class="form-group">
						<button name="submit" class=" form-control btn btn-primary">Login</button>
					</div>	
			</form>
				<a href="<?php echo e(route('forget')); ?>" class="btn btn-info" style="float: right">Forget password</a>	
				<a href="<?php echo e(url('Register')); ?>" class="btn btn-success" style="float: left">Sign up</a>		
		</div>
		<div class="col-md-4"></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/CRUD/login.blade.php ENDPATH**/ ?>