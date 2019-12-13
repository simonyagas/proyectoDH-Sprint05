@extends('layouts.app')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@section('content')

  <div class="tituloybici">
      <i class="fas fa-biking fa-5x mt-4 d-flex justify-content-center"></i>
      <h1 class = "col-12"  >Queremos conocer tu opinión</h2>
    </div>

    <section class= "formulario mt-3">
      <form class="formuulario p-4 mb-5">
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Completo">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Como nos conociste?</label>
          <input type="contac" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>

        <div class="form-group">
       <label for="exampleFormControlTextarea1">Dejanos tu mensaje:</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      <button type="submit" class="btn text-white bg-dark">Enviar</button>
      </form>
      <section class = "mapa">
        <h2>Visitanos personalmente</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1864516967735!2d-58.44586488438904!3d-34.548834280473734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1567282332713!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </section>



        </div>














  @endsection
