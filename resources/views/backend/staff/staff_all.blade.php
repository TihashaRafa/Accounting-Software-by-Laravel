
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Users</h2>

                    <div class="panel-toolbar">
                        <a href="{{ route('staff.add') }}" class="btn btn-primary waves-effect waves-themed"> Add New User</a>

                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <div id="clx_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mb-3"><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"><div id="clx_datatable_filter" class="dataTables_filter"><label><div class="input-group-text d-inline-flex width-3 align-items-center justify-content-center border-bottom-right-radius-0 border-top-right-radius-0 border-right-0"><i class="fal fa-search"></i></div><input type="search" class="form-control border-top-left-radius-0 border-bottom-left-radius-0 ml-0 width-lg shadow-inset-1" placeholder="Search" aria-controls="clx_datatable"></label></div></div><div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end"><div class="dataTables_length" id="clx_datatable_length"><label>Show <select name="clx_datatable_length" aria-controls="clx_datatable" class="form-control custom-select"><option value="10">10</option><option value="15">15</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer dtr-inline" id="clx_datatable" role="grid" aria-describedby="clx_datatable_info" style="width: 1009px;">
                                <thead style="background: #f0f2ff">
                                <tr role="row"><th style="width: 60px;background: #f0f2ff" class="sorting sorting_asc" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Avatar: activate to sort column descending">Avatar</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 269px;" aria-label="Details: activate to sort column ascending">Details</th><th class="sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 358px;" aria-label="Type: activate to sort column ascending">Type</th><th class="text-end sorting" tabindex="0" aria-controls="clx_datatable" rowspan="1" colspan="1" style="width: 170px;" aria-label="Manage: activate to sort column ascending">Manage</th></tr>
                                </thead>

                                <tbody>
                                @foreach($staff as $key =>$items)  
                            <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">                                                     <img src="https://portal.optimus.com.bd/ui/lib/img/     default-user-avatar.png" style="max-height: 60px;" alt="">
                                    </td>
                                    <td class="h6">
                                           {{ $items->name }}
                                            <br> 
                                            {{ $items->email }}
                                             <br>{{ $items->phpne }}
                                     </td>
                                        <td class="h6 text-info">  {{ $items->user_type }}  </td>


                                        <td>
                                            <div class="btn-group float-right">
                                            <a href="{{ route('staff.edit', $items->id) }}" class="btn btn-info sm" title="Edit data"> <i class="fas fa-edit"></i> </a>
                                            <a href="{{ route('staff.delete', $items->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>   
                                            </div>

                                        </td>
                                    </tr>
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