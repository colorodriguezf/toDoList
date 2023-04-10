<?php
/* Smarty version 3.1.39, created on 2023-04-10 17:29:06
  from 'C:\xampp\htdocs\toDoList\templates\usoComun\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64342b42e27517_74153439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf92443dcf982d983f32bbb7dfbf231facda5660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\usoComun\\nav.tpl',
      1 => 1681140545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64342b42e27517_74153439 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <div class="d-flex">
        <a class="navbar-brand">ToDoList</a>    
    </div>
    <div> 
        <h2 id="nombreUsuario" data-value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 >¡Hola <span class="nombreUsuario"><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</span> 🖐!</h2>
    </div>

    <div class="cerrarSesion">
    <a href="logout">Cerrar sesión</a>
    </div>
  </div>
</nav><?php }
}
