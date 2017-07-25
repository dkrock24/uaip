<link href="../../../../asset_/css/font-awesome.css" rel="stylesheet">
<br>
<div class="container">
<?php
foreach ($entradas as $entrada) {
    ?>
    <div class="row">
        <div class="col-md-0">
        </div>
        <div class="col-md-3">            
            <div class="panel panel-default demo">
                <div class="panel-heading">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <img class="img-responsive" width='50%' src="../../../../assets/images/avatars/<?php echo $entrada->imagen; ?>" alt="">
                        </div>                        
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <b><?php echo $entrada->titulo; ?></b>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="panel-body">
                    <div class="row">
                             <?php if($entrada->documento !=""){
                                ?>
                                <div class="col-md-4">
                                <a href="../../../../assets/documentos/<?php echo $entrada->documento; ?>" target="_blank">
                                    <span id="pdf" class="fa fa-file-pdf-o">              
                                    </span>
                                </a>
                                </div>
                                <?php
                            } ?>
                             <?php if($entrada->video !=""){
                                ?>
                                <div class="col-md-4">                                
                                <span id="pdf" class="fa fa-file-video-o"></span>
                                </div>
                                <?php
                            } ?>
                            <?php if($entrada->referencia !=""){
                                ?>
                                <div class="col-md-4">
                                <a href="<?php echo $entrada->referencia; ?>" target="_blank">
                                <span id="pdf" class="fa fa-link"></span>
                                </a>
                                </div>
                                <?php
                            } ?>
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 bs-callout bs-callout-danger">
            <h4 class="text_subtitulo"><?php echo $entrada->subtitulo; ?></h4>
            <p class='descripcion'><?php echo $entrada->contenido; ?></p> 
            <?php
            if($entrada->video !="")
            {
                ?>                
                    <p>
                    <?php echo $entrada->video; ?>
                    </p>                     
                <?php
            }
            ?>     
            
            <br>
            <span>
                <?php
                    if($entrada->referencia !=""){
                        ?>
                        <b><a href=""></a><?php echo 1;  ?></b>
                        <?php
                    }
                ?>
            </span>   

            <span>
                <b>Creado </b>
                <?php
                    $fecha_creado = date_create($entrada->creado);
                    echo date_format($fecha_creado,"Y/m/d");
                ?>      
            </span>
            <br>            

        </div>        
        <div class="col-md-1"></div>

    </div>
    <br>
    <?php
}
?>
</div>

<style>

.bs-callout {
    padding: 20px;
    margin: 0px 0;
    border: 1px solid #eee;
    border-left-width: 5px;
    border-radius: 3px;
}
.bs-callout-danger{    
    border-left-color: #09c;
}
.bs-callout-danger:hover{
    border-left-color: #9AC835;    
}

.descripcion{
    text-align: justify;
}
.demo{
    background-color: grey;
    color: white;    
    border-top-width: 5px;
    border-radius: 3px;
    border: 1px solid #eee;
    box-shadow: 5px 5px 5px white;
}
.subtitle{
    color: white;
}
#pdf{
     color: #fff;
    text-shadow: 1px 1px 1px grey;
    font-size: 1.5em;
}
</style>