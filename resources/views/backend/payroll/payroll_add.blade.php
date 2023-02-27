@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">


                    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <h3>Payroll</h3>
                        <div class="hr-line-dashed"></div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Month</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    February
                                </td>
                                <td> ৳7,500.00</td>
                                <td>Not processed</td>
                                <td>
                                    <a href="{{ route('payroll.all') }}" class="btn btn-primary waves-effect waves-themed">Run payroll</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection