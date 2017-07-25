<?php header('Access-Control-Allow-Origin: *'); ?>
            <div class="home-carousel">
                <div class="dark-mask"></div>
                    <div class="container">
                        <div class="homepage owl-carousel">
                            <?php
                            foreach ($carrusel as $item)
                            {
                            ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 right">
                                        <p>
                                       
                                        </p>
                                        <h1><?php echo $item->titulo; ?></h1>
                                        
                                    </div>
                                    <div class="col-sm-7">
                                        <img class="img-responsive" src="../../../../assets/images/avatars/<?php echo $item->imagen; ?>"/>
                                        <br>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p><?php echo $item->contenido; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

    <script src="../../../../asset_/js/front.js"></script>


