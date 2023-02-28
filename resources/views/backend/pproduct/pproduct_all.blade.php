@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">




<div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-hdr">
                    <h2> Products </h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="{{ route('pproduct.add') }}" class="btn btn-primary waves-effect waves-themed"><i class="fal fa-plus"></i> Add Product</a>
                            <a href="{{ route('service.add') }}" class="btn btn-success waves-effect waves-themed"><i class="fal fa-plus"></i> Add Service</a>
                        </div>
<br>
<br>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <div id="clx_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label><div class="input-group-text d-inline-flex width-3 align-items-center justify-content-center border-bottom-right-radius-0 border-top-right-radius-0 border-right-0"><i class="fal fa-search"></i></div><input type="search" class="form-control border-top-left-radius-0 border-bottom-left-radius-0 ml-0 width-lg shadow-inset-1" placeholder="Search" aria-controls="clx_datatable"></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dataTables_length" id="clx_datatable_length"><label>Show <select name="clx_datatable_length" aria-controls="clx_datatable" class="form-control custom-select"><option value="10">10</option><option value="15">15</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped w-100 dataTable no-footer dtr-inline" id="clx_datatable" role="grid" aria-describedby="clx_datatable_info" style="width: 1012px;">
                                <thead style="background:#f0f2ff">
                                <tr role="row"><th class="bold sorting sorting_asc" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 179px;" aria-sort="ascending" aria-label="Item Number: activate to sort column descending">Item Number</th><th class="bold sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 99px;" aria-label="Image: activate to sort column ascending">Image</th><th class="bold sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 97px;" aria-label="Name: activate to sort column ascending">Name</th><th class="bold sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 149px;" aria-label="Sales Price: activate to sort column ascending">Sales Price</th><th class="bold sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 141px;" aria-label="Cost Price: activate to sort column ascending">Cost Price</th><th class="text-center bold sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 119px;" aria-label="Manage: activate to sort column ascending">Manage</th></tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key =>$items)
                                <tr>
                                    <td>{{ $items-> item_number}} <td>
                                    <td>{{ $items-> name}} <td>
                                    <td>{{ $items-> sale_price}} <td>
                                    <td>{{ $items-> cost_price}} <td>
                                    <td>
                                        <a href="{{ route('pproduct.edit', $items->id) }}" class="btn btn-warning sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ route('pproduct.delete', $items->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>  <td>
                                </tr>
                                @endforeach
                                </tbody>


                            </table>
                        
                        </div></div>
                        
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="clx_datatable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="clx_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="clx_datatable_previous"><a href="#" aria-controls="clx_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="fal fa-chevron-left"></i></a></li><li class="paginate_button page-item next disabled" id="clx_datatable_next"><a href="#" aria-controls="clx_datatable" data-dt-idx="1" tabindex="0" class="page-link"><i class="fal fa-chevron-right"></i></a></li></ul></div></div></div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
    </div>
    </div>

@endsection    