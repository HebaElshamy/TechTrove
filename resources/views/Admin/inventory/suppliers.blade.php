@extends('Admin.layouts.app')
@section('style')
@include('Admin.includes.DataTables.style')
@endsection
@section('head_title','All Suppliers')
@section('active','Suppliers')
@section('content')
<div class="row">

    @include('Admin.includes.errors')


    <div class="col-12">
        @include('Admin.inventory.includes.addsupplier')
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Supplier Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @include('Admin.inventory.includes.allsuppliers')
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Supplier Name</th>
                        <th>Phone</th>
                        <th>Email</th>

                        <th>Action</th>
                    </tr>
                </tfoot>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
@section('script')
    @include('Admin.includes.DataTables.script')
@endsection
