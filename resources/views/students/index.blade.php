@extends('students.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>CRUD Absensi</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>          
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @if (count($students))
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->rombel }}</td>
                    <td>{{ $student->rayon }}</td>
                    <td><div class="badge {{ ($student->ket == 'Ijin') ? 'bg-info' : '' }} {{ ($student->ket == 'Sakit') ? 'bg-warning' : '' }} {{ ($student->ket == 'Hadir') ? 'bg-primary' : '' }} {{ ($student->ket == 'Alfa') ? 'bg-danger' : '' }}">{{ $student->ket}}</div></td>
                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                
                            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
            
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus absensi siswa ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">Tidak ada data absensi</td>
            </tr>
        @endif
    </table>
    
    {!! $students->links() !!}
        
@endsection