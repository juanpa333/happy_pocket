         <!--Inicia modal-->
         <!-- Button trigger modal -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
            <div class="row fixed-bottom">
                <div class="col-9"></div>
                <div class="col">
                        <div class="mb-5 mx-3"><button  type="button" class="text-primary fst-italic border border-primary border-3 btn animate__animated animate__pulse animate__infinite " style="background-color:orange" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Suscríbete a la newsletter</button></div>
                </div>
                                                            
            </div>

            </div>
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-md-start">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suscripción a la Newsletter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="">
          <label for="entrada_nombre_nl_index" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="entrada_nombre_nl_index" placeholder="Escriba su nombre">
        </div>
        <div id="validacion_nl_index_nombre" class=" text-danger" style="height:25px;font-size: smaller;">
         Escriba un nombre valido
        </div>
        <div class="mt-3">
          <label for="entrada_correo_nl_index" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="entrada_correo_nl_index" placeholder="nombre@ejemplo.com">
        </div>
        <div id="validacion_nl_index_correo" class=" text-danger" style="height:25px;font-size: smaller;">
          Escriba un correo valido
         </div>
        <div class="form-check mt-3">
          <input class="form-check-input" type="checkbox" value="on" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault" id="etiqueta_acepto">
           <a href="politica_de_privacidad.php"> Acepto términos y condiciones</a>
          </label>
         
        </div>
        <div id="validacion_nl_index_tyc" class=" text-danger" style="height:25px;font-size: smaller;">
          debe marcar la casilla de terminos y condiciones
          </div>
       
      </div>
      <div class="modal-footer">
        <button id="boton_cerrar_modal_newsletter" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" id="enviar_datos_nl_index" class="btn btn-primary">Enviar datos</button>
      </div>
    </div>
  </div>
</div>
         <!--termina modal-->
         