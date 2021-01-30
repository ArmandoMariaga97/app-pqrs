@extends('layouts.home')

@section('contenido')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                <div align="center" class="card-body">
                  <span class="card-title text-center">
                    <img src="/img/logo.png" class="img-fluid mx-auto d-block pt-2"
                    width="250" alt="logo">
                  </span>
                  <span style="color:green;">Expertos en soluciones Tic.</span>
                </div>
                <hr>
                <div class="card-body text-center">
                  <h3><b>PROCESO DE GARANTIAS</b></h3>
                  <p> 
                    Aquí podrá gestionar los PQRS de sus empresas aliadas.
                  </p>
                </div>
                <hr>
                <div class="row justify-content-center">
                  <div class="col-md-10 mt-1">
                    <a style="width:100%;" href="{{ route('login') }}" class="btn btn-success">
                      Inisiar sesión
                    </a>
                  </div>
                  <div class="col-md-10 mt-1">
                    <a style="width:100%;" href="{{ route('register') }}" class="btn btn-primary">
                      Registrarme
                    </a>
                  </div>
                  <div class="col-md-10 mt-1">
                    <a style="width:100%;" data-toggle="modal" data-target="#bounceIn" class="btn btn-warning text-white">
                      Terminos y condiciones
                    </a>
                  </div>

                  @push('modals')
                    <div class="modal animated bounceIn text-left" id="bounceIn" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel46" aria-hidden="true">
                            <div style="border:solid 2px #FF8432; border-radius:8px;" class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div style="background:#FF8432;" class="modal-header">
                                  <h4 align="center" class="modal-title text-white" id="myModalLabel46">TERMINOS Y CONDICIONES</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div align="justify" class="modal-body">
                                  <p>ACTIVEPQRS es un Software desarollado para contribuir al proceso de solucion a peticiones
                                    quejas y reclamos de los clientes brindando una atencion que genere la satisfaccion del usuario final.
                                    El uso de este portal web confirma la aceptación y conocimiento de estos Términos y
                                    Condiciones y su conformidad para con los derechos y obligaciones que estos conllevan.
                                    Quien ingrese al portal web es responsable por la veracidad y precisión de los datos
                                    suministrados para el diligenciamiento de las PQRS. En consecuencia, cualquier error o
                                    imprecisión en ellos, especialmente en los datos de identificación, correo electrónico o dirección
                                    de notificaciones para el envío de las respuestas a las PQRS presentadas, serán de su exclusiva
                                    responsabilidad, exonerando a ACTIVE PQRS de cualquier reclamación por esta circunstancia.</p>
                                  <p>El portal de PQRS de ACTIVE PQRS es una herramienta que permite un canal de
                                    comunicación para la recepción y respuesta a peticiones, quejas, reclamos o sugerencias que
                                    cualquier persona natural o jurídica requiera interponer ante la entidad.
                                    SATISFACCIÓN DEL SERVICIO</p>
                                  <p>II. CONTENIDO DE LAS PQRS Y REQUISITOS PARA PRESENTARLAS
                                      De acuerdo con lo establecido en el artículo 23 de la Constitución Política de Colombia y en la Ley
                                      1755 de 2015, todas las personas están facultadas para la presentación de PQRS ante cualquier
                                      entidad pública o privada.</p>
                                  <p>Las PQRS presentadas por medio del portal web de ACTIVE PQRS deberán contener como
                                      mínimo los siguientes aspectos:
                                      <br>
                                      a. Nombres y apellidos completos del solicitante, de su representante y/o apoderado (de ser el
                                      caso) o razón social.
                                      <br>
                                      b. Indicar el documento de identidad del solicitante y/o número de identificación de la persona a
                                      la que se representa.
                                      <br>
                                      c. Indicar la dirección donde recibirá la respuesta a su solicitud (dirección física y/o correo
                                      electrónico).
                                      <br>
                                      d. El objeto de la PQRS y las razones en las que se fundamenta.
                                      <br>
                                      e. Los documentos que desee presentar para iniciar el trámite.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                    </div>
                  @endpush


                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>



@endsection
