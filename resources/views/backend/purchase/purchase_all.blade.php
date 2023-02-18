@extends('admin.admin_master')

@section('admin')
<div class="page-content">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                               
                                   
                                    <div class="card-body">
                                    <a href="{{ route('product.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">Add Purchase </a> <br>  <br>    
                                    <a href="{{ route('purchase.add') }}" class="btn btn-sm btn-success waves-effect waves-themed"> All Purchase</a> 
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Purchase number</th>
                                                    <th>Date</th>
                                                    <th>Supplier</th>
                                                    <th>Customer</th>
                                                    <th>QTY</th>
                                                    <th>Product name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($allData as $key =>$items)

                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $items->name }}</td>
                                                    <td>{{ $items['supplier']['name'] }}</td>
                                                    <td>{{ $items['customer']['name'] }}</td>
                                                    <td>{{ $items['company']['name'] }}</td>                                                   
                                                    <td> <span class="btn btn-warning" >Pending</span> </td>
                                           
                                                    

                                                    <td>
                                                        
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