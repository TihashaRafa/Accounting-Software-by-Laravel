@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid"></div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Nagad Merchant</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">


                        <form method="post" id="mainForm">

                            <div class="mb-3">
                                <label for="balance_BDT">Initial Balance [ BDT ]</label>
                                <input type="text" class="form-control amount" id="balance_BDT" name="balance_BDT" data-a-sign="৳" data-a-sep="," data-a-dec="." data-p-sign="p" data-d-group="3">
                            </div>


                            <div class="mb-3">
                                <label for="balance_USD">Initial Balance [ USD ]</label>
                                <input type="text" class="form-control amount" id="balance_USD" name="balance_USD" data-a-sign="$" data-a-sep="," data-a-dec="." data-p-sign="p" data-d-group="3">
                            </div>


                            <input type="hidden" name="account_id" value="3">

                            <button class="btn btn-primary waves-effect waves-themed" type="submit" id="btnSubmit">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection