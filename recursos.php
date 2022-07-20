

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


<div class="">
  <div class="row justify-content-center">
    <div class="h5 text-center mt-4">Te comparto plantillas e información GRATUITA que puedes encontrar en internet y te puede ayudar a mejorar tu #EducaciónFinanciera y en consecuencia tu #SaludFinanciera y #BienestarFinanciero. Espero te sea de utilidad!</div>
    <div class="d-flex justify-content-center my-4"><a href="blog_dinamico.php?titulo=EDUCACIÓN FINANCIERA GRATUITA" class="btn btn-primary animate__animated animate__pulse animate__infinite" type="button">Educación financiera gratuita</a>
    </div>
  
    <!--Empieza item articulo + modal-->
    <div class="  rounded mx-3 my-3 shadow" style="height: 284px; width: 220px;background-image: url('recursos/fondo_azul_gradiente.png');"><p class="text-white text-center mt-4">Encuesta perfil ahorro</p>
      <center><img class="img-fluid my-2" src="recursos/icon_excel.png" style="width: 40%;"></img></center>

      <!-- Vertically centered scrollable modal -->
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-light mt-4 fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal1" >
  Descargar archivo
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">...¡Un paso más para descargar tu recurso Gratuito!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <h4>Datos de contacto</h4>
      
       <!--Empieza formulario-->
       <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label fw-bold">Nombre</label>
        <input type="text" class="form-control" id="entrada_formulario_nombre1" placeholder="Escribe tu nombre aquí">
      </div>
      <div class="p mb-3 ms-2"  id="validador_nombre1" style="font-size:small;color: red;">Escribe un nombre válido</div>
      <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label fw-bold">Correo electrónico</label>
        <input type="email" class="form-control" id="entrada_formulario_correo1" placeholder="nombre@ejemplo.com">
      </div>
      <div class="p mb-3 ms-2" id="validador_correo1" style="font-size:small;color: red;">Escribe un correo electrónico válido</div>

      <div class="row justify-content-center my-2">
        <div class="col">
          <div class="form-check ms-1">
            <input class="form-check-input" type="checkbox" value="on" id="flexCheckChecked1">
            <label class="form-check-label" for="flexCheckChecked1">
             <a href="politica-de-privacidad.html" target="_blank">Acepto términos y condiciones</a> 
            </label>
           
          </div>
          <div class="p mb-3 ms-2" id="validador_terminos1" style="font-size:small;color: red;">Debes marcar esta casilla para decargar el recurso</div>
        </div>
      </div>
      <div class="row justify-content-center">
  
  <div class="col-4">   
  <div class=" btn btn-dark my-3 centered" id="boton_envio_datos">Enviar datos</div>
</div> 
    
    <div class="col-5 my-3">
    <a href="recursos/recursos_gratuitos/hp_encuesta_perfil_ahorro.xlsx"><button id="link_recurso1_modal" class=" btn btn-primary">Descargar recurso</button></a>
  </div>
  </div>

    <!--Termina formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
    </div>

    <!--Termina item articulo + modal-->
<!--Empieza item articulo + modal-->
<div class=" rounded mx-3 my-3 shadow" style="height: 284px; width: 220px;background-image: url('recursos/fondo_azul_gradiente.png');"><p class="text-white text-center mt-4">Encuesta perfil riesgo</p>
  <center><img class="img-fluid my-2" src="recursos/icon_excel.png" style="width: 40%;"></img></center>

  <!-- Vertically centered scrollable modal -->
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-light mt-4 fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal2" >
Descargar archivo
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">...¡Un paso más para descargar tu recurso Gratuito!</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    
    <h4>Datos de contacto</h4>
  
   <!--Empieza formulario-->
   <div class="mb-1">
    <label for="exampleFormControlInput1" class="form-label fw-bold">Nombre</label>
    <input type="text" class="form-control" id="entrada_formulario_nombre2" placeholder="Escribe tu nombre aquí">
  </div>
  <div class="p mb-3 ms-2"  id="validador_nombre2" style="font-size:small;color: red;">Escribe un nombre válido</div>
  <div class="mb-1">
    <label for="exampleFormControlInput1" class="form-label fw-bold">Correo electrónico</label>
    <input type="email" class="form-control" id="entrada_formulario_correo2" placeholder="nombre@ejemplo.com">
  </div>
  <div class="p mb-3 ms-2" id="validador_correo2" style="font-size:small;color: red;">Escribe un correo electrónico válido</div>
  
  <div class="row justify-content-center my-2">
    <div class="col">
      <div class="form-check ms-1">
        <input class="form-check-input" type="checkbox" value="on" id="flexCheckChecked2">
        <label class="form-check-label" for="flexCheckChecked2">
          <a href="politica-de-privacidad.html" target="_blank">Acepto términos y condiciones</a> 
        </label>
       
      </div>
      <div class="p mb-3 ms-2" id="validador_terminos2" style="font-size:small;color: red;">Debes marcar esta casilla para decargar el recurso</div>
    </div>
  </div>

  <div class="row justify-content-center">

<div class="col-4">   
<div class=" btn btn-dark mb-3 centered" id="boton_envio_datos2">Enviar datos</div>
</div> 

<div class="col-5">
<a href="recursos/recursos_gratuitos/hp_encuesta_perfil_riesgo.xlsx"><button id="link_recurso2_modal" class=" btn btn-primary">Descargar recurso</button></a>
</div>
</div>

<!--Termina formulario-->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    
  </div>
</div>
</div>
</div>
</div>

<!--Termina item articulo + modal-->
<!--Empieza item articulo + modal-->
<div class=" rounded mx-3 my-3 shadow" style="height: 284px; width: 220px;background-image: url('recursos/fondo_azul_gradiente.png');"><p class="text-white text-center mt-4">Plantilla estados financieros</p>
  <center><img class="img-fluid my-2" src="recursos/icon_excel.png" style="width: 40%;"></img></center>

  <!-- Vertically centered scrollable modal -->
<!-- Button trigger modal -->
<center><button type="button" class="btn btn-light mt-4 fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal3" >
Descargar archivo
</button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">...¡Un paso más para descargar tu recurso Gratuito!</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    
    <h4>Datos de contacto</h4>
  
   <!--Empieza formulario-->
   <div class="mb-1">
    <label for="exampleFormControlInput1" class="form-label fw-bold">Nombre</label>
    <input type="text" class="form-control" id="entrada_formulario_nombre3" placeholder="Escribe tu nombre aquí">
  </div>
  <div class="p mb-3 ms-2"  id="validador_nombre3" style="font-size:small;color: red;">Escribe un nombre válido</div>
  <div class="mb-1">
    <label for="exampleFormControlInput1" class="form-label fw-bold">Correo electrónico</label>
    <input type="email" class="form-control" id="entrada_formulario_correo3" placeholder="nombre@ejemplo.com">
  </div>
  <div class="p mb-3 ms-2" id="validador_correo3" style="font-size:small;color: red;">Escribe un correo electrónico válido</div>
  
  <div class="row justify-content-center my-2">
    <div class="col">
      <div class="form-check ms-1">
        <input class="form-check-input" type="checkbox" value="on" id="flexCheckChecked3">
        <label class="form-check-label" for="flexCheckChecked3">
          <a href="politica-de-privacidad.html" target="_blank">Acepto términos y condiciones</a> 
        </label>
       
      </div>
      <div class="p mb-3 ms-2" id="validador_terminos3" style="font-size:small;color: red;">Debes marcar esta casilla para decargar el recurso</div>
    </div>
  </div>

  <div class="row justify-content-center">

<div class="col-4">   
<div class=" btn btn-dark mb-3 centered" id="boton_envio_datos3">Enviar datos</div>
</div> 

<div class="col-5">
<!--<a href="php/descargas.php?path=../recursos/recursos_gratuitos/hp_plantilla_estados_financieros.xlsx"><button id="link_recurso3_modal" class=" btn btn-primary">Descargar recurso</button></a> -->
<a href="recursos/recursos_gratuitos/hp_plantilla_estados_financieros.xlsx"><button id="link_recurso3_modal" class=" btn btn-primary">Descargar recurso</button></a>

</div>
</div>

<!--Termina formulario-->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    
  </div>
</div>
</div>
</div>
</div>

<!--Termina item articulo + modal-->   
    

    
</div>



  <?php
  require "footer.php";
  ?>
  
  </body>
</html>