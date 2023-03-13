@extends('admin.admin_master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="panel-hdr">
                            <h2>Manage Accounts</h2>

                            <div class="panel-toolbar">
                                <div class="btn-group">

                                    <a href="{{ route('account.add') }}" class="btn btn-sm btn-success waves-effect waves-themed"> Add Account</a>

                                </div>

                            </div>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowarp" style="border-collapse: collapse; border-specing: 0; width: 100%;">
                            <thead>
                                <tr>

                                    <th>Account</th>
                                    <th>Balance BDT</th>
                                    <th>Balance USD</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($account as $key =>$items)

                                <tr>
                                    <td>{{ $items-> account_id }}</td>
                                    <td>{{ $items-> balance_bdt }}</td>
                                    <td>{{ $items-> balance_usd }}</td>

                                    <td>
                                        <a href="{{ route('account.record') }}" class="btn btn-sm btn-primary waves-effect waves-themed"><i class="fal fa-plus"></i> Record initial balance</a>

                                        <a href="{{ route('account.edit', $items->id) }}" class="btn btn-sm btn-warning waves-effect waves-themed"><i class="fal fa-pencil"></i> Edit</a>

                                        <a href="{{ route('account.delete', $items->id) }}" id="did3" class="cdelete btn btn-danger btn-sm waves-effect waves-themed"><i class="fal fa-trash"></i> Delete</a>
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