<script type="text/javascript">

    $(document).ready(function(){

    $(".enviado").hide();

    $("#submit").click(function(){   
    	id_contacto = $("#id_contacto").val();
        $.ajax({
            url: "../../portal/uaip/Ccontacto/saveRespuestaContacto",
            type:"post",            
            data: $('#contacto').serialize(),               

            success: function(){ 
            	
            	$(".enviado").slideDown(200, function(){            		
		        	$(".enviado").show();
			        setTimeout(function() {
			        	$(".enviado").slideUp(2000);
			        }, 3000);
		        });  
		        $(".pages").load("../../portal/uaip/Ccontacto/getContactosByID/"+id_contacto);          
            },
            error:function(){
            	$(".enviado").slideDown(200, function(){            		
		        	$(".enviado").show();
			        setTimeout(function() {
			        	$(".enviado").slideUp(2000);
			        }, 3000);
		        }); 
		        $(".pages").load("../../portal/uaip/Ccontacto/getContactosByID/"+id_contacto); 
		    }
        });        
    });

    $("#btn_cambiar_estado").click(function(){
    	$.ajax({
            url: "../../portal/uaip/Ccontacto/cambiarEstado",
            type:"post",
            dataType: "json",
            data: $('#estadoForm').serialize(),               

            success: function(){        
            },
            error:function(){
            }
        });
    });



    });
</script>

	<?php
	session_start();	
        foreach ($contacto as $value) {
    ?>

    <section class="curious" id="curious">
    <div class="container">

    	<div class="row">
    		<div class="col-md-10 text-center alert-success enviado">
        		<div class="">
        			<h3><strong>Respuesta Enviada!</strong> Satisfactoriamente.</h3>
        		</div>
    		</div>
    	</div>

	    <div class="row">
	    	<div class="col-md-6 text-center section-intro">
	        	<h2 class="header-boxed wow zoomIn" data-wow-iteration="1"><span>Responder al registro.</span></h2>        
	    	</div>
	    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="contact-form wow fadeInLeft">
            <form class="row" method="post" action="#" id="contacto">
            
            	<div class="col-md-6">
                    <div class="form-group">
                    	<label>Nombre<i class="fa fa-asterisk"></i></label>
                    	<input type="text" name="nombre" readonly="true" value="<?php echo $value->nombre; ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    	<label>E-mail<i class="fa fa-asterisk"></i></label>
                    	<input type="email" name="email" readonly="true" value="<?php echo $value->email; ?>" class="form-control">
                    </div>
                </div>
            	
                
                <div class="col-md-12">
                    <div class="form-group">
                    	<label>Mensaje</label>
                    	<p><?php echo $value->mensaje; ?></p>
                    </div>
                    <div class="send_result"></div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    	<label>Responder</label>
                    	<textarea name="mensaje" rows="6" class="form-control"></textarea>
                    </div>
                    <div class="send_result"></div>
                </div>
                <input type="hidden" value="<?php echo $_SESSION['idUser']; ?>" name="usuario">
                <input type="hidden" value="<?php echo $value->id_contacto ; ?>" id="id_contacto" name="id_contacto">

                <div class="col-md-12"><input type="button" value="RESPONDER" class="btn btn-primary btn-lg btn-block" id="submit" name="submit">
                </div>
            </form>

            	<div class="col-md-12">
                    <div class="form-group">
                    	<label>Respuestas: </label>
                    	<?php
                    	if($respuestas!=""){
                    	foreach ($respuestas as $res) {
                    		?>
                    		<table class="table">
                    			<tr>
                    				<td>Respuesta</td>
                    				<td><?php echo $res->respuesta; ?></td>
                    			</tr>
                    			<tr>
                    				<td>Fecha</td>
                    				<td><?php echo $res->fecha_respuesta; ?></td>
                    			</tr>
                    			<tr>
                    				<td>Usuario</td>
                    				<td><?php echo $res->nombres.'.'.$res->apellidos; ?></td>
                    			</tr>
                    		</table>
                    		<?php
                    	}
                    	}
                    	?>                    	
                    </div>
                    <div class="send_result"></div>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="featured-content-box text-center wow fadeInDown">
                <div class="circle feature-icon">
                    <i class="tn-mobile"></i>
                </div>

                <img src="../../../asset_/img/fecha_creacion_contacto.png" width="100px">
                <h3>Fecha Recibido</h3>
                <p style="text-align:center"><?php echo $value->fecha_creacion;  ?></p>

            </div>

            <div class="featured-content-box text-center wow fadeInUp">
                <div class="circle feature-icon">
                    <i class="tn-email"></i>
                </div>


                <img src="../../../asset_/img/estado_contactos.png" width="100px">
                <h3>Estado</h3>
                <p style="text-align:center">
                <form action="#" name="estadoForm" id="estadoForm">
                	<select name="estado" id="" class="form-control">
                	<?php
                		if($value->estado==1){
                			?>
                			<option value="1">Activo</option>
                			<option value="0">Inactivo</option>
                			<?php
                		}else{
                			?>
                			<option value="0">Inactivo</option>
                			<option value="1">Activo</option>                			
                			<?php
                		}
                	?>                		
                	</select>
                	<input type="hidden" name="id_contacto" value="<?php echo $value->id_contacto; ?>">
                	<br><br>
                	<a href="#" id="btn_cambiar_estado" name=""  class="btn btn-default">Cambiar Estado</a>
                </form>
                </p>

            </div>

        </div>
    </div>
    </div>
    </section>
    <?php
            }
            ?>

<style>

.enviado{
    background-color: #9AC835;
  }


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

div {
    display: block;
}
    </style>