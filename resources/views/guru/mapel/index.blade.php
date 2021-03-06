
@extends('layouts.guru.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Mata Pelajaran</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <div class="card">
        <div class="card-body">

            @if ($isGuruMapel)
            <h5>Tentukan data :</h5>
            <div class="col-md-8">
                <form action="{{ route('gr.mapel.select') }}" method="post" class="mt-2 px-2">
                    @csrf
                    <div class="d-flex">
                        <div class="mb-1 me-2">
                            <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                            <select class="form-select" aria-label="Default select example" name="mapel_id" id="mapel_id">
                                @foreach ($mapels as $mapel)
                                    <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                                @endforeach
                            </select>
                        </div>
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
                    <a href="{{ route('gr.mapel.index') }}" class="btn btn-dark mt-2 px-4">Refresh</a>
                </form>
            </div>
            @else
            <h5>Tidak ada mapel yang anda ajarkan</h5>
            @endif

            <div class="d-flex justify-content-end mb-3">
                <div class="d-flex align-items-center me-3">
                    @if (!empty($rapots))
                        <a class="btn btn-warning" href="{{ route('gr.mapel.edit', [$kelas_id,$mapel_id,$semester_id]) }}"><i class="bi bi-pencil-square"></i> Update Nilai</a>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <b class="text-center ">{{ $selected }}</b>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td>Nilai Akhir</td>
                            <td>Predikat</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        @forelse ($rapots as $rapot)
                            <tr>
                                <td>{{ $rapot->siswa->absen }}</td>
                                <td>{{ $rapot->siswa->nama }}</td>
                                <td>{{ $rapot->pengetahuan }}</td>
                                <td>{{ $rapot->ketrampilan }}</td>
                                <td>{{ $rapot->nilai_akhir }}</td>
                                <td>{{ $rapot->predikat }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center"><b>Data tidak ada</b></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection