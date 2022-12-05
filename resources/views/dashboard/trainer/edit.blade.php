@extends('dashboard.layout')

@section('content')
<form action="{{ route('trainer.update',$data->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @if('foto')
        <img style="max-width:100px;max-height:100px"
            src="{{ asset('foto') . '/' . $data->foto }}">
    @endif
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control form-control-sm" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control form-control-sm" name="nama" id="nama" aria-describedby="helpId"
            placeholder="Nama" value="{{ $data->nama }}">
    </div>

    <div class="d-flex align-items-center">
        <div class="m-2">
            <a href="{{ route('trainer.index') }}" class="btn btn-secondary">
                BACK
            </a>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
    </div>
</form>
@endsection
