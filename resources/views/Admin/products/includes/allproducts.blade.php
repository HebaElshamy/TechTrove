@forelse ($products as $key =>$product)
<tr>
    <td>{{$key+1}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->status}}</td>
    <td>{{$product->stock}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->category->name}}</td>
    <td>
      <ul class="table-controls d-flex justify-content-around list-unstyled ">
          <li style="font-size: 1.3rem">
              <a href="{{route('show.product',1)}}" class="text-primary" >

                  <i class="fas fa-folder"></i>

              </a>

          </li>
          <li style="font-size: 1.3rem">
              <a href="{{route('edit.product',1)}}" class="text-success ">

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
<tr>
    <td colspan="5" style="font-size: 1.5rem;color: #dc3545" >No Categories Yet</td>
</tr>
@endforelse
