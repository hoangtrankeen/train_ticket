<?php $__env->startSection('title', '| Add Role'); ?>

<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-10">
                <h4><i class='fa fa-key'></i>Add Role</h4>
            </div>
            <div class="col-xs-2">
                <a href="<?php echo e(route('roles.index')); ?>" type="button" class="btn btn-default pull-right"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
            </div>
        </div>
    </div>
    <div class='panel-body'>
        

        <?php echo Form::open(array('route' => 'roles.store')); ?>


        <div class="form-group">
            <?php echo e(Form::label('name', 'Name:')); ?>

            <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

        </div>

        <div class='form-group'>
            <label>Assign Permissions:</label><br>
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(Form::checkbox('permissions[]',  $permission->id )); ?>

            <?php echo e(Form::label($permission->name, ucfirst($permission->name))); ?><br>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php echo e(Form::button('<i class="fa fa-check"></i> Save',['type' => 'submit', 'class' => 'btn btn-success'] )); ?>


        <?php echo e(Form::close()); ?>


    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('manage.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>