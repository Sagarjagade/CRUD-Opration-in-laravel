<?php $__env->startSection('content'); ?>
<br><br>
	<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<center style="font-size:30px;"><b><i>Update Employee Details</i></b></center>
			</div>

			<div class="col-md-1">
				<a href="<?php echo e(route('createlist')); ?>" class="btn btn-primary">Back</a>
			</div>
		
	</div>



	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="<?php echo e(url('createlist/update'.$list->id)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label style="color: green"><b>First Name </b>: </label>
					<input type="text" class="form-control <?php echo e(($errors->any && $errors->first('firstname') ? 'is-invalid' : '' )); ?>" value="<?php echo e(old('firstname',$list->firstname)); ?>" name="firstname">

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('firstname')); ?></span>
					<?php endif; ?>
				</div>

				<div class="form-group">
					<label style="color: green"><b>Last Name </b>: </label>
					<input type="text" class="form-control <?php echo e(($errors->any && $errors->first('lastname') ? 'is-invalid' : '' )); ?>" value="<?php echo e(old('lastname',$list->lastname)); ?>" name="lastname">

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('lastname')); ?></span>
					<?php endif; ?>

				</div>

				<div class="form-group">
					<label style="color: green"><b>Mobile Number </b>: </label>
					<input type="text" class="form-control <?php echo e(($errors->any && $errors->first('mobilenumber') ? 'is-invalid' : '' )); ?>" value="<?php echo e(old('mobilenumber',$list->mobilenumber)); ?>" name="mobilenumber">

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('mobilenumber')); ?></span>
					<?php endif; ?>
				</div>

				<div class="form-group">
					<label style="color: green"><b>Gender </b>: </label><br>
					<label>Male : </label>  <input type="radio"  value="Male" name="gender"><br>
					<label>Female : </label>  <input type="radio"  value="Female" name="gender">

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('gender')); ?></span>
					<?php endif; ?>
				</div>

				<div class="form-group">
					<label style="color: green"><b>Destination </b>: </label>
					<select name="destination" class="form-control <?php echo e(($errors->any && $errors->first('destination') && 'Select' ? 'is-invalid' : '' )); ?>" >
						<option>Select</option>
						<option name="IT">Information Technology</option>
						<option name="Bussiness">Bussiness</option>
						<option name="Marketing">Marketing</option>
					</select>

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('destination')); ?></span>
					<?php endif; ?>
					
				</div>

				<div class="form-group">
					<label style="color: green"><b>Describe </b>: </label>
					<textarea class="form-control <?php echo e(($errors->any && $errors->first('description') ? 'is-invalid' : '' )); ?>" value="" name="description"><?php echo e(old('description',$list->description)); ?></textarea>

					<?php if($errors->any()): ?>
						<span style="color:red"><?php echo e($errors->first('description')); ?></span>
					<?php endif; ?>
				</div>

				
					<button type="submit" name="submit" class="form-control btn btn-primary">Save </button>
				
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('CRUD.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Prashant Jagade\Desktop\Laravel\Project\blog\resources\views/CRUD/edit.blade.php ENDPATH**/ ?>