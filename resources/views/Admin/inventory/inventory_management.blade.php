@extends('Admin.layouts.app')
@section('style')
@include('Admin.includes.DataTables.style')
@endsection
@section('head_title','All Stock')
@section('active','Stock Management')
@section('content')
<div class="row">
    @include('Admin.includes.errors')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Number Of Products :&ensp;{{ $product_stock->count()}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Stock Status</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Number of orders</th>


                </thead>
                <tbody>
                    @include('Admin.inventory.includes.allstock')
                </tbody>
                <tfoot>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Stock Status</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Number of orders</th>
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
