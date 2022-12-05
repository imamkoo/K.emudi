@extends('dashboard.layout')

@section('content')
    <form action="{{ route('jadwal.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Belajar</label>
                    <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal"
                        aria-describedby="helpId" placeholder="dd/mm/yy" value="{{ $data->tanggal_indo }}">
                </div>
            </div>
            <div class="col-5">
                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu Belajar</label>
                    <input type="time" class="form-control form-control-sm" name="waktu" id="waktu"
                        aria-describedby="helpId" placeholder="Waktu Belajar" value="{{ $data->waktu }}">
                </div>
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
