<?php $__env->startSection('content'); ?>
		
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<span style="color: red"><?php echo e($error); ?></span>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<form action="" method="post">
			<?php echo csrf_field(); ?>
			<label>Email</label>:<input type="text" name="Email"><br>
			<label>Password</label>:<input type="Password" name="pass"><br>
			<label>Age</label>:<input type="text" name="age"><br>
			<button type ="submit">Submit</button>
		</form>
	


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/home.blade.php ENDPATH**/ ?>