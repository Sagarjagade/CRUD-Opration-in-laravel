<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>Add New Data</center>
		</div>
		<div class="col-md-2"></div>
	</div>

	<!-- <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<span style="color: red"><?php echo e($error); ?></span>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="<?php echo e(url('list/update/'.$article->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<label>Title</label> : <input type="text" value="<?php echo e(old('title',$article->title)); ?>" class="form-control <?php echo e(($errors->any() && $errors->first('title')) ? 'is-invalid ' : ''); ?>" name="title">

				<?php if($errors->any()): ?>
					<span style="color: red"><?php echo e($errors->first('title')); ?></span>
				<?php endif; ?>	
				<br>
				
				<label>Decription</label> : <textarea class="form-control <?php echo e(($errors->any() && $errors->first('description')) ? 'is-invalid ' : ''); ?>" name="description" ><?php echo e(old('description',$article->description)); ?></textarea>
				<?php if($errors->any()): ?>
					<span style="color: red"><?php echo e($errors->first('description')); ?></span>
				<?php endif; ?>	
				<br>
				<button type="submit" name="submit" class="btn btn-primary">Update</button>	
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/update.blade.php ENDPATH**/ ?>