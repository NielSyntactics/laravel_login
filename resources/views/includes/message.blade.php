@if ($errors->any())

    @foreach ($errors->all() as $error)
        <div class="alert  alert-danger  my-1">
            <p><b>{{ $error }}</b></p>
        </div>
    @endforeach

@endif

@if(session()->has('success'))
    <div class="alert  alert-success  my-1">
        <p><b>{{ session()->get('success') }}</b></p>
    </div>
@endif


@if(session()->has('update'))
    <div class="alert  alert-update  my-1">
        <p><b>{{ session()->get('update') }}</b></p>
    </div>
@endif


@if(session()->has('delete'))
    <div class="alert  alert-danger  my-1">
        <p><b>{{ session()->get('delete') }}</b></p>
    </div>
@endif
