@extends('layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
     
<div class="card shadow">
    <div class="card-header">
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
    </div>
    <div class="card-body">
        <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="nis">Nis:</label>
                        <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS" value="{{ old('nis', $student->nis) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama', $student->nama) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="rombel">Rombel:</label>
                        <input type="text" id="rombel" name="rombel" class="form-control" placeholder="Rombel" value="{{ old('rombel', $student->rombel) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="rayon">Rayon:</label>
                        <input type="text" id="rayon" name="rayon" class="form-control" placeholder="Rayon" value="{{ old('rayon', $student->rayon) }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="ket">Keterangan:</label>
                        <div style="display: flex; gap: 0.5rem; align-items: center">
                            <div>
                                <input type="radio" id="Hadir" name="ket" {{ (old('ket', $student->ket) == 'Hadir') ? 'checked="checked"' : '' }} value="Hadir"> 
                                <label class="form-label" for="Hadir">Hadir</label>
                            </div>
                            <div>
                                <input type="radio" id="Sakit" name="ket" {{ (old('ket', $student->ket) == 'Sakit') ? 'checked="checked"' : '' }} value="Sakit"> 
                                <label class="form-label" for="Sakit">Sakit</label>
                            </div>
                            <div>
                                <input type="radio" id="Ijin" name="ket" {{ (old('ket', $student->ket) == 'Ijin') ? 'checked="checked"' : '' }} value="Ijin"> 
                                <label class="form-label" for="Ijin">Ijin</label>
                            </div>
                            <div>
                                <input type="radio" id="Alfa" name="ket" {{ (old('ket', $student->ket) == 'Alfa') ? 'checked="checked"' : '' }} value="Alfa"> 
                                <label class="form-label" for="Alfa">Alfa</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection