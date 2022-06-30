
@extends('layouts.dashboard.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Nilai</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <div class="card">
        <div class="card-body">

            <h5>Tentukan data :</h5>
            {{-- <small>Note* : Ini nanti mungkin di select dlu baru muncul datanya</small> --}}
            <div class="col-md-8">
                <form action="{{ route('rapot.select') }}" method="post" class="mt-2 px-2">
                    @csrf
                    <div class="d-flex">
                        <div class="mb-1 me-2">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelas_id" id="kelas_id">
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1 me-2">
                            <label for="semester_id" class="form-label">Semester</label>
                            <select name="semester_id" id="semester_id" class="form-select">
                                @foreach ($semester as $smt)
                                    <option value="{{ $smt->id }}">{{ ucfirst($smt->semester) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-dark mt-2 px-4">Pilih</button>
                    <a href="{{ route('nilai.index') }}" class="btn btn-dark mt-2 px-4">Refresh</a>
                </form>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <div class="d-flex align-items-center me-3">
                    {{-- <a class="btn btn-success" href="{{ route('nilai.create') }}">Tambah Nilai</a> --}}
                </div>
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="text-center">
                <b class="text-center ">Tes</b>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td>Nilai akhir</td>
                            <td>Predikat</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="text-center"><b>Data tidak ada</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection