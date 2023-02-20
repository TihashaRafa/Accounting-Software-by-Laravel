@extends('admin.admin_master')

@section('admin')
<div class="page-content">
                    <div class="container-fluid">
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                               
                                   
                                    <div class="card-body">
									<div class="panel-hdr">
                                            <h2>List Customers</h2>
                    
                    <div class="panel-toolbar">
                        <div class="btn-group">

                                 <a href="{{ route('customer.add') }}" class="btn btn-sm btn-success waves-effect waves-themed"> Add Customer</a>
                               <a href="https://portal.optimus.com.bd/?ng=contacts/import_csv/" class="btn btn-sm btn-warning waves-effect waves-themed"> Import</a>
                        </div>

                    </div>
                </div>
									<div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dt-buttons">          <button class="btn buttons-pdf buttons-html5 btn-danger btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate PDF"><span>PDF</span></button> <button class="btn buttons-excel buttons-html5 btn-success btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate Excel"><span>Excel</span></button> <button class="btn buttons-csv buttons-html5 btn-primary btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate CSV"><span>CSV</span></button> <button class="btn buttons-copy buttons-html5 btn-dark btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Copy to clipboard"><span>Copy</span></button> <button class="btn buttons-print btn-secondary btn-sm" tabindex="0" aria-controls="clx_datatable" type="button" title="Print Table"><span>Print</span></button> </div></div></div>
                                  
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customer as $key =>$items)

                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $items->name }}</td>
                                                    <td>{{ $items->email }}</td>
                                                    <td>{{ $items->phone }}</td>                                    

                                                    <td>
                                                        <a href="{{ route('customer.show', $items->id) }}" class="btn btn-info sm" title="Edit data"><i class="fa fa-user" aria-hidden="true"></i></a>
                                                        <a href="{{ route('customer.edit', $items->id) }}" class="btn btn-warning sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                                        <a href="{{ route('customer.delete', $items->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>   
                                                


                                    </div>
                                </div>
                            </div>
        
                            
        
                            
        
                        </div>

</div>
</div>



@endsection