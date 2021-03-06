
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Siswa - Show</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('siswa.index') }}">Back</a>

    <div class="card col-md-10 mx-auto">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $siswa->foto) }}" class="w-100">   
                </div>
                <div class="col-md-7 d-flex align-items-center">
                    <table class="fs-4 ">
                        <tr>
                            <td>NIS</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->nis }}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->nama }}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ strtoupper($siswa->kelas->jurusan) }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->kelas->kelas }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->jenis_kelamin="l" ? "Laki-laki" : "Perempuan" }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $siswa->agama }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection