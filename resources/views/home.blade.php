
@extends('layout')

@section('contenido')

<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/slider__copia_2.jpg" alt="Slider - copia (2)" title="Slider - copia (2)" id="wows1_0"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/slider__copia.jpg" alt="css image slider" title="Slider - copia" id="wows1_1"/></a></li>
		<li><img src="data1/images/slider.jpg" alt="Slider" title="Slider" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Slider - copia (2)"><span><img src="data1/tooltips/slider__copia_2.jpg" alt="Slider - copia (2)"/>1</span></a>
		<a href="#" title="Slider - copia"><span><img src="data1/tooltips/slider__copia.jpg" alt="Slider - copia"/>2</span></a>
		<a href="#" title="Slider"><span><img src="data1/tooltips/slider.jpg" alt="Slider"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    {{--  FINAL WOOSLIDER  --}}

<div class="degradado mb-5 p-0" ></div>
{{--  DEGRADADO  --}}

<div class="container">
    <div class="row align-content-right">
        <div class="col-6 mt-4 text-justify nuestra-historia "
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
            data-aos-once="true">

                <div class="text-center ">
                    <p class="h2 titulo">NUESTRA HISTORIA</p>
                </div>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore eos quae soluta eius cumque, neque veritatis quaerat temporibus aliquam placeat libero cupiditate iusto reprehenderit! Tempora reiciendis alias corrupti eaque perspiciatis.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore eos quae soluta eius cumque, neque veritatis quaerat temporibus aliquam placeat libero cupiditate iusto reprehenderit! Tempora reiciendis alias corrupti eaque perspiciatis.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore eos quae soluta eius cumque, neque veritatis quaerat temporibus aliquam placeat libero cupiditate iusto reprehenderit!
        </div>
        <div class="col-6" style=" height: 346px;"
            data-aos="fade-left"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
            data-aos-once="true">

        </div>
    </div>
    {{--  FINAL HISTORIA   --}}

    <div class="row mt-5 los-tacos pt-3" data-aos="zoom-in" data-aos-once="true" data-aos-duration="700">
        <div class="col-12 text-center">
            <h1 class="titulo">Los mejores tacos en Cancún</h1>
        </div>
        <div class="col-4 text-center">
            <img src="{{ url('/images/tacos1.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
            <h3>Tacos</h3>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, est saepe sequi deserunt porro accusamus nesciunt iste recusandae ipsa atque voluptate incidunt. Temporibus deserunt possimus accusamus ipsa accusantium repellendus velit.</p>
        </div>

        <div class="col-4 text-center">
            <img src="{{ url('/images/tacos2.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
            <h3>Tacos</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio delectus fugiat sunt voluptate maiores tempora soluta eius ipsum minima consectetur similique mollitia quas pariatur quisquam magnam cupiditate, dolorem placeat repellat!</p>
        </div>

        <div class="col-4 text-center" >
            <img src="{{ url('/images/tacos3.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
            <h3>Tacos</h3>
            <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia dicta quos, esse culpa molestiae corrupti vel quae fugiat quaerat. Iusto alias deserunt illo dolor quidem ratione voluptate numquam, reiciendis repudiandae</p>
        </div>
    </div>
    {{--  FINALMEJORESTACOS  --}}

    <div class="row justify-content-center mt-4 servicios parallax-window" data-parallax="scroll" data-image-src="{{ url('/images/parallax-tacos.png') }}">
        <div class="col-6 text-center p-2 mb-3">
            <h3>SERVICIOS</h3>
        </div>

        <div class="w-100"></div>

        <div class="col-4 text-center mb-4" data-aos="flip-left" data-aos-duration="1000" ata-aos-once="true">
            <img src="{{ url('/images/servicio1.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
        </div>

        <div class="col-4 text-center mb-4" data-aos="flip-up" data-aos-duration="2000" ata-aos-once="true">
            <img src="{{ url('/images/servicio2.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
        </div>

        <div class="col-4 text-center mb-4" data-aos="flip-right" data-aos-duration="3000" ata-aos-once="true">
            <img src="{{ url('/images/servicio3.png') }}" alt="xcaret" class="img-fluid p-0 m-0">
        </div>
    </div>
    {{--  FINAL IMAGENES SERVICIOS  --}}

    <div class="row">
        <div class="col-12 text-center">
            <h3 class="mt-5 titulo">UBICACION</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14881.432042655955!2d-86.85716564999998!3d21.1779324!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1527566730216" width="1150" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


</div>


@stop

