<?php $__env->startSection('content'); ?>
<br><br><br><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center style="color: white;background-color: black;height: 40px;"><b>Recover Password</b></center>

			<form action="" method="post">
					<?php echo csrf_field(); ?>
					<br>
					<div class="form-group">
							<label>Email ID</label>
									<input type="text" class="form-control" name="name">
					</div>

					<div class="form-group">
							<label>Code Verification</label>
									<input type="text" class="form-control" name="Password">
					</div>

					<div class="form-group">
						<button name="submit" class="form-control btn btn-primary">Confirm</button>
					</div>	
			</form>
				<a href="<?php echo e(url('login')); ?>" style="float: right" class="btn btn-primary">Back</a>	
				
		</div>
		<div class="col-md-4"></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/CRUD/forget.blade.php ENDPATH**/ ?>