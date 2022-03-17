<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:08:53
  from 'C:\xampp\htdocs\TPEweb2\templates\boot\bootDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ec6059ecff4_99237166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc35bf9bf476b90dfbedfe860f27af107984ff11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\boot\\bootDetail.tpl',
      1 => 1637795318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/filtroPuntaje.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_619ec6059ecff4_99237166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="mb-4 tituloDetail"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container-details">
    <?php if (($_smarty_tpl->tpl_vars['boot']->value->imagen)) {?>
        <div>
            <img class="img-details" src="<?php echo $_smarty_tpl->tpl_vars['boot']->value->imagen;?>
" />
        </div>
    <?php } else { ?>
        <div>
            <img class="botinSinFoto" src="img/botines/botinSinFoto.png" />
        </div>
    <?php }?>
    <div class="container-detail">
        <h2 class="container-categoria">Categoria: <?php echo $_smarty_tpl->tpl_vars['boot']->value->categoria;?>
</h2>

        <h2 class="container-talle">Talle: <?php echo $_smarty_tpl->tpl_vars['boot']->value->talle;?>
</h2>

        <h2 class="container-precio">Precio: $<?php echo $_smarty_tpl->tpl_vars['boot']->value->precio;?>
</h2>

        <h2 class="container-descripcion">Descripcion: <?php echo $_smarty_tpl->tpl_vars['boot']->value->descripcion;?>
</h2>

    </div>
</div>



<?php if (($_smarty_tpl->tpl_vars['logueado']->value)) {?>
    <div class="Contenedorcomentarios">
        <form class="form-comentario" method="POST" id="formComentario" data-img=<?php echo $_smarty_tpl->tpl_vars['fotoPerfil']->value;?>
 data-user=<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>

            data-id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 data-fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
>

            <div class="nombreUsuarioYFoto">
                <img class="fotoPerfilComentario" src="<?php echo $_smarty_tpl->tpl_vars['fotoPerfil']->value;?>
" />
                <h3><?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
:</h3>
            </div>
            <div class="estrellas">
                <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5" class="puntaje">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4" class="puntaje">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3" class="puntaje">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2" class="puntaje">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1" class="puntaje">
                    <label for="radio5">★</label>
                </p>
            </div>
                <div>
                    <textarea class="text-area-comentario" rows="4" cols="100" type="text" name="comentario"
                        id="comentario"></textarea>
                </div>
                <div>
                    <button type="button" id="agregarComentario" class="btn btn-outline-success btn-eliminar">comentar</button>
                </div>
                <div>
            </div>

        </form>
    </div>
<?php }?>
<input id="id_botin" data-id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 hidden />
<input id="esAdmin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
" hidden>


<div>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/filtroPuntaje.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<a class="vovler" href="botines/page/1"> Volver </a>
<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
