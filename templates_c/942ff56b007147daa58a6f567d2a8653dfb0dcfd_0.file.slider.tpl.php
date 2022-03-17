<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:25:00
  from 'C:\xampp\htdocs\TPEweb2\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebbbc7bd235_92284454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '942ff56b007147daa58a6f567d2a8653dfb0dcfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEweb2\\templates\\slider.tpl',
      1 => 1637791673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ebbbc7bd235_92284454 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="miCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button data-bs-target="#miCarousel" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#miCarousel" data-bs-slide-to="1"></button>
        <button data-bs-target="#miCarousel" data-bs-slide-to="2"></button>
        <button data-bs-target="#miCarousel" data-bs-slide-to="3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item ">
            <img class="d-block w-100 img4" src="img/botines4.jpg" alt="Fourth slide">
        </div>
        <div class="carousel-item active">
            <img class="d-block w-100 img1" src="img/botines1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img2" src="img/botines2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img3" src="img/botines3.jpg" alt="Third slide">
        </div>
    </div>
    <button type="button" class="carousel-control-prev" data-bs-target="#miCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button type="button" class="carousel-control-next" data-bs-target="#miCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div><?php }
}
