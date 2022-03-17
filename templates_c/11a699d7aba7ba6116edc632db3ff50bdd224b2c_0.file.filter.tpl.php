<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:24:58
  from 'C:\xampp\htdocs\TPEweb2\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebbbad871f7_41448917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a699d7aba7ba6116edc632db3ff50bdd224b2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\filter.tpl',
      1 => 1637791640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ebbbad871f7_41448917 (Smarty_Internal_Template $_smarty_tpl) {
?>   <form class="form-alta" action="filtrar" method="POST">
       <label>Filtrar</label>
       <div class="contenedorFiltro">
           <button type="submit" class="fas fa-search btn-filtroB" name="filtrar" id="filtrar"></button>
           <select name="marca" id="marca" class="form-select form-select-lg mb-3 selectFiltro"
               aria-label=".form-select-lg example">

               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                   <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
 </option>
               <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

           </select>
   </form>
</div><?php }
}
