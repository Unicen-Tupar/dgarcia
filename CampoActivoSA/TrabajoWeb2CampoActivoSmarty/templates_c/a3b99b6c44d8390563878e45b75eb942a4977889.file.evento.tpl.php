<?php /* Smarty version Smarty-3.1.14, created on 2014-10-19 02:21:44
         compiled from ".\templates\evento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10355543af7d9895b80-13937840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b99b6c44d8390563878e45b75eb942a4977889' => 
    array (
      0 => '.\\templates\\evento.tpl',
      1 => 1413677137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10355543af7d9895b80-13937840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543af7d98c7b70_77502558',
  'variables' => 
  array (
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543af7d98c7b70_77502558')) {function content_543af7d98c7b70_77502558($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Eventos de Campo Activo</strong></h2>
                    <hr>
                </div>
                <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_smarty_tpl->tpl_vars['id_evento'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
 $_smarty_tpl->tpl_vars['id_evento']->value = $_smarty_tpl->tpl_vars['evento']->key;
?>
                <div class="col-lg-12 text-center">                    

                    <img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['evento']->value['Ruta'];?>
" alt="">
                    <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Nombre']);?>

                        <br>
                        <small><h4>Fecha: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Fecha'];?>
</h4></small>
                        <small><h4>Ubicaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Ubicacion'];?>
</h4></small>
                    </h2>
                    <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Texto']);?>
                    </p>
                    <a href="index.php?action=carouselE&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_Contenido'];?>
" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
                    <hr>
                </div>
                <?php } ?>
                
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Anterior</a>
                        </li>
                        <li class="next"><a href="#">Siguiente &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>