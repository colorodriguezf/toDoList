<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:57:17
  from 'C:\xampp\htdocs\TPEweb2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ed15de15489_44462153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa1c12acb2bd650a6dc7c954e970a60c3cc0802' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\vue\\comentarios.tpl',
      1 => 1637798176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ed15de15489_44462153 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <h1>{{titulo}}</h1>
        <div class="promedioPuntaje">
            <p>{{promedioPuntaje}}</p>
            <h2>⭐</h2>

        </div>
        <div>
            <p class="error">{{error}}</p>
        </div>

        <ul id="lista-comentarios" class="list-group">
            <li v-for="comentario in comentarios" class="list-group-item">
                <h4 class="fecha">{{comentario.fecha}}</h4>
                <div class="contenedorComentarios">
                    <div class="fotoUsuario">
                        <img class="fotoPerfilComentarios" :src="comentario.fotoPerfil" />
                    </div>
                    <div class="usuarioUsuario">
                        <div class="puntajeComentario" v-if="comentario.puntaje ==1">
                            <p class="usuarioPuntajeEstrellas">★✩✩✩✩</p>
                        </div>
                        <div class="puntajeComentario" v-if="comentario.puntaje ==2">
                            <p class="usuarioPuntajeEstrellas">★★✩✩✩</p>
                        </div>
                        <div class="puntajeComentario" v-if="comentario.puntaje ==3">
                            <p class="usuarioPuntajeEstrellas">★★★✩✩</p>
                        </div>
                        <div class="puntajeComentario" v-if="comentario.puntaje ==4">
                            <p class="usuarioPuntajeEstrellas">★★★★✩</p>
                        </div>
                        <div class="puntajeComentario" v-if="comentario.puntaje ==5">
                            <p class="usuarioPuntajeEstrellas">★★★★★</p>
                        </div>
                        <div class="nombreUsuarioComentario">
                            {{comentario.usuario}}
                        </div>
                        <div>
                            <p>{{comentario.comentario}}</p>
                        </div>
                    </div>
                </div>
                <button v-if="admin==1" v-on:click="deleteComment(comentario.id)"
                    class="btn btn-success btn-borrar">BORRAR</button>
            </li>
        </ul>
    </div>



<?php }
}
