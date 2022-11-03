@extends('layout.main')

@section('content')
<div class="min-height-200px">
    <!-- Simple Datatable start -->
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Data Members</h4>
            <a href="{{ url('member/tambah') }}" type="button" class="btn btn-success mb-2 d-inline"> <i class="icon-copy dw dw-add-user mr-2"></i>Tambah</a>
        </div>
        <div class="card-body p-20">
            <table class="data-table table stripe hover">
                <thead>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>JK/th>
                    <th>Tgl Lahir</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($members as $m )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $m->no_ktp }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->jenis_kelamin }}</td>
                        <td>{{ $m->tgl_lahir }}</td>
                        <td>{{ $m->no_hp }}</td>
                        <td>{{ $m->email }}</td>
                        <td><img style="height: 70px;width: 70px" src="{{url('fotomember/'.$m->foto) }}" alt=""></td>
                        <td class="inline">
                            <a href="/member/ubah/{{ $m->id }}" type="button" class="btn btn-sm btn-info "><i class="icon-copy dw dw-edit3"></i></a>
                            <a onclick=" return confirm('Apa anda yakin ingin menghapus no meja ?')" href="/member/hapus/{{$m->id}}" class="btn btn-sm btn-danger delete"><i class="icon-copy dw dw-delete-3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
