<?php
/* Smarty version 3.1.39, created on 2022-03-17 20:11:49
  from 'C:\xampp\htdocs\toDoList\templates\usoComun\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_623387f54e5b23_75581722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf92443dcf982d983f32bbb7dfbf231facda5660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\usoComun\\nav.tpl',
      1 => 1647544307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623387f54e5b23_75581722 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
   
            <div class="img-default">
                <img class="imgHome" src="img/TO DO LIST.png" />
            </div>
       
            <div> 
                <h2><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</h2>
            </div>
            <div class="cerrarSesion">
                <a href="logout">Cerrar session</a>
            </div>
         
</nav
<?php }
}
