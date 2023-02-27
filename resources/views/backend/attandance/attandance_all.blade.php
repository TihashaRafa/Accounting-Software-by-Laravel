@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">
<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Attendance</h2>
                    <div class="panel-toolbar">
                        <div class="mb-3">
                            <input class="form-control" id="inputDate" style="min-width: 200px;" name="date" data-date-format="yyyy-mm-dd" data-auto-close="true" value="2023-02-27">
                        </div>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h3>Mark Attendance</h3>
                        <p>27/02/2023</p>
                        <div class="hr-line-dashed"></div>

                        <div class="col-md-12">


                            <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                                <thead>
                                <tr>
                                    <th width="200px;">Name</th>
                                    <th width="100px;">Status</th>
                                    <th>Note</th>
                                </tr>
                                </thead>
                                <tbody>

                                      <tr>
                                        <td>Jakub Swierczak </td>
                                        <td>

                                            <label class="switch s-icons s-outline s-outline-primary">
                                                <input type="checkbox" id="attendance_2" class="attendance_checkbox">
                                                <span class="slider round"></span>
                                            </label>

                                        </td>
                                        <td>
                                            <div class="mb-3">
                                                <input class="form-control attendance_note" id="attendance_note_2">
                                            </div>
                                        </td>
                                    </tr>
                                
                                </tbody>


                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    @endsection
