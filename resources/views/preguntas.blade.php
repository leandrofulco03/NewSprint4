@extends('layouts.default')
@section('Titulo', 'Preguntas Frecuentes')
@section('content')

  <div class="container container1" style="margin-top: -45px; padding-bottom: 10px; padding-top: 70px;">

  <div class="container" style="margin-bottom: 35px;">
    <div class="accordion" id="accordionExample">
  <div class="card" style="background: rgba(0,0,0,.5);">
      <h1 id="titulo1" align="center" style="font-family: 'Voltaire', sans-serif; padding-bottom: 50px; color:  #ffea00;">PREGUNTAS FRECUENTES</h1>
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2 style="text-align: left;  font-size: 22px;">¿Cómo me registro?</h2>
        </button>
      </h2>
    </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
     <div class="card-body">
        <p style="color: white;">En la parte superior de la pagina de inicio podra encontrar un boton llamado "Regístrarse", tendrá que ingresar y ahi mismo colocar los datos correspondientes para su registro. </p>
     </div>
   </div>
 </div>

<div class="card" style="background: rgba(0,0,0,.5);">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <h2 style="text-align: left; font-size: 22px;">¿En qué se basa el juego?</h2>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
          <p style="color: white;">El juego se basa en cuánto saben los jugadores sobre los simpson. </p>
          </div>
        </div>
      </div>

      <div class="card" style="background: rgba(0,0,0,.5);">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <h2 style="text-align: left; font-size: 22px;">¿Cómo subo de nivel?</h2>
            </button>
          </h2>
        </div>
            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
         <div class="card-body">
             <p style="color: white;">Cúanto mas vayas acertando respuestas correctas, más puntos vas a sumar y eso hara que puedas subir de nivél. </p>
         </div>
       </div>
      </div>

      <div class="card" style="background: rgba(0,0,0,.5);">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              <h2 style="text-align: left; font-size: 22px;">¿Qué pasa si pierdo mucho?</h2>
            </button>
          </h2>
        </div>
            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
         <div class="card-body">
             <p style="color: white;">Tu ranking ira descendiendo hasta llegar al último lugar.</p>
         </div>
       </div>
      </div>

      <div class="card" style="background: rgba(0,0,0,.5);">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              <h2 style="text-align: left; font-size: 22px;">¿Cúales son las reglas del juego? </h2>
            </button>
          </h2>
        </div>
            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
         <div class="card-body">
             <p style="color: white;">El usuario tendrá diferentes opciones para elegir la cual una podrá ser correcta y las demás incorrectas. </p>
         </div>
       </div>
      </div>

      <div class="card" style="background: rgba(0,0,0,.5);">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
              <h2 style="text-align: left; font-size: 22px;">¿Puedo elegir más de una opción? </h2>
            </button>
          </h2>
        </div>
            <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
         <div class="card-body">
           <p style="color: white;">En las preguntas indicará si habrá mas de una opción para elegir.</p>
         </div>
         </div>
       </div>

       <div class="card" style="background: rgba(0,0,0,.5);">
         <div class="card-header" id="headingSeven">
           <h2 class="mb-0">
             <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
               <h2 style="text-align: left; font-size: 22px;">¿Se obtiene algún premio?</h2>
             </button>
           </h2>
         </div>
             <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            <p style="color: white;">Se asignarán ápodos acordes al buen o mal resultado que obtengas.</p>
          </div>
          </div>
        </div>

         <div class="card" style="background: rgba(0,0,0,.5);">
           <div class="card-header" id="headingNine">
             <h2 class="mb-0">
               <button class="btn btn-link" style="color:  #ffea00;" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                 <h2 style="text-align: left; font-size: 22px;">¿Utilizan algún tipo de moneda ficticia dentro del juego para poder obtener pistas o resolver mas acertadamente? </h2>
               </button>
             </h2>
           </div>
               <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
              <p style="color: white;">Por el momento no implementamos ese método.</p>
            </div>
            </div>
          </div>



      </div>

@section('footer')

@endsection


@endsection
