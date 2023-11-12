@forelse ($products as $key =>$product)
<tr>
    <td>{{$key+1}}</td>
    <td>InternetExplorer 4.0</td>
    <td>Win 95+</td>
    <td>
    </td>
    <td>
      <ul class="table-controls d-flex justify-content-around list-unstyled ">
          <li style="font-size: 1.3rem">
              <a href="" class="text-primary" data-toggle="modal" data-target="#modal-view{{$product->id}}">

                  <i class="fas fa-folder"></i>

              </a>
              @include('Admin.products.includes.viewproduct')
          </li>
          <li style="font-size: 1.3rem">
              <a href="" class="text-success " data-toggle="modal" data-target="#modal-edit{{$product->id}}">

                  <i class="fas fa-pencil-alt"></i>

              </a>
              @include('Admin.products.includes.editproduct')

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
