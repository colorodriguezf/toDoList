<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:19:29
  from 'C:\xampp\htdocs\TPEweb2\templates\form\createBoot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ec881cdf104_30842116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a3652f7627f43af368e0c2dd260c64fa089e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\form\\createBoot.tpl',
      1 => 1637791607,
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
function content_619ec881cdf104_30842116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (($_smarty_tpl->tpl_vars['logueado']->value) && ($_smarty_tpl->tpl_vars['admin']->value)) {?>
    <h2 class="agregarBotin">AGREGAR BOTIN:</h2>
    <div class="col-md-4 formAgregarBotin">
        <form class="form-alta" action="insertBoot" method="POST" enctype="multipart/form-data">
            <div class="formMitad">
                <div class="formPrimeros">
                    <input type="file" name="input_name" id="imageToUpload" required>
                    <label>Marca:</label> <select name="marca" id="marca" <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">>
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
                    <label>Modelo:</label> <input class="form-control" type="text" name="modelo" id="modelo">
                    <label>Categoria:</label><select name="categoria" id="categoria" <select
                        class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">>
                        <option value="Pasto sintetico">Pasto sintetico </option>
                        <option value="Terreno blando">Terreno blando</option>
                        <option value="Terreno firme">Terreno firme</option>
                        <option value="Futsal">Futsal </option>
                    </select>
                </div>
                <div class="formSegundos">
                    <label>Talle:</label> <select name="talle" id="talle" <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">>
                        <option value="37">37 </option>
                        <option value="37.5">37.5 </option>
                        <option value="38">38 </option>
                        <option value="38.5">38.5 </option>
                        <option value="39">39 </option>
                        <option value="39.5">39.5 </option>
                        <option value="40">40 </option>
                        <option value="40.5">40.5 </option>
                        <option value="41">41 </option>
                        <option value="41.5">41.5 </option>
                        <option value="42">42 </option>
                        <option value="42.5">42.5 </option>
                        <option value="43">43 </option>
                    </select>
                    <label>Descripcion:</label><textarea class="form-control" rows="2" cols="50" type="text"
                        name="descripcion" id="descripcion"></textarea>
                    <label class="input-group mb-3">Precio:</label> <input class="form-control" placeholder="$"
                        type="number" name="precio" id="precio" required>
                    <input type="submit" class="btn btn-primary btn-form" value="Guardar">
                </div>
            </div>
        </form>
    </div>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
