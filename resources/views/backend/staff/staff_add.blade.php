
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
                    <form method ="post" action= "{{ route('staff.store') }}" id="myForm" enctype="multipart/form-data">
                            @csrf 

                            <div class="mb-3">
                                <label for="username">Username (Email)</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="name" name="staff_id">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phpne">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Alternative Email</label>
                                <input type="text" class="form-control" id="phone" name="alt_email">
                            </div>

                            <div class="mb-3">
                                <label for="phone">Mobile Phone</label>
                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                            </div>

                            <div class="mb-3">                                                                
                                <label>User Type</label>

                                <select id="catagory"  type="radio"  name="user_type" >
                                <option >Employee</option>
					            <option >Billing and Management </option>
                                
                            </select>

                                
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="passwod">
                            </div>

                            <div class="mb-3">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="confirm_pass">
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