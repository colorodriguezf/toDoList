<?php
/* Smarty version 3.1.39, created on 2022-03-21 17:14:47
  from 'C:\xampp\htdocs\toDoList\templates\vue\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6238a4775f9668_91902462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f124175961fad24c9893033b280e9e18b9ea6eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\vue\\taskList.tpl',
      1 => 1647879122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6238a4775f9668_91902462 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <ul id="lista-tareas" class="list-group">
        <li v-for="tarea in tareas" class="tarea" :id=tarea.id :data-realizada=tarea.realizada :value=tarea.tarea v-on:click="realizada(tarea.id)">
                {{tarea.tarea}}
            <button v-on:click="deleteComment(tarea.id)" class="fas fa-trash-alt eliminarTarea"></button>
            </li>
        </ul>
    </div>

        
<?php }
}
