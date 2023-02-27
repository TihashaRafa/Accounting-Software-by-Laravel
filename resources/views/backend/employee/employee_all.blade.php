
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


    <div class="subheader">
        <h1 class="subheader-title">
            </svg> Employees <span class="fw-300"></span>
        </h1>
        <div class="subheader-block d-lg-flex-end align-items-center">
            <a href="{{ route('employee.add') }}" class="btn btn-primary waves-effect waves-themed">Add an employee</a>
        </div>

    </div>
    <br>
    <br>
    <br>
    
<div class="row">

<div class="col-lg-6">
<div class="panel">
<div class="panel-container">
    <div class="panel-content">
        <div class="text-center" href="#">

            <img alt="image" class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" src="">
        
            <h3></h3>
            <div class="m-t-xs text-muted">
                Customer Success Manager
            </div>
            <div class="mt-4 text-center demo mb-4">

            </div>

            <p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                 
                </svg> </p>
            <address>
                <strong>
                 Monthly
                    <span class="amount text-success">৳ 7,500.00</span> </strong><br>
                <strong>Date joined: </strong> <span class="text-warning">16/11/2018</span><br>
                <div class="hr-line-dashed"></div>
                1101 Marina Villae Parkway, Suite 201 <br>  Alameda <br> California 94501 <br>

                <abbr title="Phone">P:</abbr> (650) 488-7772
                
            </address>
         

            <div>
                <a href="" class="btn btn-warning waves-effect waves-themed">View</a>
            </div>

        </div>

    </div>
</div>

</div>
</div>






</div>

    </div>
    </div>


 @endsection       