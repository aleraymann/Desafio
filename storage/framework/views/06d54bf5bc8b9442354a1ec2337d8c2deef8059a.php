<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/Views/users.blade.php */ ?>

<?php $__env->startSection('content'); ?>

<div class="card-body"id="app">
    <h5 class="card-title">Registered Users</h5>
    <?php echo $__env->make('components.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="table table-bordered table-hover" id="tableUsers">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Address</th>
                <th>Number</th>
                <th>Complement</th>
                <th>District</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i->id); ?></td>
                <td><?php echo e($i->name); ?></td>
                <td><?php echo e($i->email); ?></td>
                <td><?php echo e($i->city); ?></td>
                <td><?php echo e($i->state); ?></td>
                <td><?php echo e($i->postalcode); ?></td>
                <td><?php echo e($i->address); ?></td>
                <td><?php echo e($i->number); ?></td>
                <td><?php echo e($i->complement); ?></td>
                <td><?php echo e($i->district); ?></td>
                <td>
                    <a href='/user/delete/<?php echo e($i->id); ?>' onclick="return confirm('Confirma Exclusão do Registro?')"><img src="/img/delete.png"></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>