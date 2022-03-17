<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:54:03
  from 'C:\xampp\htdocs\TPEweb2\templates\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619edeabba71a2_20094955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9335c2c5b799fcc9c5b48b6a7e7e32eea88288fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\marcas.tpl',
      1 => 1637791669,
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
function content_619edeabba71a2_20094955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['logueado']->value)) {?>
    <div class="contenedorFormNewMark">
        <form class="form-alta" action="insertMark" method="POST">
            <label>Nueva marca:</label>
            <input type="text" name="newMark" class="nuevaMarca">
            <input type="submit" name="nuevaMarca" class="btn-nuevaMarca">
        </form>
    </div>
    <div class="containerForecahMarcas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <div class="contenedorMarcasYbtn">
                <div>
                    <h2 class="allMarks"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
</h2>
                </div>
                <div class="botonesByE2">
                    <a class="btn btn-primary btn-sm borrar2" href="deleteMark/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Borrar</a>
                    <a class="btn btn-secondary btn-sm editar2" href="showFormMark/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
">Editar</a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>














<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
