@extends('dashboard.layout')

@section('content')
<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Belajar</label>
                <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" aria-describedby="helpId"
                    placeholder="dd/mm/yy" value="{{ Session::get('tanggal_indo') }}">
            </div>
        </div>
        <div class="col-5">
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Belajar</label>
                <input type="time" class="form-control form-control-sm" name="waktu" id="waktu" aria-describedby="helpId"
                    placeholder="Waktu Belajar" value="{{ Session::get('waktu') }}">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
            <label for="kendaraan" class="form-label">Kendaraan</label>
            <select name="kendaraan_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Pilih Kendaraan</option>
                @foreach ($dataKendaraan as $item)
                    <option value="{{ $item->id }}">{{ $item->title }} - {{ $item->tipe }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center">
        <div class="m-2">
            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">
                BACK
            </a>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
    </div>
</form>
@endsection
