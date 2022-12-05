@extends('dashboard.layout')

@section('content')
    <form action="{{ route('settingPaketJasa.update') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            {{-- MANUAL --}}
            <div class="col-6">
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-1</label>
                    <div class="col-sm-6">
                        <select name="_manual1" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_manual1') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-2</label>
                    <div class="col-sm-6">
                        <select name="_manual2" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_manual2') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-3</label>
                    <div class="col-sm-6">
                        <select name="_manual3" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_manual3') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-4</label>
                    <div class="col-sm-6">
                        <select name="_manual4" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_manual4') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- MATIC --}}
            <div class="col-6">
                <div class="form-group row">
                    <label class="col-sm-2">Paket Matic-1</label>
                    <div class="col-sm-6">
                        <select name="_matic1" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_matic1') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-2</label>
                    <div class="col-sm-6">
                        <select name="_matic2" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_matic2') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-3</label>
                    <div class="col-sm-6">
                        <select name="_matic3" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_matic3') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Paket Manual-4</label>
                    <div class="col-sm-6">
                        <select name="_matic4" class="form-control form-control-sm">
                            <option value="">Pilih</option>
                            @foreach ($dataPaketJasa as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_matic4') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }} - {{ $item->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

        </div>




        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
