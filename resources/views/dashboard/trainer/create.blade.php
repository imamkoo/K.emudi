@extends('dashboard.layout')

@section('content')
<form action="{{ route('trainer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-5">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control form-control-sm" name="foto" id="foto">
        </div>
        <div class="col-5">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control form-control-sm" name="nama" id="nama" aria-describedby="helpId"
                placeholder="Nama" value="{{ Session::get('nama') }}">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-5">
            <label for="jadwal" class="form-label">Jadwal</label>
            <select name="jadwal_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Pilih Jadwal</option>
                @foreach ($dataJadwal as $item)
                <option value="{{ $item->id }}">{{ $item->kendaraan->title }} -- {{ $item->tanggal_indo }} ({{
                    $item->waktu }})</option>
                @endforeach
            </select>
        </div>
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
