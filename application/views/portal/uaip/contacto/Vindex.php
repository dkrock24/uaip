<script type="text/javascript">

    $(document).ready(function(){

    $(".enviado").hide();

    $("#submit").click(function(){                  
        $.ajax({
            url: "../Ccontacto/saveContacto",
            type:"post",            
            data: $('#contacto').serialize(),               

            success: function(){  
                $(".enviado").slideDown(200, function(){                    
                    $(".enviado").show();
                    setTimeout(function() {
                        $(".enviado").slideUp(2000);
                    }, 3000);
                }); 
                $("#contacto").trigger('reset');
                
            },
            error:function(){
                
            }
        });        
    });



    });
</script>


    <section class="curious" id="curious">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center alert-success enviado">
                <div class="">
                    <h3><strong>Comentario Enviada!</strong> Satisfactoriamente.</h3>
                </div>
            </div>
        </div>

    <div class="row">
    <div class="col-md-12 text-center section-intro">
        <h2 class="header-boxed wow zoomIn" data-wow-iteration="1"><span>Ingresa, Tus Segerencias y Dudas.</span></h2>
        <p class="lead">Rellena el formulario:</p>
    </div>
        <div class="col-md-9">
            <div class="contact-form wow fadeInLeft">
            <form class="row" method="post" action="#" id="contacto">
                <div class="col-md-6">
                    <div class="form-group"><label>Tu Nombre<i class="fa fa-asterisk"></i></label> <input type="text" name="nombre" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label>Tu e-mail<i class="fa fa-asterisk"></i></label> <input type="email" name="email" class="form-control"></div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><label>Tu Mensaje</label> <textarea name="mensaje" rows="6" class="form-control"></textarea></div>
                    <div class="send_result"></div>
                </div>
                <div class="col-md-12"><input type="button" value="ENVIAR" class="btn btn-primary btn-lg btn-block" id="submit" name="submit">
                </div>
            </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="featured-content-box text-center wow fadeInDown">
                <div class="circle feature-icon">
                    <i class="tn-mobile"></i>
                </div>

                <h3>Telefono UNAIP</h3>
                <p>2663 - 6083 Ext:109</p>

            </div>

            <div class="featured-content-box text-center wow fadeInUp">
                <div class="circle feature-icon">
                    <i class="tn-email"></i>
                </div>

                <h3>Email</h3>
                <p>unaip_alcaldiaptoeltfo@hotmail.com</p>

            </div>

        </div>
    </div>
    </div>
    </section>

    <style>


element.style {
    visibility: visible;
    animation-name: fadeInDown;
}

.curious .featured-content-box {
    border-radius: 0;
    padding: 10px;
}
.featured-content-box.text-center {
    padding: 20px;
}
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}
.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.featured-content-box {
    padding: 15px;
    border: 1px solid #ECF0F1;
    border-radius: 3px;
    margin-bottom: 20px;
}
.text-center {
    text-align: center;
}
.text-center {
    text-align: center;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
    </style>