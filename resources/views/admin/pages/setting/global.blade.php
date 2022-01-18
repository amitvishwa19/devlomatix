
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
                <input type="text" class="form-control" name="app_name" value="{{setting('app_name')}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">App Description</label>
                <input type="text" class="form-control" name="app_description" value="{{setting('app_description')}}">
            </div>

            <div class="form-group">

                <div class="checkbox checkbox-primary">
                    <input id="checkbox2" type="checkbox" checked="" name="job_mail">
                    <label for="checkbox2">Primary</label>
                </div>

            </div>

            <button type="submit" class="btn btn-info waves-effect waves-light btn-sm">Save</button>
        </form>

    </div><!--end card-body-->
</div>

{{-- {{setting('job_mail') ? 'checked' : null}} --}}
