@extends('admin.admin_master')

@section('admin')

<div class="page-content">
        <div class="container-fluid"></div>




<div class="row">
        <div class="col-lg-3">
            <div class="card border m-lg-0 mb-3">
                <div class="card-body">
                    <h2 class="card-title">Assets</h2>
                    <div class="hr-line-dashed"></div>
                    <a href="{{ route('asset.add') }}" class="btn btn-primary btn-block add_asset waves-effect waves-themed">Add an asset</a>


                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#"><i class="fal fa-folder"></i> All categories</a></li>
                    <li class="list-group-item"><a href="#"><i class="fal fa-folder"></i> Electronics</a></li>
                    <li class="list-group-item"><a href="#"><i class="fal fa-folder"></i> Software</a></li>
                    <li class="list-group-item"><a href="#"><i class="fal fa-folder"></i> Service</a></li>
                </ul>
                <div class="card-body mb-3">
                <a href="javascript:;" id="btnNewCategory" class="btn btn-primary btn-block waves-effect waves-themed">New category</a>
                </div>
            </div>




        </div>
        <div class="col-lg-9">

            <div class="panel mb-3">
                <div class="panel-container">
                    <div class="panel-content">

                        <h3>Total: <span class="amount">৳ 1,549.00</span></h3>

                        <div class="hr-line-dashed"></div>

                        <div class="table-responsive">
                            <div id="clx_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label><div class="input-group-text d-inline-flex width-3 align-items-center justify-content-center border-bottom-right-radius-0 border-top-right-radius-0 border-right-0"><i class="fal fa-search"></i></div><input type="search" class="form-control border-top-left-radius-0 border-bottom-left-radius-0 ml-0 width-lg shadow-inset-1" placeholder="Search" aria-controls="clx_datatable"></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dt-buttons">          <button class="btn buttons-pdf buttons-html5 btn-danger btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate PDF"><span>PDF</span></button> <button class="btn buttons-excel buttons-html5 btn-success btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate Excel"><span>Excel</span></button> <button class="btn buttons-csv buttons-html5 btn-primary btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate CSV"><span>CSV</span></button> <button class="btn buttons-copy buttons-html5 btn-dark btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Copy to clipboard"><span>Copy</span></button> <button class="btn buttons-print btn-secondary btn-sm" tabindex="0" aria-controls="clx_datatable" type="button" title="Print Table"><span>Print</span></button> </div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer dtr-inline" id="clx_datatable" role="grid" aria-describedby="clx_datatable_info" style="width: 744px;">
                                <thead style="background: #f0f2ff">
                                <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 216px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 152px;" aria-label="Date purchased: activate to sort column ascending">Date purchased</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Supported until: activate to sort column ascending">Supported until</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 74px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 74px;" aria-label="Price: activate to sort column ascending">Manage</th></tr>
                                </thead>
                                <tbody> 
                                @foreach($asset as $key =>$items)   
                                
                                <tr>
                                        <td>{{ $items->name }}</td>
                                       
                                        <td>{{ $items->date_purchase }}</td>
                                        <td>{{ $items->date_ultil }}</td>
                                        <td>{{ $items->price }}</td>

                                        <td>
                                       
                                        <a href="{{route('asset.edit', $items->id)  }}" class="btn btn-warning sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ route('asset.delete', $items->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                                </tr>
                                   
                                    @endforeach
                                
                                </tbody>

                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="clx_datatable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="clx_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="clx_datatable_previous"><a href="#" aria-controls="clx_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="fal fa-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="clx_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="clx_datatable_next"><a href="#" aria-controls="clx_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="fal fa-chevron-right"></i></a></li></ul></div></div></div></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

@endsection 