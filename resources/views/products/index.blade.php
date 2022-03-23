@extends('layouts.app', ['activePage' => 'products', 'title' => 'Products', 'navName' => 'Products'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Products</h4>
                            <a class="btn btn-success" href="{{ route('products.create') }}"> Add Products</a>

                            <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Id</th>
                                    <th>Vendor Name</th>
                                    <th>Category Name</th>
                                    <th>Products Name</th>


                         
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                @foreach( $products as $product )
                                    <tr>
                                        <td>{{product->id}}</td>
                                        <td>{{product->product_name}}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('products.show',product->id) }}">Show</a>
                                            <a class="btn btn-primary" href="{{ route('products.edit',product->id) }}">Edit</a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $department->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                        </td>
                         
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
@endsection