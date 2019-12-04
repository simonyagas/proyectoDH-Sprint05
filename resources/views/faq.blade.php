@extends('layouts.app')
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
@section('content')

  <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                <div class="container">

                      <h2>Preguntas Frecuentes </h2>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                            <h3 class="panel-title">
                              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                Hay cambios o devoluciones?
                              </a>
                            </h3>
                          </div>
                          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                            <div class="panel-body px-3 mb-4">
                              <p>No, no se realizan cambios ni devoluciones.</p>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                            <h3 class="panel-title">
                              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                      Como se realiza la entrega del producto?
                              </a>
                            </h3>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body px-3 mb-4">
                                  <p>La entrega es pactada en un lugar y horario especifico con las vendedoras que se contactaran con el cliente via Instagram.</p>                          </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                            <h3 class="panel-title">
                              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                      Puedo usar la cuerda con otras fundas?
                              </a>
                            </h3>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body px-3 mb-4">
                                  <p>Por ahora en la version inicial de lanzamiento cada cuerda viene con su funda única; Próximamente lanzaremos un nueva version de cuerdas donde se pueden intercambiar cuerdas y fundas! Stay tuned!!</p>                          </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                            <h3 class="panel-title">
                              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                      Como se realiza el pago?
                              </a>
                            </h3>
                          </div>
                          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body px-3 mb-4">
                                  <p>El pago se realiza via transferencia o en efectivo a la entrega del producto.
  </p>                          </div>
                          </div>
                        </div>
                      </div>

                  </div>
                </section>













  @endsection
