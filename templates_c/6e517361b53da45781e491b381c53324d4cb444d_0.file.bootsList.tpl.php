<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:24:58
  from 'C:\xampp\htdocs\TPEweb2\templates\boot\bootsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebbbab22e63_57080347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e517361b53da45781e491b381c53324d4cb444d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\boot\\bootsList.tpl',
      1 => 1637791602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/filter.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_619ebbbab22e63_57080347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tituloYfiltro">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boots']->value, 'boot');
$_smarty_tpl->tpl_vars['boot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['boot']->value) {
$_smarty_tpl->tpl_vars['boot']->do_else = false;
?>
        <a href="botin/<?php echo $_smarty_tpl->tpl_vars['boot']->value->id_botin;?>
" class="hrefBotines">
            <div class="col-md-8 contenedorDetalles">
                <div class="marca">
                    <?php echo $_smarty_tpl->tpl_vars['boot']->value->nombre;?>

                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['boot']->value->imagen == NULL) {?>
                        <img class="errorBotines" src="img/botines/botinSinFoto.png" />
                    <?php } else { ?>
                        <img class="tamañoImagenBootList" src="<?php echo $_smarty_tpl->tpl_vars['boot']->value->imagen;?>
" />
                    <?php }?>
                </div>
                <div class="modelo">
                    <?php echo $_smarty_tpl->tpl_vars['boot']->value->modelo;?>

                </div>
                <div class="talle">
                    <p>Talle: <?php echo $_smarty_tpl->tpl_vars['boot']->value->talle;?>
 </p>
                </div>
                <div class="precio">
                    <p class="fas fa-dollar-sign"></p> <?php echo $_smarty_tpl->tpl_vars['boot']->value->precio;?>

                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['admin']->value)) {?>
                    <div class="botonesByE">
                        <a class="btn btn-primary btn-sm borrar" href="deleteBoot/<?php echo $_smarty_tpl->tpl_vars['boot']->value->id_botin;?>
">Borrar</a>
                        <a class="btn btn-secondary btn-sm editar" href="showForm/<?php echo $_smarty_tpl->tpl_vars['boot']->value->id_botin;?>
">Editar</a>
                    </div>
                <?php }?>
            </div>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="paginado">
    <?php if ($_smarty_tpl->tpl_vars['pageNumber']->value > 1) {?>
        <a class="btn btn-primary btn-sm" href="botines/page/<?php echo $_smarty_tpl->tpl_vars['pageNumber']->value-1;?>
">↢</a>
    <?php }?>
    <button type="button" class="btn btn-light" disabled> <?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
</button>
    <?php if ($_smarty_tpl->tpl_vars['pageNumber']->value < $_smarty_tpl->tpl_vars['maxPageNumber']->value) {?>
        <a class="btn btn-primary btn-sm" type="button" href="botines/page/<?php echo $_smarty_tpl->tpl_vars['pageNumber']->value+1;?>
">↣</a>
    <?php }?>
</div>






<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
