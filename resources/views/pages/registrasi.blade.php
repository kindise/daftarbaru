@extends('layouts.main')
@section('title', 'Daftar Baru')
@section('content')

<div class="container mt-3">
    <form method="post" action="{{route('simpan-registrasi')}}"> 
    @csrf
        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Data Pribadi Pasien</b>
            </div>
            <div class="card-body">    
            </div>
        </div>

        <div class="card mb-3" style="border: 1px dashed;">
            <div class="card-header" style="background: #d4f7ed;">
                <b>Alamat KTP</b>
            </div>
            <div class="card-body">    
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