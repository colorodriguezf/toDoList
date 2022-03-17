<?php
/* Smarty version 3.1.39, created on 2022-01-11 16:54:59
  from 'C:\xampp\htdocs\Instagram\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61dda8530a6f59_09105207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36fde08d80286628367af1097c56b3f4613947e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Instagram\\templates\\vue\\comments.tpl',
      1 => 1641916497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dda8530a6f59_09105207 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
    <div id="app">
    <div class="contenedorComentarios">
    <ul class="listaComentarios">
        <li v-for="comentario in comentarios">
                <div class="comentario">
                    <div>
                        <a :href="comentario.user">
                            <h2 class="h2Comentario"> {{comentario.user}} </h2>
                        </a>
                    </div>
                    <div class="pComentario">
                        <p>{{comentario.comment}}</p>
                    </div>
                </div>

                </li>
        </ul>
    </div>
</div>



<?php }
}
