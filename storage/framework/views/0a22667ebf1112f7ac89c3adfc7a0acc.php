<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $__env->yieldContent('title','CRUD'); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<style>
  :root{
    --azul-1:#0d6efd;      /* primario */
    --azul-2:#3b82f6;      /* degradado */
    --azul-3:#e7f1ff;      /* fondo suave */
  }
  /* Forzar primario Bootstrap a nuestro azul */
  .btn-primary, .page-link, .link-primary{ background-color:var(--azul-1)!important; border-color:var(--azul-1)!important; }
  .btn-primary:hover{ filter:brightness(0.95); }
  a{ color:var(--azul-1); }
  a:hover{ color:#0b5ed7; }

  /* Tarjeta principal */
  .card-elevada{
    border:0; border-radius:1rem;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    overflow:hidden;
  }

  /* Encabezado con degradado */
  .card-encabezado{
    background:linear-gradient(135deg, var(--azul-1), var(--azul-2));
    color:#fff; padding:1rem 1.25rem;
  }

  /* Tabla */
  .table thead th{
    background:linear-gradient(135deg, var(--azul-1), var(--azul-2));
    color:#fff; border:0;
  }
  .table tbody tr:hover{ background-color:var(--azul-3); }

  /* Contenedor */
  body{ background:#f8fbff; }
</style>

<body class="p-3">
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\crud_rapido\resources\views/layouts/app.blade.php ENDPATH**/ ?>