
@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">


    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Add New User</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                    <form method ="post" action= "{{ route('staff.update') }}" id="myForm" enctype="multipart/form-data">
                            @csrf 

                            <input type="hidden" name = "id" value="{{ $staff->id }}">

                            <div class="mb-3">
                                <label for="username">Username (Email)</label>
                                <input type="text" class="form-control" value="{{ $staff -> email}}" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $staff -> staff_id}}" name="staff_id">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" value="{{ $staff -> phpne}}" name="phpne">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Alternative Email</label>
                                <input type="text" class="form-control" id="phone"  value="{{ $staff -> alt_email}}" name="alt_email">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Mobile Phone</label>
                                <input type="text" class="form-control" id="mobile_phone"  value="{{ $staff -> mobile_phone}}" name="mobile_phone">
                            </div>

                            <div class="mb-3">                                                                
                                <label>User Type</label>

                                <select id="catagory"  type="radio"  value="{{ $staff -> user_type}}"  name="user_type" >
                                <option >Employee</option>
					            <option >Billing and Management </option>
                                
                            </select>

                                
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"  value="{{ $staff -> passwod}}" name="passwod">
                            </div>

                            <div class="mb-3">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword"  value="{{ $staff -> confirm_pass}}" name="confirm_pass">
                            </div>                                                                                    

                            <button type="submit" class="btn btn-primary waves-effect waves-themed">Submit</button>
                            Or <a href="#">Cancel</a>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

    
    </div>
</div>

@endsection