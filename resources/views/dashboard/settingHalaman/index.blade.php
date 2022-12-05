@extends('dashboard.layout')

@section('content')
    <form action="{{ route('settingHalaman.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">Logo</label>
            <div class="col-sm-6">
                <select name="_logo" class="form-control form-control-sm">
                    <option value="">Pilih</option>
                    @foreach ($dataHalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value('_logo') == $item->id ? 'selected' : '' }}>
                            {{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Judul</label>
            <div class="col-sm-6">
                <select name="_judul" class="form-control form-control-sm">
                    <option value="">Pilih</option>
                    @foreach ($dataHalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value('_judul') == $item->id ? 'selected' : '' }}>
                            {{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
