<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
 <div class="container">
            <h4>Editar blog</h4>
        
     <div class="row">

        <div class="col-xl-12">
        <form action="{{route('Blog.update',$blog->id)}}" method = "post">
            @csrf
            @method ('PUT')
            <div class="form-group">

            <label for="titulo">Titulo entrada en el blog</label>
            <input type="text" class="form-control" name = "titulo" required maxlength = "500" value ="{{$blog->titulo}}">
            </div>

            <div class="form-group">

            <label for="descripcion">Descripcion de la entrada</label>
            <input type="text" class="form-control" name = "descripcion" required maxlength = "500" value ="{{$blog->descripcion}}">
            </div>

            


<input type="submit" class="btn btn-primary" value = "guardar">
<input type="submit" class="btn btn-default" value = "cancelar">
<a href="javascript:history.back()">Volver al indice</a>
</div>

            
        </form>
        </div>
     </div>
  </div>
    </body>
</html>
