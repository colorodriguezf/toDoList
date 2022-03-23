<?php
/* Smarty version 3.1.39, created on 2022-03-22 15:34:45
  from 'C:\xampp\htdocs\toDoList\templates\usoComun\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6239de85d551a3_98396079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf92443dcf982d983f32bbb7dfbf231facda5660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\usoComun\\nav.tpl',
      1 => 1647959655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6239de85d551a3_98396079 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
   
            <div class="img-default">
                <img class="imgHome" src="img/TO DO LIST.png" />
            </div>
       
            <div> 
                <h2 id="nombreUsuario" data-value=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 >¡Hola <span class="nombreUsuario"><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</span> 🖐!</h2>
            </div>
            <div class="cerrarSesion">
                <a href="logout">Cerrar sesión</a>
            </div>
         
</nav
<?php }
}
