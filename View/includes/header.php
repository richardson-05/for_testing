<header>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 0) { echo("active"); } ?>" href="<?php echo constant("root_url") ?>">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 1) { echo("active"); } ?>" href="?action=products-view">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($acive == 2) { echo("active"); } ?>" href="?action=users-view">Usuarios</a>
    </li>
  </ul>
</header>