<?php
/* Smarty version 3.1.39, created on 2023-04-10 20:32:13
  from 'C:\xampp\htdocs\toDoList\templates\vue\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6434562d20c729_97295325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f124175961fad24c9893033b280e9e18b9ea6eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\toDoList\\templates\\vue\\taskList.tpl',
      1 => 1681151531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6434562d20c729_97295325 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
    <ul id="lista-tareas" class="list-group">
    <li v-for="tarea in tareas"  class="tarea" :id=tarea.id :data-realizada=tarea.realizada :value=tarea.tarea :data-hs=tarea.hs>
    <div class="contenedorListaTareas">
    <div class="hsLista">{{tarea.hs}}hs </div>
        <div class="e"> 
                <div  class="tarea"> {{tarea.tarea}}</div> {{ /*   v-on:click="realizada(tarea.id)" */ }}

            
               <div class="contenedorBoton">
                <button v-on:click="deleteComment(tarea.id)" class="fas fa-trash-alt eliminarTarea"></button>
                </div>
        </div>
        </div>
                </li>
        </ul>
    </div>

        
<?php }
}
