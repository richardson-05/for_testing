<header>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 0) { echo("active"); } ?>" href="index.php">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 1) { echo("active"); } ?>" href="index.php?action=products-view">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 2) { echo("active"); } ?>" href="index.php?action=users-view">Usuarios</a>
    </li>
  </ul>
</header>