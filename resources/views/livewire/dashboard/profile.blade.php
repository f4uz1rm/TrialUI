@extends('layouts.app')
@section('content')
    <div class="div">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h6>Profile</h6>
                    </div>
                    <div class="col text-end">
                        <div class="fa fa-gear" id="setting-profile"></div>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <!-- Data Profile -->
                <div class="row">
                    <div class="col">
                        <div class="row py-1">
                            <div class="col-md-3 ">
                                <label for=""> Nama</label>
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" id="nama-profile" class="form-control form-control-sm"
                                    value="Fauzi Rizky Mauladani" readonly>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-3">
                                <label for=""> Email</label>
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="email" id="email-profile" class="form-control form-control-sm"
                                    value="f4uz1rm@gmail.com " readonly>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-3">
                                <label for=""> No. Telp</label>
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="no_telp" id="telp-profile" class="form-control form-control-sm"
                                    value="089525193937" readonly>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-3">
                                <label for=""> Alamat</label>
                            </div>
                            <div class="col-md-1">
                                :
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="alamat" id="alamat-profile"
                                    class="form-control form-control-sm" value="CImahi , Jawa Barat" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <img src="https://avatars.githubusercontent.com/u/62155382?v=4" class="rounded-circle"
                            width="150px">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="change-foto">Ganti Foto</label>
                            <input type="file" class="form-control-file" id="foto upload">
                        </div>
                        <div class="btn btn-danger">Batal</div>
                        <div class="btn btn-success">Ubah</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
