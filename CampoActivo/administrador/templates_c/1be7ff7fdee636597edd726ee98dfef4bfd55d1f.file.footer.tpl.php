<?php /* Smarty version Smarty-3.1.14, created on 2014-11-18 20:08:43
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172815439c3e2162e30-66906874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1416337559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172815439c3e2162e30-66906874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439c3e21650c0_63339651',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439c3e21650c0_63339651')) {function content_5439c3e21650c0_63339651($_smarty_tpl) {?><footer>
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

    <!--  <script src="js/jqBootstrapValidation.js"></script>
    // <script src="js/contact_me.js"></script -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    $("#tipeoUser").keyup(function(){
        var query=$("#tipeoUser").val();
        $.get("resultadosParciales.php?q="+query,function(data,status){
            //console.log(data);
            $("#cantResultados").html(data + " Resultados");
        });
    });

    </script>

</body>

</html>
<?php }} ?>