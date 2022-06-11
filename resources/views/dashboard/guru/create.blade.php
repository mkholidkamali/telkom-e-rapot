
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru - Create</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('guru.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="">
                <div class="mb-2">
                    <label for="no_induk" class="form-label">No Induk</label>
                    <input type="text" class="form-control" name="no_induk" id="no_induk">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <button class="btn btn-success mt-2">Tambah Guru</button>
            </form>
        </div>
    </div>

@endsection