<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BLOG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">
       <div class="container">
       <div class="col-xs-12"> <!-- CENTRADR-->
    <div class="center-block">
    
<h4 class="align-items-cente">FISHEMANÍA!</h4>
<h7 class="align-items-cente">Blog sobre las creaturas que habitan el mundo desde hace 480 millones de años</h7>
<div class = "container">
       <div class="row">
       
        
            <form action="{{route('Blog.index')}}" method = "get">
            <div class="col-auto my-1" value = "crear">
                
                <a href="{{route('Blog.create')}}" class = "btn btn-primary center">Nueva Entrada</a>
            </div>

            </form>


        <tbody> <!-- tabla de contenido-->
        @foreach($blog as $bl) <!-- Para cada variable de los datos de la tabla como bl-->

        <div class="card" style="width: 20rem; float:left">
        <img src="{{asset('images/Dunkleusteus.png')}}" class="card-img-center" alt="...">
  <div class="card-body">
    <h4 class="card-title">{{$bl->id}} {{$bl->titulo}}</h4>
    <p class="card-text">Descripcion: {{$bl->descripcion}} </p>
    <a href="{{route('Blog.edit',$bl->id)}}" class = "btn btn-warning btn-sm"> Editar </a>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$bl->id}}">
  Eliminar
            </button>
  </div>
</div>
<br>
                
                
            
            @include('Blog.delete')
        @endforeach
        </tbody>
        
        
        
</div>
       </div>
       </div>
       </div>
</div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
