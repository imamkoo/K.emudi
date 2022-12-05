@extends('dashboard.layout')

@section('content')
    <form action="{{ route('paketJasa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"
            class="form-control form-control-sm" name="title" id="title" aria-describedby="helpId" placeholder="Title" value="{{ Session::get('title') }}">
        </div>

        <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text"
            class="form-control form-control-sm" name="price" id="price" aria-describedby="helpId" placeholder="Price" value="{{ Session::get('price') }}">
        </div>

        <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type" class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Pilih Tipe Kendaraan</option>
            <option value="Manual">Manual</option>
            <option value="Matic">Matic</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="text" class="form-label">Text</label>
        <textarea class="form-control summernote" name="text" rows="5">{{ Session::get('text') }}</textarea>
        </div>

        <div class="d-flex align-items-center">
            <div class="m-2">
                <a href="{{ route('paketJasa.index') }}" class="btn btn-secondary">
                    BACK
                </a>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
        </div>
    </form>
@endsection
