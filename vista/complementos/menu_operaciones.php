<!-- MENU SIDEBAR-->
<div id="sidebar" class="sidebar">
    <br>
    <br>
    <div class="menu-sidebar__content">
    <nav class="navbar-sidebar">
        <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a href="../vista/admin.php">
                        <i class="fas fa-tachometer-alt"></i>Inicio</a>
                </li>
                <li>
                <a href="../controlador/c_empresa_operaciones.php">
                <i class="fas fa-building"></i>Empresas</a>
                </li>
                <li>
                <a href="">
                <i class="fas fa-archive"></i>Pendientes</a>
                </li>
            </ul>
            </li>
            </ul>
    </nav>
    </div>
</div>

<style>
body {
    font-family: "Segoe UI", sans-serif;
    font-size:100%;
}
.sidebar {
    position: fixed;
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
    z-index: 1;
    overflow-x: hidden;
    transition: 0.4s;
    padding: 1rem 0;
    box-sizing:border-box;
}

.sidebar .boton-cerrar {
    position: absolute;
    top: 0.5rem;
    right: 1rem;
    font-size: 2rem;
    display: block;
    padding: 0;
    line-height: 1.5rem;
    margin: 0;
    height: 32px;
    width: 32px;
    text-align: center;
    vertical-align: top;
}

#contenido {
    transition: margin-left .4s;
    padding: 1rem;
}

.menu-sideba {
    width: 300px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
}

.menu-sideba .logo {
    background: #f5f5f5;
    height: 75px;
    padding: 0 35px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    border-right: 1px solid #e5e5e5;
    position: relative;
    z-index: 3;
}

.sidebar .navbar__list .navbar__sub-list {
    display: none;
    padding-left: 34px;
}

.sidebar .navbar__list .navbar__sub-list li a {
    padding: 11.5px 0;
}

.sidebar__content {
    position: relative;
    height: -webkit-calc(100vh - 75px);
    height: -moz-calc(100vh - 75px);
    height: calc(100vh - 75px);
}

</style>
<script>
function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}
</script>

        <!-- END MENU SIDEBAR-->
