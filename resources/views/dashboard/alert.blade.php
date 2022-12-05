@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $item)
                <li class="alert alert-danger list-unstyled">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
