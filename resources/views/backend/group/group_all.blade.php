
@extends('admin.admin_master')

@section('admin')
<div class="modal-content"><div class="modal-header"><h5 class="modal-title">Add New Group</h5><button type="button" class="bootbox-close-button close" aria-hidden="true"><i class="fal fa-times"></i></button></div><div class="modal-body"><div class="bootbox-body"><form class="form-horizontal push-10" method="post" onsubmit="return false;">
    <div class="mb-3">
        <div class="col-xs-12">
            <div class="form-material floating">
                <input class="form-control" type="text" id="group_name" name="group_name">
                <label for="envato_api_key">Group Name</label>
                           </div>
        </div>
    </div>

</form></div></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Save</button></div></div>

@endsection