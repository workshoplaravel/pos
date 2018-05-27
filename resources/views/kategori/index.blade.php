@extends('layouts.master')

@section('title')
	<title>Kategori</title>
@endsection

@section('content')
	<div class="page-header">
	  	<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	    	<li class="breadcrumb-item active">Kategori</li>
	  	</ol>
  		<h1 class="page-title">Kategori</h1>
	</div>
	<div class="page-content" id="dw">
		<div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Data Kategori
                            <a href="{{ url('/kategori/tambah') }}" 
                                class="btn btn-primary btn-sm">
                                Tambah Data
                            </a>
                        </h4>
                    </div>
                    
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <td># {{ $saya }}</td>
                                <td>Nama Kategori</td>
                                <td>Deksripsi</td>
                                <td>Action</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection