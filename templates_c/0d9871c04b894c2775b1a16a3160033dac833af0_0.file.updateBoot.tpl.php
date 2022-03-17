<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:16:40
  from 'C:\xampp\htdocs\TPEweb2\templates\form\updateBoot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ec7d84a9181_01293566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9871c04b894c2775b1a16a3160033dac833af0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\form\\updateBoot.tpl',
      1 => 1637791614,
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
function content_619ec7d84a9181_01293566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value) && ($_smarty_tpl->tpl_vars['admin']->value)) {?>

    <h2 class="agregarBotin">MODIFICAR BOTIN:</h2>
    <div class="col-md-4 formAgregarBotin">
        <form class="form-alta" action="insertUpdateBoot" method="POST" enctype="multipart/form-data">
            <div class="formMitad">
                <div class="formPrimeros">
                    <input type="file" name="input_name" id="imageToUpload">
                    <label>Marca:</label> <select name="marca" id="marca" <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
" <?php if ($_smarty_tpl->tpl_vars['boot']->value->id_marca_fk == $_smarty_tpl->tpl_vars['marca']->value->id_marca) {?> selected <?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>
 </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <label>Modelo:</label> <input class="form-control" type="text" name="modelo" id="modelo"
                        value="<?php echo $_smarty_tpl->tpl_vars['boot']->value->modelo;?>
">
                    <label>Categoria:</label><select name="categoria" id="categoria" <select
                        class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">>
                        <option value="Pasto sintetico" <?php if ($_smarty_tpl->tpl_vars['boot']->value->categoria == "Pasto sintetico") {?>selected <?php }?>>Pasto
                            sintetico </option>
                        <option value="Terreno blando" <?php if ($_smarty_tpl->tpl_vars['boot']->value->categoria == "Terreno blando") {?>selected <?php }?>>Terreno blando
                        </option>
                        <option value="Terreno firme" <?php if ($_smarty_tpl->tpl_vars['boot']->value->categoria == "Terreno firme") {?>selected <?php }?>>Terreno firme
                        </option>
                        <option value="Futsal" <?php if ($_smarty_tpl->tpl_vars['boot']->value->categoria == "Futsal") {?>selected <?php }?>>Futsal </option>
                    </select>
                </div>
                <div class="formSegundos">
                    <label>Talle:</label> <select name="talle" id="talle" <select class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">>
                        <option value="37" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 37) {?>selected <?php }?>>37 </option>
                        <option value="37.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 37.5) {?>selected <?php }?>>37.5 </option>
                        <option value="38" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 38) {?>selected <?php }?>>38 </option>
                        <option value="38.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 38.5) {?>selected <?php }?>>38.5 </option>
                        <option value="39" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 39) {?>selected <?php }?>>39 </option>
                        <option value="39.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 39.5) {?>selected <?php }?>>39.5 </option>
                        <option value="40" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 40) {?>selected <?php }?>>40 </option>
                        <option value="40.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 40.5) {?>selected <?php }?>>40.5 </option>
                        <option value="41" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 41) {?>selected <?php }?>>41 </option>
                        <option value="41.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 41.5) {?>selected <?php }?>>41.5 </option>
                        <option value="42" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 42) {?>selected <?php }?>>42 </option>
                        <option value="42.5" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 42.5) {?>selected <?php }?>>42.5 </option>
                        <option value="43" <?php if ($_smarty_tpl->tpl_vars['boot']->value->talle == 43) {?>selected <?php }?>>43 </option>
                    </select>
                    <label>Descripcion:</label><textarea class="form-control" rows="2" cols="50" type="text"
                        name="descripcion" id="descripcion"> <?php echo $_smarty_tpl->tpl_vars['boot']->value->descripcion;?>
 </textarea>
                    <label class="input-group mb-3">Precio:</label> <input class="form-control" placeholder="$"
                        type="number" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['boot']->value->precio;?>
" required>
                    <input type="submit" class="btn btn-primary btn-form" value="Guardar">
                    <input type="text" name="id_botin" value="<?php echo $_smarty_tpl->tpl_vars['id_botin']->value;?>
" hidden>
                </div>
            </div>
        </form>

    </div>
<?php } else { ?>
    <h1 class="errorPermiso"> NO TENES PERMISO PARA ACCEDER A ESTA SECCIÓN!</h1>
    <img src="img/error.jpg" class="img-error">
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
