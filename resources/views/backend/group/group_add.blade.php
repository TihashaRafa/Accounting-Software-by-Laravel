
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">
<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Groups</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success waves-effect waves-themed" id="add_new_group"><i class="fal fa-plus"></i> Add New Group</a>
                            <a href="https://portal.optimus.com.bd/?ng=reorder/groups/" class="btn btn-sm btn-primary waves-effect waves-themed"><i class="fal fa-download"></i> Reorder</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <tbody><tr><th><strong>Group</strong></th>
                                <th class="float-right">Manage</th>
                                

                            </tr></tbody></table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>
    </div>
    </div>

@endsection