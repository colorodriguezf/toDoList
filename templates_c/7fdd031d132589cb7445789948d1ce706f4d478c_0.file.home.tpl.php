<?php
/* Smarty version 3.1.39, created on 2021-11-26 14:17:51
  from 'C:\xampp\htdocs\TPEweb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a0de7fb37305_67332591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fdd031d132589cb7445789948d1ce706f4d478c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\home.tpl',
      1 => 1637932669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/usoComun/header.tpl' => 1,
    'file:templates/usoComun/nav.tpl' => 1,
    'file:templates/slider.tpl' => 1,
    'file:templates/usoComun/footer.tpl' => 1,
  ),
),false)) {
function content_61a0de7fb37305_67332591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/usoComun/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="marcas">Marcas</h1>
<div class="marcasHome">
    <div class="logo1">
        <img src="img/adidasLogo1.jpg" class="logoAdidas">
    </div>
    <div class="logo2">
        <img src="img/logoNike2.jpg" class="logoNike">
    </div>
    <div class="logo3">
        <img src="img/logoPuma2.jpg" class="logoPuma">
    </div>
    <div class="logo4">
        <img src="img/lottoLogo1.jpg" class="logoLotto">
    </div>
</div>

<h1 class="categorias">Categorias</h2>

    <div class="contenedorCategorias">
        <div class="terrenoFirme">
            <a href="botines"> <img src="img/terrenoFirme.png" class="terrenoFirmeIMG"></a>
        </div>
        <div class="terrenoBlando">
            <a href="botines"><img src="img/terrenoBlando.png" class="terrenoBlandoIMG"></a>
        </div>
        <div class="pastoSintetico">
            <a href="botines"><img src="img/sintetico.jpg" class="pastoSinteticoIMG"></a>
        </div>
        <div class="futsal">
            <a href="botines"> <img src="img/futsal.jpg" class="futsalIMG"> </a>
        </div>
    </div>


    <div class="sobreNosotros">
        <h1>¡La tiendad de botines mas grande de Argentina!</h1>
        <p>Si estás buscando botines ,boots tiene los mejores botines de las mejores marcas. Tenemos todo lo que
            necesitas para arrasar en el juego. Disponemos de botas de las mejores marcas como son Adidas, Nike, Puma y
            Lotto.</p>
    </div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/usoComun/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
