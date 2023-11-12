@extends('Admin.layouts.app')
@section('style')
@include('Admin.includes.DataTables.style')
@endsection
@section('head_title','All Products')
@section('active','Products')
@section('content')

<div class="row">
    @include('Admin.includes.errors')
    <div class="col-12">
        <div class="card card-primary collapsed-card">

            <div class="card-header">
              <h3 class="card-title">Add Product</h3>
              <div class="card-tools">
                <a href="{{route('add.product')}}"  class="btn btn-tool" >
                  <i class="fas fa-plus"></i>
                </a>
              </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Status</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @include('Admin.products.includes.allproducts')



                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Status</th>
                        <th>Stock</th>
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

