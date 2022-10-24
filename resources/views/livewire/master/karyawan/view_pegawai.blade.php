@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h6>Data Pegawai</h6>
                </div>
                <div class="col text-end">
                    <div class="fa fa-info"></div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for=""> No. Induk</label>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="NIP">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="serach-nip">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for=""> Nama Karyawan</label>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nama Karyawan">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="serach-nip">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for=""> Status</label>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <select type="text" name="status" class="form-control">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row py-1">
                        <div class="col-md-4">
                            <label for=""> Departemen</label>
                        </div>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control">
                                <option value="">--Pilih Departemen--</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4">
                            <label for=""> Jabatan</label>
                        </div>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control">
                                <option value="">--Pilih Departemen--</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Jumlah Karyawan : 10000</label>
                </div>
                <div class="col text-end">
                    <button class="btn btn-danger"> Reset</button>
                    <button class="btn btn-success"> Add Data</button>
                </div>
            </div>
            <div class=" mt-2">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Print</th>
                            <th>No. Induk</th>
                            <th>Nama Karyawan</th>
                            <th>Departemen</th>
                            <th>Jabatan</th>
                            <th>Status Kerja</th>
                            <th>Tgl Kerja</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="9" class="text-center">
                                <label for=""> Tidak ada data yang di tampilkan</label>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
