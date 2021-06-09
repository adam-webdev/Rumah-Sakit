@extends('layouts.layout') 
 
@section('content')         
<div class="d-sm-flex align-items-center justify-content-between mb-4">     
    <h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1> 
    <a href="{{route('user.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">     
    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a> 
</div> 
<div class="d-sm-flex align-items-center justify-content-between mb-4">     
  <div class="card-body">   
  <div class="table-responsive">     
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">       
      <thead>         
        <tr align="center">
          <th>Nama</th>
          <th>Email</th>           
          <th>No Hp</th>           
          <th>Alamat</th>           
          {{-- <th>Roles</th>            --}}
          <th>Aksi</th>         
        </tr>       
      </thead>       
      <tbody>         
        @foreach ($user as $usr)         
        <tr>           
          <td>{{$usr->name}}</td>           
          <td>{{$usr->email}}</td>             
          <td>{{$usr->telephone}}</td>             
          <td>{{$usr->alamat}}</td>             
          {{-- <td>{{$usr->roles}}</td>               --}}
          <td align="center">             
            <a href="{{route( 'user.edit' ,[$usr->id])}}" data-toggle="tooltip" title="Edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">               
              <i class="fas fa-edit fa-sm text-white-50"></i>              
            </a>
            <a href="/user/hapus/{{ $usr->id }}" data-toggle="tooltip" title="Hapus" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">               
              <i class="fas fa-trash-alt fa-sm text-white-50"></i>               
            </a>           
            </td>         
        </tr>         
        @endforeach        
        </tbody>     
    </table>   
</div>   
</div> 
</div> 
@endsection  