@extends('layout.main')

@section('content')
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-4">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Ubah Member</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('member/prosesUbah/'.$members->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No KTP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="no_ktp" value="{{ $members->no_ktp }}" type="text" placeholder="No KTP">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Member</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama" value="{{ $members->nama }}" placeholder="Nama" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="email" value="{{ $members->email }}" type="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No HP</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="no_hp" type="number" value="{{ $members->no_hp }}" placeholder="Nomor Hp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12 col-md-10">
                    <select name="jenis kelamin" id="jenis_kelamin" class="custom-select col-12">
                        <option value="{{ $members->jenis_kelamin }}">{{ $members->jenis_kelamin }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" value="{{ $members->tgl_lahir }}" name="tgl_lahir" type="date">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Foto</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="foto" type="file">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" value="" name="password" type="password">
                </div>
            </div>
            <div>
                <a href="{{ url('/member') }}" type="button" class="btn btn-md btn-warning">Batal</a>
                <button type="submit" class="btn btn-md btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
