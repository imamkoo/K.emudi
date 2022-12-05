@extends('dashboard.layout')

@section('content')
<p class="card-title">Trainer</p>
<div class="row">
    <div class="pb-3 col-3"><a href="{{ route('trainer.create') }}" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#exampleModal">+ Tambah Trainer</a>
    </div>
    <div class="pb-3 col-3"><a href="{{ route('jadwal.create') }}" class="btn btn-dark">+ Tambah Jadwal</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th>Nama</th>
                <th>Jadwal Belajar</th>
                <th>Kendaraan</th>
                <th class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jadwal->tanggal_indo }} ({{ $item->jadwal->waktu }})</td>
                <td>{{ $item->jadwal->kendaraan->title }}</td>
                <td>
                    <a href="{{ route('trainer.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form class="d-inline" action="{{ route('trainer.destroy', $item->id) }}"
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">WARNING!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                SEBELUM MENAMBAHKAN TRAINER, BUAT JADWAL BELAJAR TERLEBIH DAHULU!
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="{{ route('trainer.create') }}">Buat Trainer</a>

                <a class="btn btn-primary" href="{{ route('jadwal.index') }}">Buat Jadwal</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@endsection
