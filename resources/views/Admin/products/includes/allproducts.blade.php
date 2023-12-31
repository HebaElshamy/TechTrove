@forelse ($products as $key =>$product)
<tr>
    <td>{{$key+1}}</td>
    <td>{{$product->name}}</td>
    @if ($product->status =='hold')
            <td ><span class="badge badge-warning ">Holding</span></td>
        @elseif ($product->status =='available')
            <td ><span class="badge badge-success ">Aavailable</span></td>
        @elseif ($product->status =='canceled')
            <td ><span class="badge badge-danger ">Canceled</span></td>
        @endif

    <td>{{$product->stock}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->category->name}}</td>
    <td>
      <ul class="table-controls d-flex justify-content-around list-unstyled ">
          <li style="font-size: 1.3rem">
              <a href="{{route('show.product',$product->id)}}" class="text-primary" >

                  <i class="fas fa-folder"></i>

              </a>

          </li>
          <li style="font-size: 1.3rem">
              <a href="{{route('edit.product',$product->id)}}" class="text-success ">

                  <i class="fas fa-pencil-alt"></i>

              </a>


          </li>
          <li style="font-size: 1.3rem">
              <a href="" class="text-danger " data-toggle="modal" data-target="#modal-delete{{$product->id}}">
                  <i class="fas fa-trash"></i>
              </a>
              @include('Admin.products.includes.deleteproduct')
          </li>
      </ul>
     </td>
</tr>
@empty
<tr class="odd">
    <td style="color:  #dc3545" valign="top" colspan="7" class="dataTables_empty">No product available in table</td>
</tr>
@endforelse
