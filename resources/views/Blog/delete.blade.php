<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$bl->id}}" tabindex= "-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('Blog.destroy',$bl->id)}}" method="post">
  @csrf
  @method('DELETE')
           
           
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">ELIMINAR ENTRADA DEL BLOG</h3>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Seguro que desea eliminar?"{{$bl->titulo}}"
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <input type="submit" class = "btn btn-danger btn-sm" value= "eliminar">
      </div>
    </div>
    </form>
  </div>
</div>
