<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<center><h2>CRUD opration</h2></center>
		</div>
		<div class="col-md-2 mb-3">
			<br>
			<a href="<?php echo e(route('list.Create')); ?>" class="btn btn-primary">Create New Data</a></div>
	</div>

	<br><br>

	<?php if(Session::has('msg')): ?>
		<div class="col-md-12">
				<div class="alert alert-success"><?php echo e(Session::get('msg')); ?></div>
		</div>
	<?php endif; ?>

	<?php if(Session::has('errormsg')): ?>
		<div class="col-md-12">
				<div class="alert alert-success"><?php echo e(Session::get('errormsg')); ?></div>
		</div>
	<?php endif; ?>


	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Created By</th>
					<th colspan="2" class="text-center">Action</th>
				</tr>
				</thead>

				
				<?php if(!is_null($article)): ?>
					<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					<td><?php echo e($articles->id); ?></td>
					<td><?php echo e($articles->title); ?></td>
					<td><?php echo e($articles->description); ?></td>
					<td><?php echo e($articles->created_at); ?></td>
					<td><a href="<?php echo e(url('list/update/'.$articles->id)); ?>" class="btn btn-primary">Edit</a> | 
						<a href="#" onclick="deleteArticle(<?php echo e($articles->id); ?>);" class="btn btn-primary">DELETE</a></td>
					
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<tr>
						<td colspan="5" ><center>Article not yet.</center></td>
					</tr>
				<?php endif; ?>
				

			</table>
		</div>

		<div class="col-md-2"></div>

	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/list.blade.php ENDPATH**/ ?>