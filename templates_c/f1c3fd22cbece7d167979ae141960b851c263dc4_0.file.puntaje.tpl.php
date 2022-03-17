<?php
/* Smarty version 3.1.39, created on 2021-11-21 01:26:18
  from 'C:\xampp\htdocs\TPEweb2\templates\puntaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6199922a008296_46467740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c3fd22cbece7d167979ae141960b851c263dc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\puntaje.tpl',
      1 => 1637454375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_6199922a008296_46467740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-details">


        <?php if (($_smarty_tpl->tpl_vars['boot']->value->imagen)) {?>
                    <div>
                        <img class="img-details" src="<?php echo $_smarty_tpl->tpl_vars['boot']->value->imagen;?>
"/>
                    </div>
                <?php } else { ?>
                    <div>
                        <img class="botinSinFoto" src="img/botines/botinSinFoto.png"/>
                    </div>
                <?php }?>
             <div class="container-detail">
                <h2 class="container-categoria">Categoria: <?php echo $_smarty_tpl->tpl_vars['boot']->value->categoria;?>
</h2>
            <hr>
                <h2 class="container-talle">Talle: <?php echo $_smarty_tpl->tpl_vars['boot']->value->talle;?>
</h2>
            <hr>              
                <h2 class="container-precio">Precio: $<?php echo $_smarty_tpl->tpl_vars['boot']->value->precio;?>
</h2>
            <hr>        
                <h2 class="container-descripcion">Descripcion: <?php echo $_smarty_tpl->tpl_vars['boot']->value->descripcion;?>
</h2>
            <hr>
            </div>

</div>
 

    
                        <input id="id_botin" data-id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 hidden/>
                         <button type="button" id="agregarComentario" class="btn btn-outline-success btn-eliminar" hidden>comentar</button>
                         <input id="esAdmin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
" hidden> 
 *}
<div>
        <h1>Comentarios</h1>
                                                    <div class="promedioPuntaje">
                                                                <h1>Promedio puntaje</h1>
                                                                    <h2>⭐</h2>
                                                                                                                                
                                                        </div>
    <ul id="lista-comentarios" class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['puntajes']->value, 'puntaje');
$_smarty_tpl->tpl_vars['puntaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['puntaje']->value) {
$_smarty_tpl->tpl_vars['puntaje']->do_else = false;
?>
            <li class="list-group-item">
        <div class="contenedorComentarios">
                <div class="fotoUsuario">
                    <img class="fotoPerfilComentarios" src="<?php echo $_smarty_tpl->tpl_vars['puntaje']->value->fotoPerfil;?>
"/> 
                </div>
                <div class="usuarioUsuario">
                        <div class="nombreUsuarioComentario">
                        <?php echo $_smarty_tpl->tpl_vars['puntaje']->value->usuario;?>
 
                        </div>
                        <div class="puntajeComentario">
                            Calificacion:<?php echo $_smarty_tpl->tpl_vars['puntaje']->value->puntaje;?>
 
                        </div>
                        <div>
                            <p><?php echo $_smarty_tpl->tpl_vars['puntaje']->value->comentario;?>
</p>
                        </div>
                </div>
        </div>
                            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>

        <a class="vovler" href="botines"> Volver </a>
<?php echo '<script'; ?>
 src="js/app.js">
<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
