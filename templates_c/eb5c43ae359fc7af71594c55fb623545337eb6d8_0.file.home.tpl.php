<?php
/* Smarty version 3.1.39, created on 2022-02-15 16:49:56
  from 'C:\xampp\htdocs\Instagram\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620bcba44427d1_12332919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5c43ae359fc7af71594c55fb623545337eb6d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Instagram\\templates\\home.tpl',
      1 => 1644940146,
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
function content_620bcba44427d1_12332919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>







<div class="contenedorHome">

    <div class="historias">
            <div class="historias-container">
                <button class="historia">
                        <div class="profile">
                            <img src="img\fotoPerfil\61d60957ba164.jpg"/> 
                        </div>
                        <div class="usernameHistorias">
                            <p>USUARIO1</p>
                        </div>
                    </button>
                    <button class="historia">
                    <div class="profile empty">
                        <img src="img\fotoPerfil\61d60957ba164.jpg"/> 
                    </div>
                    <div class="usernameHistorias">
                        <p>Nombre usuario</p>
                    </div>
                </button>
                <button class="historia">
                <div class="profile">
                    <img src="img\fotoPerfil\61d60957ba164.jpg"/> 
                </div>
                <div class="usernameHistorias">
                    <p>JUAN</p>
                </div>
            </button>
            <button class="historia">
            <div class="profile">
                <img src="img\fotoPerfil\61d60957ba164.jpg"/> 
            </div>
            <div class="usernameHistorias">
                <p>Nombre usuario</p>
            </div>
        </button>
                                                        
            </div>
            
        
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posteos']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        
            <div class="contenedorImagen-Nombre-Posteo">   
                 <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
">
                    <div>   
                        <img class="postFotoPerfil" src="<?php echo $_smarty_tpl->tpl_vars['post']->value->profilePhoto;?>
"/>
                        <h5><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</h5>
                    </div>
                </a>
                        <p class="ubicacion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                      <?php echo $_smarty_tpl->tpl_vars['post']->value->ubicacion;?>
</p>



                      <a href="p/ACA VA FOTO HASEHADA/" class="btn-ModalHome" data-toggle="modal" data-target="#modalePostHome<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
">
                            <div class="contenedorPosteo">
                                <img class="imgPosteo" src='<?php echo $_smarty_tpl->tpl_vars['post']->value->media;?>
'/>
                            </div>
                       </a>

                       <div class="modal fade modalHomePost" id="modalePostHome<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                       <div class="modal-dialog dialog modal-xl" role="document">
                       <div class="modal-content modalContentHomePost">
                        <div class="modal-body">
                            <div class="containerModal">
                                <div class="contenedorComentariosModal">
                                        <img class="imgPosteoModal" src='<?php echo $_smarty_tpl->tpl_vars['post']->value->media;?>
'/>
                                    </div>
                                <div class="contenedorHeaderComModal">
                                    <div class="modal-header">
                                        <h5 class="modal-titleHome" id="exampleModalLongTitle"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
">
                                        <div class="contenedorUsuarioModal">   
                                        <img class="postFotoPerfilModal" src="<?php echo $_smarty_tpl->tpl_vars['post']->value->profilePhoto;?>
"/>
                                        <h5 class="nombreUsuarioModal"><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</h5>
                                        </div>
                                        </a>
                                        <p class="ubicacionModal"><?php echo $_smarty_tpl->tpl_vars['post']->value->ubicacion;?>
</p>
                                        </h5>
                                    </div>
                                    <div class="contenedorComentariosModal">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['comentario']->value->id_post_fk == $_smarty_tpl->tpl_vars['post']->value->post_id) {?>
                                                
                                                <div class="contenedorComentarios">                                    
                                                            <div class="comentario-usuario"> <a href="<?php echo $_smarty_tpl->tpl_vars['comentario']->value->user;?>
"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->user;?>
 </a> </div>                           
                                                            <div class="comentario-comentario"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comment;?>
</div>
                                                </div>
                                            <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                    </div>
                                    </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-label="Cerrar" class="_8-yf5 " color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 24 24" width="24"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></polyline><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>
                                        </button>
                                    </div>
                                    </div>
                                    </div>
                     </div>








                <div class="contenedorVueComentarios">
                    <div class="accionesComentarios">
                            <span>
                            <form method="POST" class="formLike" id="formLike<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
" data-img=<?php echo $_smarty_tpl->tpl_vars['post']->value->profilePhoto;?>
 data-user=<?php echo $_smarty_tpl->tpl_vars['post']->value->user_id;?>

                                data-id=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
 data-fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
>
                                <button class="btn-like" type="button" value=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
> <svg class="btn-like<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
" aria-label="Me gusta"  color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24" id="likeColor"><path  d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg>
                                </button>   
                            </form>  
                            </span>                    
                            <span>
                                    <button>   <svg aria-label="Comentar" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg>
                                    </button>   
                            </span>
                            <span class="spanCompartir"> 
                                <button>  
                                <svg aria-label="Compartir publicación" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line><polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon></svg>                            </button>
                            </span>
                            <span class="guardar">
                                <button> 
                                <svg aria-label="Guardar"  color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon></svg>                            </button>     
                            </span>   
                    </div>
                    <div class="tittle">
                        <div class="comentario-usuario"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
" class=""><?php echo $_smarty_tpl->tpl_vars['post']->value->username;?>
</a></div>
                        <div class="comentario-comentario"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['comentario']->value->id_post_fk == $_smarty_tpl->tpl_vars['post']->value->post_id && $_smarty_tpl->tpl_vars['comentario']->value->id_post_fk != null) {?>
                            <div class="verLosComentarios">
                            <p> Ver todos los comentarios</p>
                            </div>
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['comentario']->value->id_post_fk == $_smarty_tpl->tpl_vars['post']->value->post_id) {?>
                            
                            <div class="contenedorComentarios">                                    
                                        <div class="comentario-usuario"> <a href="<?php echo $_smarty_tpl->tpl_vars['comentario']->value->user;?>
"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->user;?>
 </a> </div>                           
                                        <div class="comentario-comentario"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comment;?>
</div>
                            </div>
                        <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    
                
                    <div class="borderComentarios">
                            <form class="formComentarios"  method="POST" class="formComentario" id="formComentario" data-id=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
 
                            data-img=<?php echo $_smarty_tpl->tpl_vars['foto_perfil']->value;?>
 data-user=<?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
 data-fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
>
                                <input id="comentario<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
" type="text" class="textarea" placeholder="Agrega un comentario..." color=black;>
                                <button type="button"  class="btn-comentar" value=<?php echo $_smarty_tpl->tpl_vars['post']->value->post_id;?>
 data-img=<?php echo $_smarty_tpl->tpl_vars['foto_perfil']->value;?>
>Publicar</button>
                            </form>
                    </div>
                </div>
            </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





    <div class="SugerenciasDerecha">
        <div class="profile-card">
            <div class="profile-pic">
               <img class="img-sugerencia" src="img\fotoPerfil\61d609b6da901.jpg"/>
            </div>
            <div>
            <p class="usernameDerecha"><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</p>
            <p class="sub-text"><?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
</p>
            </div>
                <button class="cambiarCuenta">Cambiar</button>
            </div>
                            <p class="textoSugerencias">Sugerencias para ti</p>
        <div class="profile-card">
            <div class="profile-pic">  
               <img class="img-sugerencia" src="img\fotoPerfil\61d619929c8f4.jpg"/>
            </div>
            <div>
                <div>
                    <p class="usernameDerecha">Juan</p>
                <div>
                </div>
                    <p class="sub-text">Juan perez</p>
                </div>
            </div>
                <button class="cambiarCuenta">Seguir</button>
            </div>
            <div class="profile-card">
            <div class="profile-pic">  
               <img class="img-sugerencia" src="img\fotoPerfil\61d619929c8f4.jpg"/>
            </div>
            <div>
                <div>
                    <p class="usernameDerecha">Juan</p>
                <div>
                </div>
                    <p class="sub-text">Juan perez</p>
                </div>
            </div>
                <button class="cambiarCuenta">Seguir</button>
            </div>
            <div class="profile-card">
            <div class="profile-pic">  
               <img class="img-sugerencia" src="img\fotoPerfil\61d619929c8f4.jpg"/>
            </div>
            <div>
                <div>
                    <p class="usernameDerecha">Juan</p>
                <div>
                </div>
                    <p class="sub-text">Juan perez</p>
                </div>
            </div>
                <button class="cambiarCuenta">Seguir</button>
            </div>
            <div class="abajoSugerencias">
                <ul>
                <li>Informacion •</li>
                <li>Ayuda •</li>
                <li>Prensa •</li>
                <li>Api •</li>
                <li>Empleo •</li>
                <li>Privacidad •</li>
                <li>Condiciones •</li>
                <li>Ubicaciones •</li>
                <li>Cuentas descacadas •</li>
                <li>Hashtags •</li>
                <li>Idioma •</li>
                </ul>
                <span class="DINPA">© 2022 Instagram from Meta</span>
            </div>
        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
