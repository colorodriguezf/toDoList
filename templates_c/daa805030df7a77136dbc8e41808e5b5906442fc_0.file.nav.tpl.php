<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:24:58
  from 'C:\xampp\htdocs\TPEweb2\templates\usoComun\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebbbacf0d45_35516789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa805030df7a77136dbc8e41808e5b5906442fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\usoComun\\nav.tpl',
      1 => 1637791632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ebbbacf0d45_35516789 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="arribaNav">
    <h1><img src="https://adl-foundation.adidas.com/flags/1-0-0/ar.svg" alt="ar flag" title="ar flag"
            aria-label="ar flag" class="argentina">
        AR$ <span>|</span> <a href="botines/page/1" class="futbolNav"> Futbol</a>
    </h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['logueado']->value)) {?>
        <div class="perfilYcerrar">
            <div class="usuario-logOut">
                <?php if ($_smarty_tpl->tpl_vars['fotoPerfil']->value) {?>
                    <img class="fotoPerfilNav" src="<?php echo $_smarty_tpl->tpl_vars['fotoPerfil']->value;?>
 " /> <a class="nav-link login"><?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
</a>
                <?php } else { ?>
                    <img class="fotoPerfilNav" src="img/fotosPerfil/sinFotoPerfil.jpg" /> <a
                        class="nav-link login"><?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
</a>
                <?php }?>
            </div>
            <div class="usuario-logOut">
                <a href="logOut" class="nav-link logOut"> Cerrar sesión</a>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="inicioYregistro">
        <div>
            <a href="login" class="nav-link login"> Iniciar sesión </a>
        </div>
        <div>
            <a href="register" class="nav-link register"> Registrarme </a>
        </div>
    </div>

    </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['logueado']->value) && ($_smarty_tpl->tpl_vars['admin']->value)) {?>
    <div class="contenedor">
        <div class="logo">
            <header>
                <h1><a class="aLogo" href="home">BOOTS</a></h1>
            </header>
        </div>
        <div>
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="home" class="nav-link"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a href="botines/page/1" class="nav-link"> Botines </a>
                    </li>
                    <li class="nav-item">
                        <a href="createBoot" class="nav-link"> Agregar botin </a>
                    </li>
                    <li class="nav-item">
                        <a href="marcas" class="nav-link"> Marcas </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> Usuarios </a>
                        <ul>
                            <li> <a href="administradores" class="nav-link"> Administradores </a></li>
                            <li> <a href="noadministradores" class="nav-link"> No administradores </a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        <?php } else { ?>
            <div class="contenedor">
                <div class="logo">
                    <header>
                        <h1><a class="aLogo" href="home">BOOTS</a></h1>
                    </header>
                </div>
                <div>
                    <nav>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="home" class="nav-link"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a href="botines/page/1" class="nav-link"> Botines </a>
                            </li>
                        </ul>
                    </nav>
                <?php }?>
            </div>
</div><?php }
}
