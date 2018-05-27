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
                        <h4 class="panel-title">Edit Data</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/kategori/' . $kategori->id, 'method' => 'PUT']) !!}
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="nama" 
                                    class="form-control"
                                    value="{{ $kategori->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi" 
                                    class="form-control"
                                    value="{{ $kategori->description }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">
                                    Perbaharui
                                </button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection