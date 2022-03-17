<?php
/* Smarty version 3.1.39, created on 2022-03-17 23:52:16
  from 'C:\xampp\htdocs\toDoList\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6233bba0d2be42_92421059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4105b96584c9f805b4d245f4ef7ab71dabf786' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\home.tpl',
      1 => 1647556904,
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
function content_6233bba0d2be42_92421059 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="POST">
            <input type="text" id="newTask" autocomplete="off" placeholder="Nueva tarea" class="bordeLista">
            <input type="text" id="nombre_usuario" value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 hidden>
            <button type="button" class="agregarTarea" id="btn-agregarTarea"> +</button>
            <button type="button" class="ordenarTareas">Ordenar</button>
        </form>

        <div id="contenedorTareas">
          
            </ul>
        </div>
    </div>


<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/usoComun/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
