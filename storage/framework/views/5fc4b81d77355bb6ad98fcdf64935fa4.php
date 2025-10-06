<?php $__env->startSection('title','Productos'); ?>

<?php $__env->startSection('content'); ?>
  <div class="card-elevada mb-4">
    <div class="card-encabezado d-flex justify-content-between align-items-center">
      <h1 class="h4 m-0">Productos</h1>
      <a href="<?php echo e(route('products.create')); ?>" class="btn btn-light">Nuevo</a>
    </div>

    <div class="p-3 bg-white">
      <?php if($products->count()): ?>
        <table class="table table-hover table-bordered align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Descripción</th>
              <th class="text-end">Precio</th>
              <th class="text-end">Stock</th>
              <th style="width: 220px;">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(($i ?? 0) + $loop->iteration); ?></td>
                <td><?php echo e($p->description); ?></td>
                <td class="text-end"><?php echo e(number_format($p->price, 2)); ?></td>
                <td class="text-end"><?php echo e($p->stock); ?></td>
                <td>
                  <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(route('products.show', $p->id)); ?>">Ver</a>
                  <a class="btn btn-sm btn-warning" href="<?php echo e(route('products.edit', $p->id)); ?>">Editar</a>
                  <form action="<?php echo e(route('products.destroy', $p->id)); ?>" method="POST" class="d-inline"
                        onsubmit="return confirm('¿Eliminar este producto?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

        <?php echo e($products->links()); ?>

      <?php else: ?>
        <div class="alert alert-info mb-0">No hay productos aún.</div>
      <?php endif; ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_rapido\resources\views/product/index.blade.php ENDPATH**/ ?>