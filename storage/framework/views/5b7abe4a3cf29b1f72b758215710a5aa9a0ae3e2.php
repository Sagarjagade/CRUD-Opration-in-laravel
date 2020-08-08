<?php $__env->startSection('content'); ?>
<br><Br>
<div class="row">
	<div class="col-md-11">
		<?php $mess = Session::get('fullname'); ?>
		<span style="font-size: 15px;"><b><i><?php echo e($mess); ?></i></b></span>
	</div>
	<div class="col-md-1">
		<a href="<?php echo e(route('login')); ?>"> <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> </a>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-7">
		<center style="color: Red;font-size: 25px;"><b>Employee Details</b></center>
	</div>
	<div class="col-md-3">
		<a href="<?php echo e(route('createlist.list')); ?>" class="btn btn-primary">Create Employee Details</a>
	</div>
</div>
<br>
	<?php if(Session::has('msg')): ?>
		<div class="row">
			<div class="col-md-1"></div>
		<div class="col-md-8">
			<div class="alert alert-primary"><span><?php echo e(Session::get('msg')); ?></span></div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<?php endif; ?>

	<?php if(Session::has('errormsg')): ?>
		<div class="row">
			<div class="col-md-1"></div>
		<div class="col-md-8">
			<div class="alert alert-primary"><span><?php echo e(Session::get('errormsg')); ?></span></div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<?php endif; ?>
<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead class="table-dark">
					<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Moblie number</th>
						<th>Gender</th>
						<th>destination</th>
						<th>description</th>
						<th colspan="2"><center>Action</center></th>
					</tr>
				</thead>
				

					<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lists): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
							<tr>

								<td><?php echo e($lists->id); ?></td>
								<td><?php echo e($lists->firstname); ?></td>
								<td><?php echo e($lists->lastname); ?></td>
								<td><?php echo e($lists->mobilenumber); ?></td>
								<td><?php echo e($lists->Gender); ?></td>
								<td><?php echo e($lists->destination); ?></td>
								<td><?php echo e($lists->description); ?></td>
								<td><a href="<?php echo e(url('createlist/update/'.$lists->id)); ?>" class="btn btn-primary">EDIT</a> </td>
								<td><a href="#" onclick="deleteRecord(<?php echo e($lists->id); ?>)"class="btn btn-danger">DELETE</a></td>
							</tr>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</table>
		</div>
		<div class="col-md-1">
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('CRUD.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/CRUD/listdata.blade.php ENDPATH**/ ?>