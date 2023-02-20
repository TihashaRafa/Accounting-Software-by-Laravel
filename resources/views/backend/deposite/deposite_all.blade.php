@extends('admin.admin_master')

@section('admin')

<div class="page-content">
                    <div class="container-fluid">

<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Add Deposit</h2>

                </div>
                <div class="panel-container" id="ibox_form">

                    <div class="panel-content">

                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>

                        <form method ="post" action= "{{ route('deposite.store') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf 


                                       
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Account</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="account" class="from-control" value="" id="example-text-input">
                                        </div>
                                    </div>


                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="code" class="from-control" value="" id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">date</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="date" class="from-control" value="" id="example-text-input">
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">description</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="description" class="from-control" value="" id="example-text-input">
                                        </div>
                                    </div>

                                    
                                     <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">currency</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="currency" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">amount</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="amount" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">catagory</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="catagory" class="from-control" >
                                        </div>
                                    </div>


                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">tags</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="tags" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">company</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="company" class="from-control" >
                                        </div>
                                    </div>
                                    

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">payer</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="payer" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">staff</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="staff" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">method</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="method" class="from-control" >
                                        </div>
                                    </div>

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">status</label>
                                        <div class="col-sm-6">
                                            <input type="text" name ="status" class="from-control" >
                                        </div>
                                    </div>

                                
                                    <input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Add Deposite">
                        </form>

                    </div>





                </div>
            </div>



<!-- show all data -->

        </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>Recent Deposits</h2>

                    </div>

                    <div class="panel-container">
                        <div class="panel-content">

                            <table class="table table-bordered table-striped sys_table">
                                <thead style="background:#f0f2ff">
                                <tr>
                                    <th class="h6">Account</th>
                                    <th class="h6" width="50%">Description</th>
                                    <th class="h6">Amount</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deposite as $key =>$items)

                                    <tr>

                                        <td class="h6">{{ $items->account }} </td>
                                        <td class="h6 text-info"><a href="https://portal.optimus.com.bd/?ng=transactions/manage/83/">
                                           <span class="text-info"> {{ $items->description }} </span></a>  <br>
                                           <span class="text-info"> {{ $items->description }} </span></a>  <br>
                                           {{ $items->code }} 
                                         <br>
                                      
                                        </td>
                                        
                                        <td class="amount text-success h6" data-a-sign="৳" data-a-sep="," data-a-dec="." data-p-sign="p">{{ $items-> amount }}</td>
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
<!-- show all data end -->

@endsection