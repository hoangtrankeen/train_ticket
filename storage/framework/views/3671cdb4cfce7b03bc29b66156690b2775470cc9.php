<?php $__env->startSection('title', '| Create Permission'); ?>

<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-10">
                <h4><i class='fa fa-key'></i>Add Permission</h4>
            </div>
            <div class="col-xs-2">
                <a href="<?php echo e(route('permissions.index')); ?>" type="button" class="btn btn-default pull-right"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
            </div>
        </div>
    </div>
    <div class='panel-body'>
        <?php echo Form::open(array('route' => 'permissions.store')); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Name:')); ?>

            <?php echo e(Form::text('name', '', array('class' => 'form-control'))); ?>

        </div>
        <?php if(!$roles->isEmpty()): ?> 
        <label>Assign Permission to Roles:</label><br>

        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php echo e(Form::checkbox('roles[]',  $role->id )); ?>

        <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <br>
         <?php echo e(Form::button('<i class="fa fa-check"></i> Save',['type' => 'submit', 'class' => 'btn btn-success'] )); ?>


        <?php echo e(Form::close()); ?>


    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('manage.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>