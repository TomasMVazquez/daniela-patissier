@extends('template')

@section('pageTitle','Mis Creaciones')

@section('mainContent')
<div class="titleTrayectoria">
    <h2>Mis Creaciones</h2>
</div>

<div class="conteinerImgs">
  <div class="oneImgs">
    <img src="\imgs\imgs\20190604_155711.jpg"
    alt="Petit Fours para eventos"
    style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190715_222447.jpg"
    alt="Torta Moderna baño espejo, babaroise chocolate blanco centro gelee de frutos rojos base crocante"
    style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190721_150039.jpg" alt="Torta Moderna cinco tecnicas Mousse de chocolate, gelee de frambuesa, biscuit de almendras, cremoso de avellanas, base crocante" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190810_170642.jpg" alt="Pasteleria boutique" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190810_210924.jpg" alt="Tortas clasicas, mousse de sambayon centro de chocolate base humeda">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190810_212126.jpg" alt="Petit Gateau babaroise de chocolate blanco con centro de maracuya y base crocante" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190818_114214.jpg" alt="Pasteleria de Vanguardia mousse de mascarpone cremoso de moras base sable" >
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190818_114436.jpg" alt="Mousse de chocolate 70%, cremoso de frambuesas,mousse de frutos rojos" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190818_114501.jpg" alt="Decoraciones en chocolate" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190818_114732.jpg" alt="Petit Gateau" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\20190818_114742.jpg" alt="Mezcla de texturas" style="transform: rotate(90deg);">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\budin_cortado.jpg" alt="Pasteleria para el Te">
  </div>

  <div class="oneImgs">
    <img src="\imgs\imgs\IMG_20180320_105026_332.jpg" alt="Pasteleria clasica Budin de limon">
  </div>

</div>
<br>
{{-- Instagram enbebed --}}
{{-- <div class='embedsocial-instagram' data-ref="7e4d014aae815b9f217d9a59ecc2c6ed2064a0b5"></div> --}}
@endsection

@section('js')
{{-- <script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/in.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialInstagramScript"));</script> --}}
@endsection
