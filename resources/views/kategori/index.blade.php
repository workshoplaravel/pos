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
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <table class="table table-hover">
                            <tr>
                                <td># </td>
                                <td>Nama Kategori</td>
                                <td>Deksripsi</td>
                                <td>Action</td>
                            </tr>
                            <?php $no = 1; ?>
                            @foreach ($kategori as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->description }}</td>
                                <td>
                                    {!! Form::open(['url' => '/kategori/' . $row->id, 'method' => 'DELETE']) !!}
                                    <a href="{{ url('/kategori/' . $row->id) }}" 
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <button class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection