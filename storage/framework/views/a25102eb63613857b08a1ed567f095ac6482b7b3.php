<?php $__env->startSection('content'); ?>
<br><br><br><br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php if(Session::has('msg')): ?>
						<div class="alert alert-success">
							<?php echo e(Session::get('msg')); ?>

						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-2"></div>
			</div>

			
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">

			<center style="color: white;background-color: black;height: 40px;"><b>Sign Up</b></center>

			<form action="" method="post">
					<?php echo csrf_field(); ?>
					<br>

					<div class="form-group">
							<label>Username</label>
									<input type="text" class="form-control <?php echo e(($errors->any() && $errors->first('name')) ? 'is-invalid' : ''); ?>" name="name">

							<?php if($errors->any()): ?>
							<div class="">
								<span style="color: red"><?php echo e($errors->first('name')); ?></span>
							</div>
							<?php endif; ?>

					</div>


					<div class="form-group">
							<label>Email ID</label>
							<input type="text" class="form-control <?php echo e(($errors->any() && $errors->first('gmailID')) ? 'is-invalid' : ''); ?>" name="gmailID">

							<?php if($errors->any()): ?>
							<div class="">
								<span style="color: red"><?php echo e($errors->first('name')); ?></span>
							</div>
							<?php endif; ?>
					</div>

					<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control <?php echo e(($errors->any() && $errors->first('password')) ? 'is-invalid' : ''); ?>" name="password">

							<?php if($errors->any()): ?>
							<div class="">
								<span style="color: red"><?php echo e($errors->first('name')); ?></span>
							</div>
							<?php endif; ?>
					</div>

					

					<div class="form-group">
						<button name="submit" class="form-control btn btn-primary">Register</button>
					</div>	
			</form>
				<a href="<?php echo e(url('login')); ?>" style="float: right" class="btn btn-primary">Back</a>	
				
		</div>
		<div class="col-md-4"></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/CRUD/Register.blade.php ENDPATH**/ ?>