
@extends('layouts.dashboard.main')

@section('main')
    <h1 class="mt-3">Dashboard</h1>
    <hr>

    <div class="row mt-3">

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-primary">
                    <div class="text-white">
                        <h5>36</h5>
                        Jumlah Guru
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>11</h5>
                        Jumlah Kelas X
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>12</h5>
                        Jumlah Kelas XI
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>13</h5>
                        Jumlah Kelas XII
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-success">
                    <div class="text-white">
                        <h5>200</h5>
                        Jumlah Siswa
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-warning">
                    <div class="text-white">
                        <h5>1</h5>
                        Jumlah Admin
                    </div>
                    <div>
                        <i class="bi bi-bar-chart-line-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection