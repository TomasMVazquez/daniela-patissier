@extends('template')

@section('pageTitle','Sobre Dani')

@section('mainContent')

  <div class="contenedorPrincipal">

    <h1>Daniela Damiano</h1>
    <br>

    <div class="contenedorSobre">

      <div class="imgSobre col-4">
        <img src="/imgs/dani_bandeja.jpg" alt="">
      </div>

      <div class="sobre col-md-8 col-lg-12">

        <h2>Sobre mí</h2>

        <div class="divider"></div>

        <br>
        <div class="boxAbout boxLeft">
          <h3>Pasteleria de vanguardia</h3>
          <div class="pastConteiner">
            <div class="imgPast">
              <img src="\imgs\imgs\20190604_155711.jpg"
              alt="Petit Fours para eventos"
              style="transform: rotate(90deg);">
            </div>
            <p>
              Tortas Modernas combinando diferentes técnicas, sabores y texturas para encontrar el equilibrio perfecto.
              Petit Gateau con el uso de Cremas Heladas, Mousses, Palet y Gelee.
              Templado de chocolate para bomboneria y decoración.
              Macarrons con diferentes centros, cremosos y frutales.
            </p>
          </div>
        </div>

        <br>
        <div class="boxAbout boxRight">
          <h3>Pasteleria comercial</h3>
          <div class="pastConteiner">
            <p>
              Pedidos creados para demandas específicas con decoración personalizada.
              Petit Fours dulces y salados.
              Pastelería para el té.
              Productos de panadería.
              Cookies Decoradas con formas y decoración a demanda.
            </p>
            <div class="imgPast">
              <img src="\imgs\imgs\IMG_20180320_105026_332.jpg" alt="Pasteleria clasica Budin de limon">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
