<?php $__env->startSection('content'); ?>
hola mundo
<div class="container w-25 border p-4 mt-4">
<form method="POST"  action="<?php echo e(route("cliente.store")); ?>" >
<?php echo csrf_field(); ?>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">edad</label>
    <input type="text" class="form-control" name="edad" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dising', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xampp\MS-laravel\clases\navar\resources\views/cliente/create.blade.php ENDPATH**/ ?>