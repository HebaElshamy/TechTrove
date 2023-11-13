<div class="modal fade" id="modal-delete{{$supplier->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Supplier</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to scan this supplier?</p>
        </div>
        <form action="{{route('destroy.supplier',$supplier->id)}}" method="post">
            <div class="modal-footer justify-content-between">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Delete</button>
            </div>
        </form>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
