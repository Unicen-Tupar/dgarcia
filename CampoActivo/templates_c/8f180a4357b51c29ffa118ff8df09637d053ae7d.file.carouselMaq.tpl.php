<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 17:56:28
         compiled from ".\templates\carouselMaq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40725474a4b8322923-77529994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f180a4357b51c29ffa118ff8df09637d053ae7d' => 
    array (
      0 => '.\\templates\\carouselMaq.tpl',
      1 => 1416934519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40725474a4b8322923-77529994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474a4b83b2ab4_35614770',
  'variables' => 
  array (
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474a4b83b2ab4_35614770')) {function content_5474a4b83b2ab4_35614770($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-2 text-center"></div>
                <div class="col-lg-8 text-center">
                    <div id="carousel-example-generic" class="carousel slide">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
?>
                            <div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==1){?> active<?php }?>">
                                <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['Ruta'];?>
" alt="">
                            </div> 
                         <?php } ?>                              
                        </div>                        

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>                    
                </div>
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>
        
    </div> 
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>