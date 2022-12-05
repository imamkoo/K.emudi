@extends('dashboard.layout')

@section('content')
    <form action="{{ route('halaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"
            class="form-control form-control-sm" name="title" id="title" aria-describedby="helpId" placeholder="Title" value="{{ Session::get('title') }}">
        </div>

        <div class="mb-3">
        <label for="text" class="form-label">Text</label>
        <textarea class="form-control summernote" name="text" rows="5">{{ Session::get('text') }}</textarea>
        </div>

        <div class="d-flex align-items-center">
            <div class="m-2">
                <a href="{{ route('halaman.index') }}" class="btn btn-secondary">
                    BACK
                </a>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">SAVE</button>
        </div>
    </form>
@endsection
