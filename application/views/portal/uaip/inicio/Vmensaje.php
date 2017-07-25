<link href="../../../../asset_/css/font-awesome.css" rel="stylesheet">

<hr>
<div class="container">
<?php
foreach ($inicio as $mensaje) {
    ?>
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-3">            
            <div class="panel panel-default demo bottom-main">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-responsive img-circle" src="../../../../assets/images/avatars/<?php echo $mensaje->imagen; ?>" alt="">
                        </div>
                    </div>
                    <div class="panel-body tittle">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <b><?php echo $mensaje->titulo ?></b>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4><?php echo $mensaje->subtitulo; ?></h4>
            <p class='descripcion'><?php echo $mensaje->contenido; ?></p>            
            <span>
                <?php  //  echo "<b>Creado </b>". $mensaje->creado;   ?>      
            </span><br>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br>


    
    <?php
}
?>

</div>



<style>
.bottom-main {
    border-top: 7px solid #75bd29;
}
.tittle{
    width: 100%;
    
    background: #09c;
    font-family: Arial;
    color: white;
    margin: 0px;
    display: inline-block;
    float: left;
    box-shadow: 0px 10px 10px grey;
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
#pdf{
     color: #fff;
    text-shadow: 1px 1px 1px grey;
    font-size: 1.5em;
}
</style>