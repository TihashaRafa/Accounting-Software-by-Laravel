@extends('admin.admin_master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Mobile no</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suppliers as $key =>$items)

                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $items->name }}</td>
                                    <td>{{ $items->mobile_no }}</td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->address }}</td>
                                    <td>
                                        <a href="{{ route('supplier.edit', $items->id )}}" class="btn btn-info sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ route('supplier.delete', $items->id )}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('supplier.add') }}" class="btn btn-info btn-rounded waves-effect waves-light"> Add Supplier</a>


                    </div>
                </div>
            </div>





        </div>

    </div>
</div>



@endsection