@extends('dashboard.layout')

@section('content')
<form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control form-control-sm" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control form-control-sm" name="nama" id="nama" aria-describedby="helpId"
            placeholder="Nama" value="{{ Session::get('nama') }}">
    </div>

    <div class="d-flex align-items-center">
        <div class="m-2">
            <a href="{{ route('pengurus.index') }}" class="btn btn-secondary">
                BACK
            </a>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
    </div>
</form>
@endsection
