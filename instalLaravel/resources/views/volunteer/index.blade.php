@extends('layouts.app')

@section('content')
    <a href="{{ route('volunteer.create') }}" class="btn btn-info btn-sm">Volunteer Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama Volunteer</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Animal</th>
            <th>Animal Type</th>
            <th>Note</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($volunteers as $volunteer)
                <tr>
                    <td>{{ $volunteer->id }}</td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->nama_vol }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->phone }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->address }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->email }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->animal }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->animal_type }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->note }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->created_at }}</a></td>
                    <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{ $volunteer->updated_at }}</a></td>
                    <td>
                        <form action="{{ route('volunteer.destroy', $volunteer->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('volunteer.edit', $volunteer->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection