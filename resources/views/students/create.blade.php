@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Add new</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <label class="form-label" for="nis">Nis:</label>
                <input type="text" id="nis" value="{{ old('nis') }}" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <label class="form-label" for="nama">Nama:</label>
                <input type="text" id="nama" value="{{ old('nama') }}" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <label class="form-label" for="rombel">Rombel:</label>
                <input type="text" id="rombel" value="{{ old('rombel') }}" name="rombel" class="form-control" placeholder="Rombel">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <label class="form-label" for="rayon">Rayon:</label>
                <input type="text" id="rayon" value="{{ old('rayon') }}" name="rayon" class="form-control" placeholder="Rayon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <label class="form-label" for="ket">Keterangan:</label>
                <div style="display: flex; gap: 0.5rem; align-items: center">
                    <div>
                        <input type="radio" id="Hadir" name="ket" {{ (old('ket') == 'Hadir') ? 'checked="checked"' : '' }} value="Hadir"> 
                        <label class="form-label" for="Hadir">Hadir</label>
                    </div>
                    <div>
                        <input type="radio" id="Sakit" name="ket" {{ (old('ket') == 'Sakit') ? 'checked="checked"' : '' }} value="Sakit"> 
                        <label class="form-label" for="Sakit">Sakit</label>
                    </div>
                    <div>
                        <input type="radio" id="Ijin" name="ket" {{ (old('ket') == 'Ijin') ? 'checked="checked"' : '' }} value="Ijin"> 
                        <label class="form-label" for="Ijin">Ijin</label>
                    </div>
                    <div>
                        <input type="radio" id="Alfa" name="ket" {{ (old('ket') == 'Alfa') ? 'checked="checked"' : '' }} value="Alfa"> 
                        <label class="form-label" for="Alfa">Alfa</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection