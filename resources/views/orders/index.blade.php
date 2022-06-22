@extends('layouts.app', ['activePage' => 'orders', 'title' => 'Orders', 'navName' => 'Orders', 'activeButton' => 'orders'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">{{ __('Orders') }}</h4>
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

              {{-- <div class="col-12 text-right">
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary mb-3">{{ __('Add Product') }}</a>
              </div> --}}


            </div>
            <div class="table-responsive">
              <table class="table" id="myTable">
                <thead class=" text-primary">
                  <th>
                    {{ __('Product Image ') }}
                  </th>

                  <th>
                    {{ __('Product Name ') }}
                  </th>

                  <th>
                    {{ __('Customer Name') }}
                  </th>



                  <th>
                    {{ __('Vendor Name') }}
                  </th>


                  <th>
                    {{ __('Quantity') }}
                  </th>
                  <th>
                    {{ __('Amount') }}
                  </th>
                  <th>
                    {{ __('Status') }}
                  </th>
                  <th>
                    {{ __('Instruction') }}
                  </th>
                  <th>
                    {{ __('Order Date') }}
                  </th>
                  <th>
                    {{ __('Actions') }}
                  </th>


                  <th></th>





                </thead>
                <tbody>
                  @foreach( $orders as $order)
                  <tr>
                  <td>
                      <img src="/images/product/{{$order->products->image }}" style="width: 80px;">
                    </td>
                    <td>
                      {{$order->products->product_name }}
                    </td>

                    <td>
                      {{ $order->users->name }}
                    </td>

                    <td>
                      {{ $order->vendors->vendor_name }}
                    </td>


                    <td>
                      {{ $order->quantity  }}
                    </td>

                    <td>
                      {{ $order->total }}
                    </td>

                    <td>
                        <a title="{{ $order->status == 'Pending' ? 'Change to Completed' : 'Change to Pending' }}" href="{{ route('orders.edit', $order->id) }}" style="color: #eba14e"><i class="{{ $order->status == 'Completed' ? 'fa fa-check' : 'fa fa-times'}}"></i></a>
                        {{-- {{ $order->status }} --}}
                      </td>

                    <td>
                    {{ $order->instruction }}
                    </td>

                    <td>
                        {{ $order->created_at->format('d/m/Y') }}
                      </td>



                    <td class="td-actions text-right">

                      @if ($order->id )
                      <form action="{{ route('orders.destroy',$order) }}" method="post">
                        @csrf
                        @method('delete')

                        {{-- <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('products.edit',$order->id) }}" data-original-title="" title="" style="color:green">
                         <i class="fa fa-pencil-square-o "></i>
                          <div class="ripple-container"></div>
                        </a> --}}
                        <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this program?") }}') ? this.parentElement.submit() : ''" style="color:red">
                        <i class="fa fa-trash"></i>
                          <div class="ripple-container"></div>
                        </button>
                      </form>
                      @else
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('orders.edit',$order->id) }}" data-original-title="" title="" style="color:green">
                       <i class="fa fa-pencil-square-o "></i>
                        <div class="ripple-container"></div>
                      </a>

                      @endif
                    </td>


                  </tr>



                  @endforeach


                </tbody>
              </table>
              {{ $orders->links() }}
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
