@extends('dashboard.layout')

@section('content')
<form action="{{ route('manual.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control form-control-sm" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Nama Mobil</label>
        <input type="text" class="form-control form-control-sm" name="title" id="title" aria-describedby="helpId"
            placeholder="Nama Mobil" value="{{ Session::get('title') }}">
    </div>

    <div class="d-flex align-items-center">
        <div class="m-2">
            <a href="{{ route('manual.index') }}" class="btn btn-secondary">
                BACK
            </a>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
    </div>
</form>
@endsection
