@extends('layouts.app', ['activePage' => 'vendors', 'title' => 'Vendors', 'navName' => 'Vendors', 'activeButton' => 'vendors'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Vendors') }}</h4>
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
                          
                  <div class="col-12 text-right mb-2">
                    <a href="{{ route('vendors.create') }}" class="btn btn-sm btn-primary">{{ __('Add Vendor') }}</a>
                  </div>

                   
                </div>
                <div class="table-responsive">
                  <table class="table pt-2" id="myTable">
                    <thead class=" text-primary">
                      <!-- <th>
                          {{ __('#') }}
                      </th> -->
                  
                      <th>
                        {{ __('Vendor Name') }}
                      </th>


                      <th>
                        {{ __('Email') }}
                      </th>

                      <th>
                        {{ __('Phone No') }}
                      </th>
                      <th></th>
                    </thead>
                    <tbody>
                        @foreach( $vendors as $vendor)
                        <tr>
                         
                           <td>
                         {{$vendor->vendor_name }}
                          </td>

                          <td>
                         {{$vendor->email }}
                          </td>

                          <td>
                         {{$vendor->phone_no }}
                          </td>
                        
                          
                             <td class="td-actions text-right">

                            @if ($vendor->id )
                              <form action="{{ route('vendors.destroy',$vendor->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('vendors.edit',$vendor->id) }}" data-original-title="" title="" style="color:green">
                                   <i class="fa fa-pencil-square-o "></i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this program?") }}') ? this.parentElement.submit() : ''" 
                                  style="color:red"> 
                                    <i class="fa fa-trash"></i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('vendors.edit',$vendor->id) }}" data-original-title="" title="" style="color:green">
                               "<i class="fa fa-pencil-square-o "></i>
                                <div class="ripple-container"></div>
                              </a>
                          
                               @endif
                          </td>
                        
                       
                        </tr>
                        
                        
                      
                  @endforeach
                  
                  
                    </tbody>
                  </table>
                    {{ $vendors->links() }}
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
      $(document).ready( function () 
        {
           $('#myTable').DataTable();
        } );
  </script>
@endsection