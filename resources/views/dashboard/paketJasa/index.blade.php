@extends('dashboard.layout')

@section('content')
    <p class="card-title">Paket Jasa</p>
    <div class="pb-3"><a href="{{ route('paketJasa.create') }}" class="btn btn-success">+ Tambah Paket Jasa</a>
    </div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Text</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{!! $item->text !!}</td>
                        <td>
                            <a href="{{ route('paketJasa.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form class="d-inline" action="{{ route('paketJasa.destroy', $item->id) }}"
                                onsubmit="return confirm('Are You Sure Delete This ?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
