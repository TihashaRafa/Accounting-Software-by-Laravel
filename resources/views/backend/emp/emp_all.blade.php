@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">

  <div class="subheader">
        <h1 class="subheader-title">
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                </g>
            </svg> Employees <span class="fw-300"></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="{{ route('emp.add') }}" class="btn btn-primary waves-effect waves-themed">Add an employee</a>
        </div>

    </div>
    <div class="row">

<div class="col-lg-3">
    <div class="panel">
    <div class="panel-container">
        <div class="panel-content">
            <div class="text-center" href="#">

           <br>
           <br>

            @foreach($emp as $key =>$items)  
            
            <img  style="max-height: 80px;" class="rounded float-center" type="file" name="image" src="{{ asset('upload/emp_image/'.$items->image) }}" >

                <h3><strong> {{$items->name }}</strong></h3>
                <div class="m-t-xs text-muted"> {{$items->job_title  }}</div>
                <div class="mt-4 text-center demo mb-4">
                </div>

                    <p><svg xmlns="" xmlns:xlink="" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           
                        </svg> {{$items-> email }}</p>
                    <address>
                        <strong> Payment:
                        {{ $items->pay }}
                    | <span class="amount text-success">{{ $items->amount }}</span> </strong><br>
                        <strong>Date joined: </strong> <span class="text-warning">{{ $items->date }}</span><br>
                        <div class="hr-line-dashed"></div>Address: 
                        {{ $items-> address }}<br>   {{ $items-> state }} <br>
                        {{ $items-> zip }} <br>

                    <abbr title="Phone">phone:</abbr>  {{ $items->phone }}
                    </address>

                    <div>
                        <a href="{{ route('emp.edit', $items->id) }}" class="btn btn-warning waves-effect waves-themed">View</a>
                    </div>


                </div>

            </div>
        </div>

        @endforeach

    </div>
</div>





        </div>
    </div>

@endsection    