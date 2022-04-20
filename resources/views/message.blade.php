@if(session()->has('message'))
<div class="box no-border">
    <div class="box-tools">
        <p class="alert alert-success alert-dismissible">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
    </div>
</div>
@endif