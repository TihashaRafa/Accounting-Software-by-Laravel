@extends('admin.admin_master')

@section('admin')


<div class="page-content">
    <div class="container-fluid">
 

<div class="subheader">
    <h1 class="subheader-title">
        <i class="subheader-icon fal fa-window"></i> Sales

    </h1>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important;border-radius: .375rem; min-height: 1px;
padding: 1.5rem;
flex: 1 1 auto">
            <div class="number">
                <h3 class="h2 font-weight-bold mb-0 text-white">
                    <span>৳125,000.00</span>
                </h3>
                <small class="h5  mb-0 text-white">Paid</small>
            </div>

            <div class="progress-info">


                <div class="progress">
                    <span style="width: 30%;" class="progress-bar bg-info">
                    </span>
                </div>
                <div class="progress-status">
                    <div class="text-nowrap text-white font-weight-600"> 30% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-stat2" style="background: linear-gradient(87deg,#f5365c 0,#f56036 100%)!important;    border-radius: .375rem;min-height: 1px;
padding: 1.5rem;
flex: 1 1 auto">
            <div class="number">
                <h3 class="h2 font-weight-bold mb-0 text-white">
                    <span>৳174,815.00</span>
                </h3>
                <small class="h5 mb-0 text-white">Unpaid</small>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 70%;" class="progress-bar  bg-success">
                        <span class="sr-only">70%</span>
                        </span>
                </div>
                <div class="progress-status">
                    <div class="text-nowrap text-white font-weight-600"> 70% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#5e72e4 0,#825ee4 100%)!important;    border-radius: .375rem; rgba(0,0,0,.05); min-height: 1px;
padding: 1.5rem;
flex: 1 1 auto">
            <div class="number">
                <h3 class="h2 font-weight-bold mb-0 text-white">
                    <span>৳0.00</span>
                </h3>
                <small class="h5 mb-0 text-white" "=" ">Partially Paid</small>
            </div>
            <div class="progress-info">
                <div class="progress">
                <span style="width: 0%;" class="progress-bar  bg-success">
                    <span class="sr-only">0%</span>
                </span>
                </div>
                <div class="progress-status">
                    <div class="text-nowrap text-white font-weight-600"> 0% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#172b4d 0,#1a174d 100%)!important;   border-radius: .375rem;min-height: 1px;
padding: 1.5rem;
flex: 1 1 auto">
            <div class="number">
                <h3 class="h2 font-weight-bold mb-0 text-white">
                    <span class="amount" data-a-sign="৳ ">৳0.00</span>
                </h3>
                <small class="h5  mb-0 text-white">Cancelled</small>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 0%;" class="progress-bar bg-success">
                    <span class="sr-only">0%</span>
                    </span>
                </div>
                <div class="progress-status">
                    <div class="text-nowrap text-white font-weight-600"> 0% </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel">

            <div class="panel-hdr">

                <h2>Invoices</h2>

                <div class="panel-toolbar">

                    <div class="btn-group">
                        <a href="#" class="btn btn-primary  btn-sm waves-effect waves-themed"> Add Invoice</a>
                        <a href="#" class="btn btn-warning btn-sm waves-effect waves-themed"> View Reports</a>
                    </div>

                </div>
            </div>

            <div class="panel-container">
                <div class="panel-content">

                    <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#">Unpaid</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">Partially Paid</a></li>
                        <li class="nav-item"><a class="nav-link  " href="#">Paid</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">Cancelled</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">All</a></li>
                    </ul>

                    <div class="table-responsive">

                        <div id="clx_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label><div class="input-group-text d-inline-flex width-3 align-items-center justify-content-center border-bottom-right-radius-0 border-top-right-radius-0 border-right-0"><i class="fal fa-search"></i></div><input type="search" class="form-control border-top-left-radius-0 border-bottom-left-radius-0 ml-0 width-lg shadow-inset-1" placeholder="Search" aria-controls="clx_datatable"></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dt-buttons">          <button class="btn buttons-pdf buttons-html5 btn-danger btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate PDF"><span>PDF</span></button> <button class="btn buttons-excel buttons-html5 btn-success btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate Excel"><span>Excel</span></button> <button class="btn buttons-csv buttons-html5 btn-primary btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Generate CSV"><span>CSV</span></button> <button class="btn buttons-copy buttons-html5 btn-warning btn-sm mr-1" tabindex="0" aria-controls="clx_datatable" type="button" title="Copy to clipboard"><span>Copy</span></button> <button class="btn buttons-print btn-secondary btn-sm" tabindex="0" aria-controls="clx_datatable" type="button" title="Print Table"><span>Print</span></button> </div></div></div><div class="row"><div class="col-sm-12"><table id="clx_datatable" class="table table-striped w-100 sys_table footable dataTable no-footer dtr-inline" role="grid" aria-describedby="clx_datatable_info" style="width: 1012px;">
                           
                        <!-- <thead style="background: #f0f2ff">
                            <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 79px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 128px;" aria-label="Account: activate to sort column ascending">Account</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 66px;" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 98px;" aria-label="Invoice Date: activate to sort column ascending">Invoice Date</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 76px;" aria-label="Due Date: activate to sort column ascending">Due Date</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 53px;" aria-label="
                                    Status
                                : activate to sort column ascending">
                                    Status
                                </th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 68px;" aria-label="Type: activate to sort column ascending">Type</th><th class="text-end sorting" width="140px;" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 140px;" aria-label="Manage: activate to sort column ascending">Manage</th></tr>
                            </thead> -->
                            <tbody>

                            <tr class="odd">
                                    <td data-value="12" data-order="1" class="dtr-control sorting_1" tabindex="0"><a href="https://portal.optimus.com.bd/?ng=invoices/view/12/">INV-01 00012 </a> </td>
                                    <td>
                                     <a href="#">
                                    <strong>
                                    MD Ashraf Hossain
                                    <br>  Kloud Technologies </strong>


                                    </a>
                                          </td>
                                    <td>৳0.00</td>
                                    <td data-value="1677866400">04/03/2023</td>
                                    <td data-value="1678125600">07/03/2023</td>
                                    <td>

                                    <span class="badge badge-dot"><i class="bg-danger"></i>Unpaid</span>
                                        
                                    </td>
                                    <td>
                                    <span class="badge badge-dot"><i class="bg-success"></i> Onetime</span>
                                        </td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-icon waves-effect waves-themed" data-bs-toggle="tooltip" data-placement="top" title="View"><i class="fal fa-file-alt"></i></a>
                                            <a href="#" class="btn btn-success btn-icon waves-effect waves-themed" data-bs-toggle="tooltip" data-placement="top" title="Clone"><i class="fal fa-copy"></i></a>
                                            <a href="#" class="btn btn-info btn-icon waves-effect waves-themed" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="fal fa-file-edit"></i></a>    
                                            <a href="#" class="btn btn-danger btn-icon cdelete waves-effect waves-themed" id="iid12" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div></div>
                    
                    
                    <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="clx_datatable_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="clx_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="clx_datatable_previous"><a href="#" aria-controls="clx_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="fal fa-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="clx_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="clx_datatable_next"><a href="#" aria-controls="clx_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="fal fa-chevron-right"></i></a></li></ul></div></div></div></div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

                   
    </div>
</div>

@endsection