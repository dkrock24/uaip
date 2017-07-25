<link href="../../../../asset_/css/font-awesome.css" rel="stylesheet">

<hr>
<div class="container">
<?php
foreach ($valores as $valor) {
    ?>
    <div class="row">       

        <div class="col-md-3"> 
        
            <div class="panel panel-default demo bottom-main">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-responsive img-circle" src="../../../../assets/images/avatars/<?php echo $valor->imagen; ?>" alt="">
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $valor->titulo ?>
                            </div>                                                    
                        </div>
                        <hr class="linea">
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../../../../assets/images/avatars/<?php echo $valor->imagen; ?>" target="_blanck" download="myimage"><i class="fa fa-download fa-6"></i></a>
                                
                            </div>                                                    
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-9 contenido">
            <h4><?php echo $valor->subtitulo; ?></h4>
            <p class='descripcion'>
                <img src="../../../../assets/documentos/<?php echo $valor->documento; ?>" width="100%">
            </p>            
            <span>
                <?php  //  echo "<b>Creado </b>". $mensaje->creado;   ?>      
            </span><br>
        </div>
        
    </div>
    
    <?php
}
?>

</div>



<style>
.bottom-main {
    border-top: 7px solid #75bd29;
}
.contenido{
    
    border-top: 7px solid #75bd29;
}
.descripcion{
    text-align: justify;
}
.demo{
    background-color: grey;
    color: white;
}
.subtitle{
    color: white;
}
.fa-download{
    color: #75bd29;
    text-shadow: 1px 1px 1px grey;
    font-size: 3.5em;
}
</style>