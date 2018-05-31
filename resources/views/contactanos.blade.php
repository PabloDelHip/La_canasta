@extends('layout')

@section('contenido')
    @include('includes.imagen-parallax', array('titulo' => 'CONTACTANOS'))
    <div class="container">
            <div class="row">
                <div class="col-8 lista-menu mt-4">
                    <div class="col-12 p-4 mb-3 formulario-contacto">
                        <form>
                            <div class="form-group col-5">
                                <label for="nombre">*Nombre:</label>
                                <input type="text" class="form-control form-control-sm" id="nonbre" required>
                            </div>
                            <div class="form-group col-5">
                                <label for="correo">*Correo Electronico:</label>
                                <input type="email" class="form-control form-control-sm" id="correo" required>
                            </div>
                            <div class="form-group col-5">
                                <label for="telefono">Telefono:</label>
                                <input type="tel" class="form-control form-control-sm" id="telefono">
                            </div>
                            <div class="form-group col-12">
                                <label for="peticion">Petición</label>
                                <textarea name="peticion" class="form-control form-control-sm" id="peticion" rows="3"></textarea>
                            </div>
                            <input type="submit" value="Enviar" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
                {{-- FINAL MENU COMPLETO --}}

                <div class="col-4 mt-4">
                    <div class="nuestra-ubicacion pt-3 pb-3">
                        <p class="h3 m-0 p-0">Nuestra Ubicación</p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i><b> Direccion:</b>
                        <p>Leibnitz #51-C Col. Anzures México, D.F.</p>
                        <i class="fa fa-phone" aria-hidden="true"></i><b> Telefonos:</b>
                        <p>
                            52.50.99.08 / 52.55.22.46
                        </p>
                        <i class="fa fa-envelope" aria-hidden="true"></i><b> Email:</b>

                        <a href="#">ventas@lacanastamagica.com</a>
                    </div>
                </div>
                {{--  FINAL DATOS CONTACTO  --}}

                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="mt-5 titulo">UBICACION</h3>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14881.432042655955!2d-86.85716564999998!3d21.1779324!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1527566730216" width="1150" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
@stop
