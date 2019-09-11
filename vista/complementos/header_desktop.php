<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
            <div class="header-button menu-sideba">
                <div class="logo">
                    <a href="#" onclick="mostrar()">
                    <img src="../images/icon/logo-t.png" alt="Cool Admin" />
                    </a>
                </div>
            </div>
            <form class="form-header" action="" method="POST">
            </form>
            <?php include 'menu.php';?>

            <div class="header-button">
                <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="../images/icon/avatar-01.png" alt="" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" ><?php echo $_SESSION["usuario"]["nombre"]; ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="../images/icon/avatar-01.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href=""><?php echo $_SESSION["usuario"]["nombre"]; ?></a>
                                            </h5>
                                            <span class="email"><?php echo $_SESSION["usuario"]["email"]; ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="../vista/cerrar-sesion.php">
                                            <i class="zmdi zmdi-power"></i>Cerrar sesión</a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>