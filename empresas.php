

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

    <!--Empieza parrafo descriptivo empresas-->
    <div class="row justify-content-center  ">
        <h2 class=" text-center d-md-none" style="color:#0a038f">EMPRESAS</h2>

        <div class="row  my-4">
          <div class="col-12 col-md-5 " >
            <div class="row d-none d-md-block" style="height: 110px;"></div>
            <div class="row mx-0 my-0 py-0 px-0 ">
              <img class="" src="recursos/corporation.jpg" alt="">
            </div>
          </div>
          <div class="col">
            <p class="text-center fs-5">
              Uno de los principales factores que afecta la productividad de colaboradores es el desorden financiero. Una mala administración de los recursos personales o familiares lleva a que un empleado reduzca su productividad por el stress de estar pensando como cumplirá sus obligaciones, constantemente esté pidiendo préstamos, aumento salarial o adelanto de nómina, o hasta cometa fraude para lograr aumentar sus ingresos que le permitan brindarle «tranquilidad financiera».
          </p>
          <p class="text-center fs-5 mb-5">
              Mejorar el bienestar financiero de los colaboradores formándolos en todo lo relacionado con planeación financiera, adecuado manejo del dinero, deuda inteligente y alternativas de ahorro e inversión, les ayudará a tomar decisiones financieras más inteligentes y en consecuencia ser más productivos en el trabajo y reducir el riesgo de fraude al interior de la empresa.
          </p>
          </div>
        </div>

    </div>

    <!--Termina parrafo descriptivo empresas-->

    <!--Empieza fila con oferta de cursos-->
    <div class="row align-content-center">
        <div class=" col-sm border pt-3">
            <h2 class="text-center">Taller: Mejora tu salud financiera</h2>
            <p class="text-center">
                Crea una mayor conciencia entre colaboradores sobre la importancia del manejo adecuado del dinero, y los errores y aciertos que pueden estar cometiendo, para identificar brechas que después se pueden cerrar mediante un Programa de Salud Financiera.
            </p>
            <p class="ms-3">
                Duración: 90 minutos<br>
                Modalidad: Presencial ó virtual, 20 personas<br>
               
            </p>
        </div>
        <div class=" col-sm border pt-3">
            <h2 class="text-center">Curso: Finanzas para no financieros</h2>
            <p class="text-center">
                Mediante términos sencillos y con casos prácticos entrena a colaboradores sobre los conceptos económicos, financieros y contables básicos para que los puedan aplicar en la toma de decisiones.
            </p>
            <p class="ms-3">
                Duración: 3 clases de 1 hora cada una<br>
                Modalidad: Presencial ó virtual, 20 personas<br>
                
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
            <select id="empresas_servicio_interes" class="form-select mb-3" aria-label="Default select example">
                
                <option selected="1">Taller: Mejora tu salud financiera</option>
                <option >Curso: finanzas para no financieros</option>
                
              </select>
              
                <div class="mb-0">
                    <label for="exampleFormControlInput1" class="form-label h5 ">Nombre completo*</label>
                    <input id="empresas_nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escriba su nombre y apellidos completos">
                </div>
                <p id="validador_nombre_empresas" style="color: red;">
                  Ingrese un nombre válido
                </p>
                
                <div class="mb-0">
                    <label for="exampleFormControlInput1" class="form-label h5 ">Correo electrónico*</label>
                    <input id="empresas_correo" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                </div>
                <p id="validador_correo_empresas" style="color:red;">
                  Ingrese un correo válido
                </p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label h5 ">Teléfono celular*</label>
                    <input id="empresas_celular" type="text" class="form-control" id="exampleFormControlInput1" placeholder="3XX-XXX-XX-XX">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label h5">Comentarios</label>
                    <textarea id="empresas_comentarios" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-check ms-1 mb-2">
                  <input class="form-check-input" type="checkbox" value="on" id="flexCheckChecked3">
                  <label class="form-check-label" for="flexCheckChecked3">
                    <a href="politica-de-privacidad.html" target="_blank">Acepto términos y condiciones</a> 
                  </label>
                 
                </div>

                <p>(*) Campos obligatorios</p>

                <center><button id="boton_formulario_empresas" type="button" class="btn btn-primary text-center" style="">Enviarme mayor información</button></center>

                <p id="alerta_datos_exito_empresas" class="text-primary text-center mt-3 fs-2 fst-italic">¡Datos enviados con éxito!</p>
    
            </form>
        </div>
    <!--Temina formulario de temas de interés-->


</div>




  <?php
  require "footer.php";
  ?>
  
  </body>
</html>