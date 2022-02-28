<?php $__env->startSection('content'); ?>

hola mundo
<div class="container w-25 border p-4 mt-4">
<form method="POST"  action="<?php echo e(route("cliente.update", $cliente->id)); ?>" >
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <h5 class="text-center">edit contact <?php echo e($cliente->id); ?></h5>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="<?php echo e($cliente->nombre); ?>">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">edad</label>
    <input type="text" class="form-control" name="edad" id="exampleInputPassword1" value="<?php echo e($cliente->edad); ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dising', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xampp\MS-laravel\clases\navar\resources\views/edit.blade.php ENDPATH**/ ?>