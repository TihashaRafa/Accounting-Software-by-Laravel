@extends('admin.admin_master')

@section('admin')



<div class="page-content">

                    <div class="container-fluid">



<div id="application_ajaxrender" style="min-height: 200px;">



<div class="row">
    <div class="col-md-6 text-black">

        <div>
            <br>



            <strong class="h5">Full Name: {{ $customer->name }}  </strong> <br>
             <strong class="h5">Company Name: {{ $customer->company }} </strong>   <br>
            
            <strong class="h5">Email: </strong>   <br>

            
            <strong class="h5">Phone:{{ $customer->phone }} </strong>    <br>

            
            <strong class="h5">Address: </strong>  {{ $customer->address }} <br>
            <strong class="h5">City: </strong>  {{ $customer->city }}  <br>
            <strong class="h5">State/Region:{{ $customer->state }} </strong>  <br>
            <strong class="h5">ZIP/Postal Code: </strong>  {{ $customer->zip }}  <br>
            <strong class="h5">Country: </strong>  {{ $customer->country }}  <br>
            <strong class="h5">Tags: </strong>  N/A  <br>
            <strong class="h5">Group: </strong>  N/A  <br>


            <p class="mt-3">
                <strong class="h5 text-info">Primary Contact?</strong>
            </p>
        <div class="mb-3 mb-3">

            <label class="switch s-icons s-outline s-outline-primary">
                <input type="checkbox" id="is_primary_contact">
                <span class="slider round"></span>
            </label>

        </div>

            
        </div>
    </div>
    <!-- <div class="col-md-6">
        <div class="p-2">
            <div class="mb-3">
                <textarea class="form-control" id="contact_note" placeholder="Contact Notes..." rows="6"></textarea>
            </div>



        </div>
    </div> -->
</div>




<hr>

<a href="https://portal.optimus.com.bd/?ng=contacts/view/8/edit/" class="btn btn-warning">Edit</a>


    <hr>

    <h3>Balance : <span class="amount">৳ 0.00</span></h3>
    <a href="javascript:void(0)" class="btn btn-primary add_fund">Add Fund</a>
    <a href="javascript:void(0)" class="btn btn-danger return_fund">Return Fund</a>

    <hr>

            <a href="https://portal.optimus.com.bd/?ng=contacts/gen_auto_login/8/" class="md-btn md-btn-primary"> Create Auto Login URL</a>


    <hr>


    <table class="table table-striped margin bottom invoice-total">
        <thead>
        <tr>

            <th class="h5" colspan="3">Accounting Summary</th>

        </tr>
        </thead>
        <tbody>
        <tr>

            <td class="h5"> Total Income
            </td>
            <td class="text-center"><span class="h5 text-success amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="৳ " data-d-group="3">৳ 0.00</span></td>

        </tr>
        <tr>

            <td class="h5"> Total Expense
            </td>
            <td class="text-center"><span class="h5 text-danger amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="৳ " data-d-group="3">৳ 0.00</span></td>


        </tr>



        </tbody>
    </table>

    <table class="table invoice-total">
        <tbody>

        <tr>
            <td class="h5"><strong>Loss </strong></td>
            <td class="text-center"><strong><span class=" h5 text-info amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="৳ " data-d-group="3">৳ 0.00</span></strong></td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</div>




@endsection