@extends('layouts.master')

@section('title')
	<title>Kategori</title>
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
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
			
		</div>
	</div>
@endsection