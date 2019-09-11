<!--HEADER MOBILE-->
<div class="header-mobile__bar">
    <div class="container-fluid">
        <div class="header-mobile-inner">
            <a class="logo" href="#">
                <img src="../images/icon/logo-t.png" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</div>
<!--Navegación mobile-->
<nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="../vista/index.php">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Cartas Fianzas
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../controlador/c_cf_pendiente.php">
                                        <i class="fas fa-clipboard"></i>Pendientes</a>
                                </li>
                                <li>
                                    <a href="../controlador/c_cf_archivada.php">
                                        <i class="fas fa-file-text"></i>Archivadas</a>
                                </li>
                            </ul>
                        </li>
                        <!--<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-unlock-alt"></i>Seguros
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../controlador/c_ss_pendiente.php">
                                        <i class="fas fa-clipboard"></i>Pendientes</a>
                                </li>
                                <li>
                                    <a href="../controlador/c_ss_archivada.php">
                                        <i class="fas fa-archive"></i>Archivadas</a>
                                </li>
                            </ul>
                        </li>-->
                        <li class="has-sub">
                            <a class="js-arrow" href="../controlador/c_renovacion.php">
                                <i class="fas fa-refresh"></i>Renovaciones
                            </a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table""></i>Tablas
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                 <li>
                                    <a href="../controlador/c_empresa.php">
                                        <i class="fa fa-user"></i>Clientes</a>
                                </li>
                                <li>
                                    <a href="../controlador/c_sede.php">
                                        <i class="fa fa-building"></i>Sedes</a>
                                </li>
                                <li>
                                    <a href="../controlador/c_empleado.php">
                                        <i class="fas fa-briefcase"></i>Empleados</a>
                                </li>
                                <li>
                                    <a href="../controlador/c_entidad.php">
                                        <i class="fa fa-folder-open"></i>Entidades</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
</nav>