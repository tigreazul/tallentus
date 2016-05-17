<div class="banner">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide slide-1" data-delay="14">
            <img src="<?php echo $frontend ?>assets/masterslider/blank.gif" data-src="<?php echo $frontend ?>assets/img/baner<?php echo rand(1,2)?>.jpg" alt="Slide1 background">
        </div>
        <!-- end of slide -->
    </div>
    <div class="search">
        <div class="container">
            <div class="col-md-10 col-lg-offset-1">
                <form class="form-inline" action="<?php echo $BASE_URL ?>d/" method="post">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <span class="icon-search-outline"></span>
                            <input type="text" class="form-control" name="palabra" id="inputSearch" placeholder="Programador web, electricista, abogado, etc.">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-default waves">Buscar empleos</button>
                        </div>
                        <div class="col-md-2">
                            <a href="#">Búsqueda avanzada</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>