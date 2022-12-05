@extends('dashboard.layout')

@section('content')
<p class="card-title">Jadwal Belajar</p>
<div class="pb-3"><a href="{{ route('jadwal.create') }}" class="btn btn-success">+ Tambah Jadwal</a>
</div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th class="pb-3">
                    <a href="{{ route('trainer.create') }}" class="btn btn-dark">+ Tambah Trainer
                </th>
                    </a>
                <th>Kendaraan</th>
                <th>Tipe Kendaraan</th>
                <th>Tanggal Belajar</th>
                <th>Waktu Belajar</th>
                <th class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>@foreach ($item->trainer as $items)
                        {{ $items['nama'] }}
                    @endforeach
                    </td>
                    <td>{{ $item->kendaraan->title }}</td>
                    <td>{{ $item->kendaraan->tipe }}</td>
                    <td>{{ $item->tanggal_indo }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>
                        <a href="{{ route('jadwal.edit',$item->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form   class="d-inline"
                                action="{{ route('jadwal.destroy',$item->id) }}"
                                onsubmit="return confirm('Are You Sure Delete This ?')"
                                method="POST">
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
