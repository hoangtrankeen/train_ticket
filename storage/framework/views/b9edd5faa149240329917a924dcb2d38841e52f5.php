<?php $__env->startSection('title', '| Roles'); ?>

<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-sm-10">
                 <h4><i class="fa fa-key"></i> Roles</h4>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add Role</a>
            </div>
        </div>
    </div>
    <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Operation</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($role->name); ?></td>

                            <td><?php echo e($role->permissions()->pluck('name')->implode(' ')); ?></td>
                            <td>
                                 <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                <form class="delete" action="<?php echo e(route('roles.destroy', $role->id)); ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" onclick="return confirmDelete()" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form> 
                                <?php echo Form::close(); ?>


                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  
<script>
    
    function confirmDelete()
    {
        return confirm("Do you want to delete this menu?");
    }
    
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manage.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>