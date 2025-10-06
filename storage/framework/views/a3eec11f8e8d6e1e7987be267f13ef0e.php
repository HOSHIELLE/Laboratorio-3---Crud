<?php $__env->startSection('title','Nuevo producto'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card-elevada">
    <div class="card-encabezado"><h1 class="h5 m-0">Nuevo producto</h1></div>
    <div class="p-3 bg-white">
      <?php echo $__env->make('product.form', [
        'action' => route('products.store'),
        'method' => 'POST',
        'product' => $product
      ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_rapido\resources\views/product/create.blade.php ENDPATH**/ ?>