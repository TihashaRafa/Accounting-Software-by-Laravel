@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Edit Profile Page</h4>
                                        <form method ="post" action= "{{ route('store.profile') }}" enctype="multipart/form-data">
                                            @csrf 

                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="from-control" value="{{ $editData->name }}" id="example-text-input">
                                        </div>
                                    </div>


                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="from-control" value="{{ $editData->email }}" id="example-text-input">
                                        </div>
                                    </div>


                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">UserName</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="from-control" value="{{ $editData->username }}" id="example-text-input">
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label">Profile Image</label>
                                        <div class="col-sm-6">
                                            <input type="file" name ="profile_image" class="from-control" id="image">
                                        </div>
                                    </div>


                                    
                                    <div class="row mb-3"> 
                                         <label for="example-text-input" class="col-sm-2 col-from-label"></label>
                                        <div class="col-sm-6">
                                        <img class="card-img-top img-fluid" src="{{ (!empty($editData->Image))? url('upload/admin_images/'.$editData->Image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                        </div>
                                    </div>

                                
<input type="submit" class="btn btn-rounded btn-info waves-effect waves-light" value="Update Profile">
                                        </form>
                                </div>
                            </div> <!-- end col -->
                        </div>

</div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection