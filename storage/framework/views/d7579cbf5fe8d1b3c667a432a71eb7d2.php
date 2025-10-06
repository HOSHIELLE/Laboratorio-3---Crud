<?php $__env->startSection('title','Editar producto'); ?>
<?php $__env->startSection('content'); ?>
  <div class="card-elevada">
    <div class="card-encabezado"><h1 class="h5 m-0">Editar producto</h1></div>
    <div class="p-3 bg-white">
      <?php echo $__env->make('product.form', [
        'action' => route('products.update', $product->id),
        'method' => 'PUT',
        'product' => $product
      ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_rapido\resources\views/product/edit.blade.php ENDPATH**/ ?>