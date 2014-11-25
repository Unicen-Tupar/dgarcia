{include file = "header.tpl" title = foo}

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-2 text-center"></div>
                <div class="col-lg-8 text-center">
                    <div id="carousel-example-generic" class="carousel slide">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        {foreach $imagenes as $imagen name=img}
                            <div class="item{if $smarty.foreach.img.iteration == 1} active{/if}">
                                <img class="img-responsive img-full" src="{$imagen.Ruta}" alt="">
                            </div> 
                         {/foreach}                              
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

{include file = "footer.tpl"}