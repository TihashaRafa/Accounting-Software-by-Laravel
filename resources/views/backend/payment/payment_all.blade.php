@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">



                    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Payments</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <div id="clx_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label><div class="input-group-text d-inline-flex width-3 align-items-center justify-content-center border-bottom-right-radius-0 border-top-right-radius-0 border-right-0"><i class="fal fa-search"></i></div><input type="search" class="form-control border-top-left-radius-0 border-bottom-left-radius-0 ml-0 width-lg shadow-inset-1" placeholder="Search" aria-controls="clx_datatable"></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dataTables_length" id="clx_datatable_length"><label>Show <select name="clx_datatable_length" aria-controls="clx_datatable" class="form-control custom-select"><option value="10">10</option><option value="15">15</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer dtr-inline" id="clx_datatable" role="grid" aria-describedby="clx_datatable_info" style="width: 1012px;">
                                <thead style="background: #f0f2ff">
                                <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 113px;" aria-sort="ascending" aria-label="Invoice#: activate to sort column descending">Invoice#</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 75px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 110px;" aria-label="Account: activate to sort column ascending">Account</th><th class="text-end sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 109px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 175px;" aria-label="Transaction ID: activate to sort column ascending">Transaction ID</th><th class="text-end sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 55px;" aria-label="Cr.: activate to sort column ascending">Cr.</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 109px;" aria-label="Manage: activate to sort column ascending">Manage</th></tr>

                                </thead>

                            <tbody><tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No items to display.</td></tr></tbody></table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="clx_datatable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="clx_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="clx_datatable_previous"><a href="#" aria-controls="clx_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="fal fa-chevron-left"></i></a></li><li class="paginate_button page-item next disabled" id="clx_datatable_next"><a href="#" aria-controls="clx_datatable" data-dt-idx="1" tabindex="0" class="page-link"><i class="fal fa-chevron-right"></i></a></li></ul></div></div></div></div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>



    </div>
</div>
@endsection