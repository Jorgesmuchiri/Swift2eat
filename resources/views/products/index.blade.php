@extends('layouts.app', ['activePage' => 'products', 'title' => 'Products', 'navName' => 'Products', 'activeButton' => 'products'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('Products') }}</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            @if (session('status'))
            <div class="row">
              <div class="col-sm-12">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                  </button>
                  <span>{{ session('status') }}</span>
                </div>
              </div>
            </div>
            @endif
            <div class="row">

              <div class="col-12 text-right">
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary mb-3">{{ __('Add Product') }}</a>
              </div>


            </div>
            <div class="table-responsive">
              <table class="table" id="myTable">
                <thead class=" text-primary">
                  {{-- <th>
                    {{ __('Vendor Name ') }}
                  </th> --}}

                  <th>
                    {{ __('Product Name ') }}
                  </th>

                  <th>
                    {{ __('Category') }}
                  </th>



                  <th>
                    {{ __('Image') }}
                  </th>


                  <th>
                    {{ __('Price') }}
                  </th>
                  {{-- <th>
                    {{ __('Quantity') }}
                  </th> --}}

                  <th>
                    {{ __('Available?') }}
                  </th>


                  <th>{{ __('Actions') }}</th>





                </thead>
                <tbody>
                  @foreach( $products as $product)
                  <tr>
                  {{-- <td>
                      {{$product->vendors->vendor_name }}
                    </td> --}}
                    <td>
                      {{$product->product_name }}
                    </td>


                    <td>
                      {{$product->category->category_name }}
                    </td>

                    <td>
                        <img src="/images/product/{{$product->image }}" style="width: 80px;">
                    </td>


                    <td>
                      {{$product->price }}
                    </td>

                    {{-- <td>
                      {{$product->quantity}}
                    </td> --}}

                    <td>
                        <a title="{{ $product->status == 1 ? 'Change to Unavailable' : 'Change to Available' }}" href="{{ route('product.change_status', $product->id) }}" style="color: #eba14e"><i class="{{ $product->status == 1 ? 'fa fa-check' : 'fa fa-times'}}"></i></a>
                    </td>



                    <td class="td-actions text-right">

                      @if ($product->id )
                      <form action="{{ route('products.destroy',$product) }}" method="post">
                        @csrf
                        @method('delete')

                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('products.edit',$product->id) }}" data-original-title="" title="" style="color:green">
                         <i class="fa fa-pencil-square-o "></i>
                          <div class="ripple-container"></div>
                        </a>
                        <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this program?") }}') ? this.parentElement.submit() : ''" style="color:red">
                        <i class="fa fa-trash"></i>
                          <div class="ripple-container"></div>
                        </button>
                      </form>
                      @else
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('products.edit',$product->id) }}" data-original-title="" title="" style="color:green">
                       <i class="fa fa-pencil-square-o "></i>
                        <div class="ripple-container"></div>
                      </a>

                      @endif
                    </td>


                  </tr>



                  @endforeach


                </tbody>
              </table>
              {{ $products ->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
@endsection
