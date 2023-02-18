@extends('admin.admin_master')

@section('admin')
<div class="page-content">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                               
                                   
                                    <div class="card-body">
                                    <a href="{{ route('product.add') }}" class="btn btn-sm btn-success waves-effect waves-themed"> Add Product</a> 
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Supplier Name</th>
                                                    <th>Customer</th>
                                                    <th>Company</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product as $key =>$items)

                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $items->name }}</td>
                                                    <td>{{ $items['supplier']['name'] }}</td>
                                                    <td>{{ $items['customer']['name'] }}</td>
                                                    <td>{{ $items['company']['name']}}</td>
                                                 
                                                    

                                                    <td>
                                                        <a href="{{ route('product.edit', $items->id )}}" class="btn btn-info sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                                        <a href="{{ route('product.delete', $items->id )}}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>   
                                        <a href="" class="btn btn-info btn-rounded waves-effect waves-light" > Add Product</a>                            


                                    </div>
                                </div>
                            </div>
        
                            
        
                            
        
                        </div>

</div>
</div>



@endsection