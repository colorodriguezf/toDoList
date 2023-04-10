<?php
/* Smarty version 3.1.39, created on 2023-04-10 19:29:03
  from 'C:\xampp\htdocs\toDoList\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6434475f5f0410_01064537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4105b96584c9f805b4d245f4ef7ab71dabf786' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\home.tpl',
      1 => 1681147741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/vue/taskList.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_6434475f5f0410_01064537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="list bordeLista">
        <div class="date">
        <div class="dateRight">
            <div id="dataNumero"></div>
            <div>
                <div id="dataMes"></div>
                <div id="dataAño"></div>
            </div>
        </div>
        <div id="dataText"></div>
        </div>
        <div class="contenedor-form">
        <form class="formTareas" method="POST">
        <div class="input-group dentroForm">
        
        <div class="form-floating">
            <input type="text" class="form-control newTask" id="newTask" placeholder="Tarea">
            <label for="floating">Tarea</label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control hs" id="hs" placeholder="Tarea" id="newTask" min="0"max="24">
            <label for="floatingHs">Hs</label>
         </div>
        <input type="text" id="nombre_usuario" value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 hidden>
        <button type="button" class="btn agregarTarea" id="btn-agregarTarea">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32 252c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92H92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg>
        </button>
  </div>
                                </form>
        </div>

        <div id="contenedorTareas">
            <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/taskList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>


<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
