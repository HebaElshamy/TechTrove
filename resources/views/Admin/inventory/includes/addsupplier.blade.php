<form action="{{route('store.supplier')}}" method="POST">
    @csrf
    <div class="card card-primary collapsed-card">

    <div class="card-header">
      <h3 class="card-title">Add Supplier</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </div>

        <div class="card-body">
        <div class="form-group">
            <label for="inputName">Supplier Name *</label>
            <input type="text" id="inputName" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="inputName">Phone *</label>
            <input type="text" id="inputName" name="mobile_no" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputName">Email *</label>
            <input type="text" id="inputName" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputName">Address *</label>
            <input type="text" id="inputName" name="address" class="form-control">
        </div>

        <div class="form-group">

            <input type="submit" value="Add New Supplier" class="btn btn-primary float-right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <a href="#" class="btn btn-secondary">Cancel</a>
            </button>
        </div>
        </div>

    <!-- /.card-body -->
  </div>
</form>
