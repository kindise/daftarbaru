@extends('layouts.main')
@section('title', 'Daftar Baru')
@section('content')

<div class="container mt-3 shadow-lg p-3 bg-body rounded">
    <form method="post" action="{{route('simpan-registrasi')}}"> 
    @csrf
        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Data Pribadi Pasien</b>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nik" class="form-label teks-asterisk">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>  
                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label teks-asterisk">Nama Lengkap</label>
                            <input type="text" class="form-control text-uppercase" id="nama_pasien" name="nama_pasien" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label teks-asterisk">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="agama_id" class="form-label teks-asterisk">Agama</label>
                            <select class="form-select" id="agama_id" name="agama_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($agama as $val)
                                    <option value="{{$val->AGAMA_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div> 
                        <div class="mb-3">
                            <label for="pendidikan_id" class="form-label teks-asterisk">Pendidikan Terakhir</label>
                            <select class="form-select" id="pendidikan_id" name="pendidikan_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($pendidikan as $val)
                                    <option value="{{$val->PENDIDIKAN_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label teks-asterisk">Email </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email untuk mendapatkan notifikasi" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="no_telp_selular" class="form-label teks-asterisk">No Telp/Hp</label>
                            <input type="text" class="form-control" id="no_telp_selular" name="no_telp_selular" required>
                        </div>  
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label teks-asterisk">Tempat Lahir</label>
                            <input type="text" class="form-control text-uppercase" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="jk_id" class="form-label teks-asterisk">Jenis Kelamin</label>
                            <select class="form-select" id="jk_id" name="jk_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($jk as $val)
                                    <option value="{{$val->JENIS_KELAMIN_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div> 
                        <div class="mb-3">
                            <label for="status_kawin_id" class="form-label teks-asterisk">Status Kawin</label>
                            <select class="form-select" id="status_kawin_id" name="status_kawin_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($sk as $val)
                                    <option value="{{$val->STATUS_KAWIN_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_ibu_kandung" class="form-label teks-asterisk">Nama Ibu Kandung</label>
                            <input type="text" class="form-control text-uppercase" id="nama_ibu_kandung" name="nama_ibu_kandung" required>
                        </div>
                        <div class="mb-3">
                            <label for="suku" class="form-label">Suku</label>
                            <input type="text" class="form-control text-uppercase" id="suku" name="suku">
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Alamat KTP</b>
            </div>
            <div class="card-body"> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="prov_id" class="form-label teks-asterisk">Provinsi</label>
                            <select class="form-select" id="prov_id" name="prov_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($prov as $val)
                                    <option value="{{$val->PROPINSI_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kabkot_id" class="form-label teks-asterisk">Kabupaten/Kota</label>
                            <select class="form-select" id="kabkot_id" name="kabkot_id" required>
                                    <option value="">-- Pilih --</option>
                            <select>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kecamatan_id" class="form-label teks-asterisk">Kecamatan</label>
                            <select class="form-select" id="kecamatan_id" name="kecamatan_id" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach($kec as $val)
                                    <option value="{{$val->KECAMATAN_ID}}">{{$val->NAMA}}</option>
                                    @endforeach
                            <select>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alamat" class="form-label teks-asterisk">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>  
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="rt" class="form-label teks-asterisk">RT</label>
                            <input type="text" class="form-control" id="rt" name="rt" required>
                        </div>  
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="rw" class="form-label teks-asterisk">RW</label>
                            <input type="text" class="form-control" id="rw" name="rw" required>
                        </div>  
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label teks-asterisk">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                        </div>  
                    </div>
                </div>  
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Alamat Domisili</b>
            </div>
            <div class="card-body">    
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Data Penanggung Jawab</b>
            </div>
            <div class="card-body">    
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Pembayaran / Penjamin</b>
            </div>
            <div class="card-body">    
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Dokumen Pendukung</b>
            </div>
            <div class="card-body">    
            </div>
        </div>
    </form>
</div>
@endsection