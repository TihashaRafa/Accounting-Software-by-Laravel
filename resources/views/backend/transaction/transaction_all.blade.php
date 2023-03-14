@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">



        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">



                            <div class="row">
                                <div class="col-md-3 col-sm-6">

                                    <form method="post" action="{{ route('transaction.store') }}" id="myForm" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="reportrange">Date Range</label>
                                            <input type="date" name="daterange" class="form-control" id="reportrange">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tr_type">Transaction Type</label>
                                            <select id="tr_type" name="transactionType" class="form-control">
                                                <option>All</option>
                                                <option>Income</option>
                                                <option>Expense</option>
                                                <option>Transfer</option>
                                                <option>Equity</option>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="account">Account</label>
                                            <select id="account" name="amount" class="form-control select2-hidden-accessible" data-select2-id="account" tabindex="-1" aria-hidden="true">
                                                <option>All</option>
                                                <option>bKash Merchant</option>
                                                <option>City Bank</option>
                                                <option>Nagad Merchant</option>
                                                <option>aamarPay</option>
                                                <option>(Publicia) Nagad Personal</option>
                                                <option>(Publicia) Brac Bank</option>
                                                <option>Cash</option>
                                                <option>PayPal (business@limda.net)</option>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label for="cid">Contact</label>
                                            <select id="cid" name="contact" class="form-control select2-hidden-accessible" data-select2-id="cid" tabindex="-1" aria-hidden="true">
                                                <option>All</option>
                                                <option>MD Ashraf Hossain - ashraf.hossain@kloud.com.bd</option>
                                                <option>Rubaiyat Bin Arif - rubaiyat.arif@kloud.com.bd</option>
                                                <option>Raisuddin Faham - raisuddinfaham@gmail.com</option>
                                                <option>Hashibul Hassan - hashibulhassan@fin.jnu.ac.bd</option>
                                                <option>Main Uddin - info@hexagonbdtech.com</option>
                                                <option>Farhad Hossen Kayes - forhadbd902@gmail.com</option>
                                                <option>Mostaim Billah Murad - fahim.mugdho@gmail.com</option>
                                                <option>Junaid Miaje - junaid@optimus.com.bd</option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="category">Category</label>
                                            <select id="category" name="catagory" class="form-control select2-hidden-accessible" data-select2-id="category" tabindex="-1" aria-hidden="true">
                                                <option>All</option>
                                                <option>Advertising</option>
                                                <option>Bank and Credit Card Interest</option>
                                                <option>Car and Truck</option>
                                                <option>Commissions and Fees</option>
                                                <option>Contract Labor</option>
                                                <option>Contributions</option>
                                                <option>Cost of Goods Sold</option>
                                                <option>Credit Card Interest</option>
                                                <option>Depreciation</option>
                                                <option>Dividend Payments</option>
                                                <option>Employee Benefit Programs</option>
                                                <option>Entertainment</option>
                                                <option>Gift</option>
                                                <option>Insurance</option>
                                                <option>Legal, Accountant &amp; Other Professional Services</option>
                                                <option>Meals</option>
                                                <option>Mortgage Interest</option>
                                                <option>Non-Deductible Expense</option>
                                                <option>Other Business Property Leasing</option>
                                                <option>Owner Draws</option>


                                            </select>
                                        </div>

                                        <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Transaction Filter">
                                    </form>

                                    <br>
                                </div>




                                <!-- output start here   -->
                                <div class="col-md-9 col-sm-6 ib_right_panel">


                                    <div class="table-responsive" id="ib_data_panel" style="position: static; zoom: 1;">


                                        <div id="ib_dt_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row mb-3">
                                                <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start">
                                                <form method="get" action="transaction">
    <div class="input-group">
        <label for="data_filter">Filter by Date Range:</label>
        
        <select class="form-select" name="data_filter">
            <option value="">All Dates</option>
            <option value="today">Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="this_week">This Week</option>
            <option value="last_week">Last Week</option>
            <option value="this_month">This Month</option>
            <option value="last_month">Last Month</option>
            <option value="this_year">This Year</option>
            <option value="last_year">Last Year</option>
        </select>
        <button class="btn btn-primary" type="submit">Filter</button>
    </div>
</form>

                                                    








                                                </div>
                                                <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end">
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="dataTables_scroll">
                                                        <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                            <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 745px; padding-right: 17px;">
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                                            <table class="table table-bordered table-hover display dataTable dtr-inline collapsed" id="ib_dt" role="grid" aria-describedby="ib_dt_info" style="width: 745px;">
                                                                <thead>
                                                                    <tr class="heading" role="row" style="height: 0px;">
                                                                        <th class="sorting sorting_desc" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 19px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="descending" aria-label="ID: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">ID</div>
                                                                        </th>
                                                                        <th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Date</div>
                                                                        </th>
                                                                        <th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 54px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Account: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Account</div>
                                                                        </th>
                                                                        <th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 32px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Type: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Type</div>
                                                                        </th>
                                                                        <th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 53px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Amount: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Amount</div>
                                                                        </th>
                                                                        <th class="sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 76px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Description: activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Description</div>
                                                                        </th>
                                                                        <th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 36px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="
                                                Dr.
                                                (BDT)
                                            : activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                Dr.
                                                                                (BDT)
                                                                            </div>
                                                                        </th>
                                                                        <th class="text-end sorting" aria-controls="ib_dt" rowspan="1" colspan="1" style="width: 39px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="
                                                Cr.
                                                (BDT)
                                            : activate to sort column ascending">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                                                                Cr.
                                                                                (BDT)
                                                                            </div>
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 53px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Manage">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Manage</div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr style="height: 2px;">
                                                                        <th colspan="6" style="text-align: right; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 505px;" rowspan="1">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Total:</div>
                                                                        </th>
                                                                        <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 58px;">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">0.00</div>
                                                                        </th>
                                                                        <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 61px;">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">21714.00</div>
                                                                        </th>
                                                                        <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 53px;">
                                                                            <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                                                        </th>
                                                                    </tr>
                                                                </tfoot>



                                                                <tbody>

                                                                    <table class="table table-bordered table-striped sys_table">
                                                                        <thead style="background:#f0f2ff">
                                    <tr>
                                        <th class="h6">Id</th>
                                        <th class="h6">Date</th>
                                        <th class="h6">Transaction Type</th>
                                        <th class="h6">Account</th>
                                        <th class="h6">Category</th>

                                    </tr>  @php
                                        $transaction = App\Models\Transaction::all();
                                       
                                        @endphp
                                </thead>
                                                                        <tbody>
                                                                            @foreach($transaction as $items)

                                                                            <tr>

                                                                                <td class="h6">{{ $items->id }} </td>
                                                                                <td class="h6">{{ $items->daterange }} </td>
                                                                                <td class="h6">{{ $items->amount }} </td>
                                                                                <td class="h6">{{ $items->transactionType }} </td>
                                                                                <td class="h6">{{ $items->catagory }} </td>


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

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- output end here   -->

@endsection