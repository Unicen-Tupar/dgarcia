{include file = "headerBusqMaq.tpl" title = foo}

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center">
                            <strong>M&aacute;quinas</strong>
                        </h2>
                    <hr>
                </div>
                <div id="resMaquinas"> 
                {include file = "solomaquinas.tpl"}
                </div>
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

{include file = "footer.tpl"}