<?php $__env->startSection('content'); ?>

<div class="container w-60 p-4 mt-4">
<form action="<?php echo e(route('contact.index')); ?>" method="post">
    <?php echo csrf_field(); ?>
<?php echo method_field('GET'); ?>
    <div class="col-5  mb-4">
        <div class="card p-4">
            <div class="mb-3 d-flex justify-content-between">
        <input type="text" class="form-control me-3" name="busqueda" id="" value="<?php echo e($text); ?>">

                
                
    <input type="submit" class="btn btn-primary" value="search">

            </div>
        </div>
    </div>
</form>

    <table class="table table-bordered text-center table-hover">
        <thead class="table-primary">
    <th>id</th>
            <th>nombre</th>
    <th>edad</th>
    <th>action</th>
</thead>
<tbody>
    
    <?php if(count($cliente)<=0): ?>
    <tr>
        
        <td>no hay datos encontrados </td>
        
    
    </tr>

    <?php else: ?>

<?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keycliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($keycliente->id); ?></td>
        <td><?php echo e($keycliente->nombre); ?></td>
    <td><?php echo e($keycliente->edad); ?></td>
    <td>
        
        
<form method="POST" action="<?php echo e(route('cliente.delete',$keycliente->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger">d <i class="bi bi-trash">delete</i></button>

</form>
        <a href="<?php echo e(route("cliente.edit",$keycliente->id)); ?>" class="btn btn-warning"> <i class="bi bi-trash">edit</i></a>


    </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</tbody>

    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dising', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xampp\MS-laravel\clases\navar\resources\views/contact.blade.php ENDPATH**/ ?>