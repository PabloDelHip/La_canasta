@extends('layout')

@section('contenido')

@include('includes.imagen-parallax', array('titulo' => 'MENU'))

<div class="container">
    <div class="row">
        <div class="col-8 lista-menu mt-4">
            <div class="col-12">
                    <ul class="menu-items" style="display: inline-block;">
                           <a href="#tacos" class="activo-menu" >
                            <li >
                                <h3>Tacos</h3>
                            </li>
                           </a>

                           <a href="#tortas">
                            <li>
                                <h3>Tortas</h3>
                            </li>
                           </a>

                           <a href="#especialidades">
                            <li>
                                <h3>Especialidades</h3>
                            </li>
                           </a>

                           <a href="#bebidas">
                            <li>
                                <h3>Bebidas</h3>
                            </li>
                           </a>
                        </ul>
            </div>
            {{-- FINAL MENU --}}

            <div id="tacos" class="col-12 p-4 contenedor-platillos">
                <div class="row mb-3">
                    <div class="col-2">
                        <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                    </div>
                    <div class="col-8 text-center p-0">
                        <h4>Taco de res</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                    </div>
                    <div class="col-2 text-center pt-0 mt-0">
                        <p class="p-0 m-0"><span>$ </span>20.00</p>
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-2">
                            <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                        </div>
                        <div class="col-8 text-center p-0" >
                            <h4 >Taco de res</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                        </div>
                        <div class="col-2 text-center">
                            <p class="p-0 m-0"><span>$ </span>20.00</p>
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Taco de res</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Taco de res</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                            </div>


            </div>

            <div id="tortas" class="col-12 p-4 contenedor-platillos">
                <div class="row mb-3">
                    <div class="col-2">
                        <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                    </div>
                    <div class="col-8 text-center p-0">
                        <h4>Torta de pollo</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                    </div>
                    <div class="col-2 text-center pt-0 mt-0">
                        <p class="p-0 m-0"><span>$ </span>20.00</p>
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-2">
                            <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                        </div>
                        <div class="col-8 text-center p-0" >
                            <h4 >Torta de pollo</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                        </div>
                        <div class="col-2 text-center">
                            <p class="p-0 m-0"><span>$ </span>20.00</p>
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Torta de pollo</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Torta de pollo</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                            </div>


            </div>

            <div id="especialidades" class="col-12 p-4 contenedor-platillos">
                <div class="row mb-3">
                    <div class="col-2">
                        <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                    </div>
                    <div class="col-8 text-center p-0">
                        <h4>Especialidades</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                    </div>
                    <div class="col-2 text-center pt-0 mt-0">
                        <p class="p-0 m-0"><span>$ </span>20.00</p>
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-2">
                            <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                        </div>
                        <div class="col-8 text-center p-0" >
                            <h4 >Especialidades</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                        </div>
                        <div class="col-2 text-center">
                            <p class="p-0 m-0"><span>$ </span>20.00</p>
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Especialidades</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Especialidades</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                            </div>


            </div>

            <div id="bebidas" class="col-12 p-4 contenedor-platillos">
                <div class="row mb-3">
                    <div class="col-2">
                        <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                    </div>
                    <div class="col-8 text-center p-0">
                        <h4>Bebidas</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                    </div>
                    <div class="col-2 text-center pt-0 mt-0">
                        <p class="p-0 m-0"><span>$ </span>20.00</p>
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row mb-3">
                        <div class="col-2">
                            <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                        </div>
                        <div class="col-8 text-center p-0" >
                            <h4 >Bebidas</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                        </div>
                        <div class="col-2 text-center">
                            <p class="p-0 m-0"><span>$ </span>20.00</p>
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Bebidas</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2">
                                <img src="http://placeimg.com/110/100/nature" alt="xcaret" class="img-fluid p-0 m-0">
                            </div>
                            <div class="col-8 text-center p-0" >
                                <h4 >Bebidas</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolores explicabo doloribus tempora, cumque ab reiciendis incidunt ducimus </p>
                            </div>
                            <div class="col-2 text-center">
                                <p class="p-0 m-0"><span>$ </span>20.00</p>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                            </div>


            </div>
        </div>
        {{-- FINAL MENU COMPLETO --}}

        <div class="col-4 mt-5">
            <div class="text-center pt-3 tabla-pedido">
                <p>MI PEDIDO</p>
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col"> Producto</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Importe</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Taco de Mole Verde</td>
                            <td>3</td>
                            <td>$ 10</td>
                            <td>$ 30</td>
                            <td class="tabla-iconos">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            </td>
                          </tr>
                          <tr>
                            <td>Coca cola</td>
                            <td>1</td>
                            <td>$ 12</td>
                            <td>$ 12</td>
                            <td class="tabla-iconos">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            </td>
                          </tr>
                        </tbody>
                </table>
                {{-- FINAL TABLA PEDIDO --}}
                <div class="col-12 total-pagar">
                    <div class="row pt-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-warning btn-sm mb-3"> Solicitar pedido</a>
                            <a href="#" class="btn btn-danger btn-sm">Limpiar pedido</a>
                        </div>
                        <div class="col-6">
                            <p class="p-0 m-0">Total a pagar <b>$50.00</b> </p>
                            <p class="p-0 m-0">Precios en pesos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
