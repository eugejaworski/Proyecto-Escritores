
@extends('layouts.mainuser')
@section('content')

  @foreach ($escritos as $key => $value)

    <div class="EscritoInd">
      <h2 class="title-me">"{{$value->title}}"</h2>
      <h2 class='subtitle'>{{$value->subtitle}}</h2>
      <h6 class="escritor"></h6>
      <div class="fondo-escrito">
        <p class="body">
           {{$value->body}}
         </p>
       </div>
       <p class="likes-me">
         <strong>{{$value->likes}} </strong>
         <i class="fas fa-thumbs-up"></i>
        </p>
      </div>
    </div>
   @endforeach

@endsection
