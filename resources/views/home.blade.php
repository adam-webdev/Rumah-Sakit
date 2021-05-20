@extends('layouts.layout')

@section('content')
<table class="table" id="dataTable">
    <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Aksi</td>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Adam</td>
            <td>12000</td>
            <td><a class="btn btn-sm btn-primary" href="">hapus</a> <a href="">edit</a> </td>
        </tr>
    </tbody>
</table>
@endsection
