@extends('layout')

@section('contenido')

@include('includes.imagen-parallax', array('titulo' => 'TAQUIZAS Y EVENTOS'))

<div class="container">
    <div class="row p-4 mt-4 info-taquiza">
        <div class="col-6">
            <div class="col-12 descrip-taquiza text-center pt-3 pb-3">
                <h2>TAQUIZAS Y PARRILLAS A DOMICILIO</h2>
                <p>Parrilladas de bistec, chuleta, costilla y pastor. Los mejores momentos tienen nuestro sabor.</p>
                <p>Ya contamos con servicios en Toluca, Metepec, Valle de Bravo, Cuernavaca y Querétaro. Pregunta por nuestros precios.</p>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus et delectus pariatur? Voluptas sed voluptate, cum nemo est numquam, iste ea eligendi vel illo ad, hic harum sequi unde? Cupiditate</P>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt repudiandae vitae illo totam, sunt numquam harum ab, voluptate quidem laborum quas rerum delectus, saepe autem nulla nisi officia placeat animi.</p>
            </div>
        </div>
        <div class="col-6">
            <div class="col-12 p-0 m-0">
                <div class="card text-center formulario-cotizar">
                    <h5 class="card-header mb-2">Has una cotizacion para tu evento.</h5>
                    <form>
                        <div class="row p-3 text-center">
                            <div class="form-group col-6">
                                <label for="nombre" class="p-0 m-0">*Nombre</label>
                                <input type="text" class="form-control form-control-sm" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-6">
                                  <label for="tipo-servicio" class="p-0 m-0">*Tipo de servicio</label>
                                  <select class="form-control form-control-sm" id="tipo-servicio">
                                      <option>Servicio 1</option>
                                      <option>Servicio 2</option>
                                      <option>Servicio 3</option>
                                      <option>Servicio 4</option>
                                      <option>Servicio 5</option>
                                    </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="email" class="p-0 m-0">*Email</label>
                                <input type="email" class="form-control form-control-sm" id="nombre" placeholder="Email">
                            </div>
                            <div class="form-group col-6">
                                <label for="numero" class="p-0 m-0">*Numero de personas</label>
                                <input type="number" class="form-control form-control-sm" id="numero" value="30">
                            </div>
                            <div class="form-group col-6">
                                <label for="telefono" class="p-0 m-0">*Telefono</label>
                                <input type="tel" class="form-control form-control-sm" id="telefono" placeholder="Telefono">
                            </div>
                            <div class="form-group col-6">
                                <label for="fecha-evento" class="p-0 m-0">*Fecha del evento</label>
                                <input type="date" class="form-control form-control-sm" id="fecha-evento">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-danger btn-lg">Cotizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--  FINALIZAR INFORMACION CONTACTO  --}}

    <div class="row mt-4">
        <div class="col-4">
            <div>
                <div class="tabla-precio">
                    <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                    <ul>
                        <li>
                            <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                        </li>
                        <li>
                            <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-4">
                <div>
                    <div class="tabla-precio">
                        <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                        <ul>
                            <li>
                                <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>

        <div class="col-4">
                <div>
                    <div class="tabla-precio">
                        <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                        <ul>
                            <li>
                                <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>

        <div class="col-4">
                <div>
                    <div class="tabla-precio">
                        <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                        <ul>
                            <li>
                                <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                            </li>
                            <li>
                                <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-4">
                    <div>
                        <div class="tabla-precio">
                            <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                            <ul>
                                <li>
                                    <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>

            <div class="col-4">
                    <div>
                        <div class="tabla-precio">
                            <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                            <ul>
                                <li>
                                    <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>

            <div class="col-4">
                    <div>
                        <div class="tabla-precio">
                            <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                            <ul>
                                <li>
                                    <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                                </li>
                                <li>
                                    <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                        <div>
                            <div class="tabla-precio">
                                <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                                <ul>
                                    <li>
                                        <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                                    </li>
                                    <li>
                                        <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                                    </li>
                                    <li>
                                        <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>

                <div class="col-4">
                        <div>
                            <div class="tabla-precio">
                                <h4 class="text-center">PARRILLADA MIXTA CON QUESO</h4>
                                <ul>
                                    <li>
                                        <b>PASTOR, BISTEC, CHORIZO, CHULETA, QUESO</b>
                                    </li>
                                    <li>
                                        <p class="p-0 m-0"><span>COMPLEMENTOS</span> Salsa Roja, Salsa Verde, Salsa Mexicana, Cilantro, Cebolla, Piña y Limones</p>
                                    </li>
                                    <li>
                                        <p class="p-0 m-0"><span>CORTESÍA</span> Tortillas de Harina, Cebollitas Cambray, Verdura para Alambres</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
    </div>

    <div class="row">
            <div class="col-6">
                <b>Todas las opciones anteriores incluyen:</b>
                <ul>
                    <li>2 horas de servicio de comida</li>
                    <li>Supervisor responsable</li>
                    <li>Personal uniformado y capacitado</li>
                    <li>Bolsas para la basura</li>
                    <li>Servilletas, platos y tenedores desechables</li>
                    <li>Saleros y servilleteros</li>
                    <li>Tortillas de maíz</li>
                </ul>
            </div>
            <div class="col-6">
                <b>NOTAS: </b>
                <ul>
                    <li>Todas las opciones de taquizas incluyen 8 tacos por persona</li>
                    <li>Podemos incluir costilla en nuestras taquizas con un costo adicional</li>
                    <li>Los productos que manejamos son elaborados con materias primas de primera calidad</li>
                    <li>En caso de que el evento se realice fuera del D.F. se cobrará el flete por separado</li>
                    <li>Para confirmar su evento será necesario contar con un anticipo del 50%, 48 horas antes del mismo</li>
                </ul>
            </div>
    </div>

</div>

@stop
