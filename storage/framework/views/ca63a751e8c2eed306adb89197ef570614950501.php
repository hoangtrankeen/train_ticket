<?php $__env->startSection('title', '| Users'); ?>

<?php $__env->startSection('content'); ?>


<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-10">
                 <h4><i class="fa fa-users"></i> User Administration</h4>
            </div>
            <div class="col-xs-2">
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Create User</a>
            </div>
            
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped ">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->created_at->format('d F, Y')); ?></td>
                    <td><?php echo e($user->roles()->pluck('name')->implode(', ')); ?></td>
                    <td>
                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                        <form class="delete" action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <?php echo e(csrf_field()); ?>

                            <button type="submit" onclick="return confirmDelete()" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form> 
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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