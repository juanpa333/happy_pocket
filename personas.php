

<!doctype html>
<html lang="en">
    <?php  
    require "head.php";
    ?> 
    
    <body style="margin-bottom: 0ch;padding-bottom: 0cm; " >


    <?php
    require "barra_sup_moviles.php";
    ?>

 
    <?php
    require "logo_navbar_sup.php";
    ?>

<div class="row" style="height: 120px">
  
</div>


<div class="container">

    <!--Empieza parrafo descriptivo personas-->
    <div class="row justify-content-center">
        <h2 class=" text-center d-md-none" style="color:#0a038f">PERSONAS</h2>

     


        <div class="row">
          <div class="col-12 col-md-6">
            <p class="text-center fs-5">
              Muchas personas se esfuerzan cada día de la vida por ganar más dinero como si tener una fortuna fuera su meta y no el medio para lograr su propósito. En ocasiones en esa carrera por la riqueza olvidan lo fundamental, y terminan sin lograr lo que tanto anhelaban: su felicidad y la de sus seres queridos.        </p>
          <p class="text-center fs-5 mb-2">
              Cuando las personas sincronizan sus metas con su realidad financiera, logran vivir más felices en el presente y sabiendo bien como quieren vivir en el futuro, aprenden a sacar el mayor provecho de cada peso que ganan. Mejora tu inteligencia financiera para que mejores tu bienestar financiero presente y futuro.        </p>
  
          </div>
          <div class="col-10 col-md-6 my-4 ">
            <div class="row d-none d-md-block" style="height:30px"></div>
            <img src="recursos/finanzas_bombillo.png" style="height:60%;width:auto">
            </div>
        </div>
    </div>

    <!--Termina parrafo descriptivo personas-->

    <!--Empieza fila con oferta de cursos-->
    <div class="row align-content-center">
        <div class=" col-md border pt-3">
            <h2 class="text-center">Taller: Organiza tus finanzas</h2>
            <p class="text-center">
              Este taller de 90 minutos es para vos, si eres de los que vive colgado pagando cuentas o pidiendo prestado para pagarlas, si sientes que no tienes recursos para enfrentar alguna adversidad o si deseas reducir el stress que te genera administrar tus recursos.            </p>
            <p class="ms-3">
                
                Modalidad: Virtual, 20 personas<br>
                
                Cupo: 15 personas
            </p>
        </div>
        <div class=" col-md border pt-3">
            <h2 class="text-center">Taller: ¿Dónde puedo invertir mi dinero?</h2>
            <p class="text-center">
              Este taller de 90 minutos es para vos si te llegó una platica producto de una bonificación, regalo o venta y quieres saber donde invertirla bien, y quieres conocer las distintas alternativas que hay en el mercado financiero para sacarle mejor rendimiento.            </p>
            <p class="ms-3">
              Modalidad: Virtual<br>
              
              Cupo: 15 personas
            </p>
        </div>

        <div class=" col-md border pt-3">
          <h2 class="text-center">Acompañamiento: Consejería financiera</h2>
          <p class="text-center">
            Si deseas contar con alguien profesional y de confianza, que te ayude a trazar un plan financiero exitoso siguiendo una metodología y que te brinde acompañamiento personalizado para sacar el mayor provecho de tu dinero, este servicio es para vos.          </p>
          <p class="ms-3">
            Duración: variable dependiente del diagnóstico<br>
            Modalidad: virtual o presencial<br>
            
          </p>
      </div>

    </div>

    <!--Termina fila con oferta de cursos-->

    <!--Empieza formulario de temas de interés-->
    <div class="row mt-5">

        
          <form action="">

            <h5 class="">
                Seleccione el servicio de su interés
            </h4>
            <select class="form-select mb-3" id="personas_servicio_interes" aria-label="Default select example">
                
                <option selected="1">Taller: Organiza tus finanzas</option>
                <option >Taller: ¿Dónde puedo invertir mi dinero?</option>
                <option >Acompañamiento: Consejería financiera</option>
                
              </select>
                <div class="mb-0">
                    <label for="personas_nombre" class="form-label h5 ">Nombre completo*</label>
                    <input type="text" class="form-control" id="personas_nombre" placeholder="Escriba su nombre y apellidos completos">
                </div>
                <div class="p-2" id="validador_nombre_personas" style="color:red;">Ingrese un nombre válido</div>
                <div class="mb-0">
                    <label for="personas_correo" class="form-label h5 ">Correo electrónico*</label>
                    <input type="email" class="form-control" id="personas_correo" placeholder="nombre@ejemplo.com">
                </div>
                <div class="p-2" id="validador_correo_personas" style="color:red;">Ingrese un correo válido</div>
                <div class="mb-3">
                    <label for="personas_celular" class="form-label h5 ">Teléfono celular*</label>
                    <input type="text" class="form-control" id="personas_celular" placeholder="3XX-XXX-XX-XX">
                </div>
                <div class="mb-3">
                    <label for="personas_comentarios" class="form-label h5">Comentarios</label>
                    <textarea class="form-control" id="personas_comentarios" rows="3"></textarea>
                </div>

                <div class="form-check ms-1 mb-2">
                  <input class="form-check-input" type="checkbox" value="on" id="flexCheckChecked3">
                  <label class="form-check-label" for="flexCheckChecked3">
                    <a href="politica-de-privacidad.html" target="_blank">Acepto términos y condiciones</a> 
                  </label>
                 
                </div>

                <p>(*) Campos obligatorios</p>

                <center><button id="boton_formulario_personas" type="button" class="btn btn-primary text-center" style="">Enviarme mayor información</button></center>
                  <div id="alerta_datos_exito_personas" class="text-primary text-center mt-3 fs-3 fst-italic">¡Datos enviados con éxito!</div>
            </form>
        </div>
    <!--Temina formulario de temas de interés-->


</div>




  <?php
  require "footer.php";
  ?>
  
  </body>
</html>