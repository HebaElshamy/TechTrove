<form action="{{route('store.category')}}" method="POST">
    @csrf
    <div class="card card-primary collapsed-card">

    <div class="card-header">
      <h3 class="card-title">Add Category</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>

        <div class="card-body">
        <div class="form-group">
            <label for="inputName">Category Name</label>
            <input type="text" id="inputName" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputDescription">Category Description</label>
            <textarea id="inputDescription" class="form-control" rows="4" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="inputStatus">Status</label>
            <select id="inputStatus" class="form-control custom-select" name="status">
            <option selected disabled>Select Status</option>
            <option value="hold">Holding</option>
            <option value="canceled">Canceled</option>
            <option value="available">Available</option>
            </select>
        </div>

        <div class="form-group">

            <input type="submit" value="Create new Category" class="btn btn-primary float-right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <a href="#" class="btn btn-secondary">Cancel</a>
            </button>
        </div>
        </div>

    <!-- /.card-body -->
  </div>
</form>
