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
            <h4>Nueva Entrada</h4>
        
     <div class="row">

        <div class="col-xl-12">
        <form action="{{route('Blog.store')}}" method = "post">
            @csrf
            <div class="form-group">

            <label for="titulo">Titulo de Entrada</label>
            <input type="text" class="form-control" name = "titulo" required maxlength = "500">
            </div>

            <div class="form-group">

            <label for="descripcion">Breve descripcion</label>
            <input type="text" class="form-control" name = "descripcion" required maxlength = "500">
            </div>




           

<input type="submit" class="btn btn-danger" value = "Guardar Entrada">
<input type="submit" class="btn btn-warning" value = "Cancelar">
<a href="javascript:history.back()">VOLVER</a>
</div>

            
        </form>
        </div>
     </div>
  </div>
    </body>
</html>
