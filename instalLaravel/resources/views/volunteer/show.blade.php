@extends('layouts.app')

@section('content')
<table class="table table-responsive martop-sm">
        <thead>
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
        	<tr>
        		<td><h4>{{ $volunteer->nama_vol }}</h4></td>
				<td><p>{{ $volunteer->phone }}</p></td>
				<td><p>{{ $volunteer->address }}</p></td>
				<td><p>{{ $volunteer->email }}</p></td>
				<td><p>{{ $volunteer->animal }}</p></td>
				<td><p>{{ $volunteer->animal_type }}</p></td>
				<td><p>{{ $volunteer->note }}</p></td>
				<td><p>{{ $volunteer->created_at }}</p></td>
				<td><p>{{ $volunteer->updated_at }}</p></td>
				<td>
					<a href="{{ route('volunteer.index') }}" class="btn btn-default">Kembali</a>
				</td>
			</tr>
        </tbody>
</table>
@endsection