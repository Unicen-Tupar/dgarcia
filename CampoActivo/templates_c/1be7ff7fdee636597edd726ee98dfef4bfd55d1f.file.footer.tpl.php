<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 16:59:20
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321405474357263d681-29277569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1416930616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321405474357263d681-29277569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547435726429e8_02316247',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547435726429e8_02316247')) {function content_547435726429e8_02316247($_smarty_tpl) {?><footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><strong>Copyright &copy; Daniela 2014</strong></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/busquedaJquery.js"></script>

    <script src="./js/Ajax_login.js"></script>

    <!-- Script to Activate the Carousel -->
    
    <script>

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    // $("#tipeoUser").keyup(function(){
    //     var query=$("#tipeoUser").val();
    //     $.get("resultadosParciales.php?inputBuscarM="+query,function(data,status){
    //         //console.log(data);
    //         $("#cantResultados").html(data + " Resultados");
    //     });
    // });

    </script>

</body>

</html>
<?php }} ?>