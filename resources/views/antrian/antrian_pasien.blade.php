@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Tombol Tambah Owner -->
    <div style="text-align: right; margin-bottom: 10px;">
        <a href="{{ route('owner.index') }}">Tambah Owner & Pasien Baru</a>
        {{-- <a href="{{ route('antrian') }}">Pasien Lama</a> --}}
    </div>

    <!-- Tabel Antrian -->
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No Antrian</th>
                <th>Tanggal</th>
                <th>No. RM</th>
                <th>Pasien</th>
                <th>Owner Pasien</th>
                <th>Umur</th>
                <th>Nomor Telepon</th>
                <th>Status</th>
                <th>Dokter</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($antrians as $antrian)
                <tr>
                    <td>{{ $antrian->tanggal_antrian }}</td>
                    <td>{{ $antrian->id_antrian }}</td>
                    <td>{{ $antrian->pasien()->rekamMedis()->id_rm }}</td>
                    <td>{{ $antrian->pasien()->nama_pasien }}</td>
                    <td>{{ $antrian->pasien()->owner()->nama_owner }}</td>
                    <td>{{ $antrian->pasien()->umur }}</td>
                    <td>{{ $antrian->pasien()->owner()->no_hp }}</td>
                    <td>{{ $antrian->status_antrian }}</td>
                    <td>{{ $antrian->users()->name }}</td>
                    <td>
                        <form action="{{ route('queues.destroy', $queue->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
