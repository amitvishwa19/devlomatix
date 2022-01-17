
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Global</h4>
        <small>General App settings</small>
    </div><!--end card-header-->
    <div class="card-body">
        <form action="{{route('setting.store',['type'=>'global'])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">App Name</label>
                <input type="text" class="form-control" name="app_name" value="{{AppSetting::get('app_name')}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">App Description</label>
                <input type="text" class="form-control" name="app_description" value="{{AppSetting::get('app_description')}}">
            </div>

            <button type="submit" class="btn btn-info waves-effect waves-light btn-sm">Save</button>
        </form>

    </div><!--end card-body-->
</div>


