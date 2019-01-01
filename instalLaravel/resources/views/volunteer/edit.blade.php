@extends('layouts.app')

@section('content')
<h4>Ubah Volunteer</h4>
<form action="{{ route('volunteer.update', $volunteer->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama_vol') ? 'has-error' : '' }}">
        <label for="nama_vol" class="control-label">Nama Volunteer</label>
        <input type="text" class="form-control" name="nama_vol" placeholder="Nama Volunteer" value="{{ $volunteer->nama_vol }}">
        @if ($errors->has('nama_vol'))
            <span class="help-block">{{ $errors->first('nama_vol') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
        <label for="phone" class="control-label">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $volunteer->phone }}">
        @if ($errors->has('phone'))
            <span class="help-block">{{ $errors->first('phone') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
        <label for="address" class="control-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $volunteer->address }}">
        @if ($errors->has('address'))
            <span class="help-block">{{ $errors->first('address') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email" class="control-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $volunteer->email }}">
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('animal') ? 'has-error' : '' }}">
        <label for="animal" class="control-label">Animal</label>
        <input type="text" class="form-control" name="animal" placeholder="Animal" value="{{ $volunteer->animal }}">
        @if ($errors->has('animal'))
            <span class="help-block">{{ $errors->first('animal') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('animal_type') ? 'has-error' : '' }}">
        <label for="animal_type" class="control-label">Animal Type</label>
        <input type="text" class="form-control" name="animal_type" placeholder="Animal Type" value="{{ $volunteer->animal_type }}">
        @if ($errors->has('animal_type'))
            <span class="help-block">{{ $errors->first('animal_type') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
        <label for="note" class="control-label">Note</label>
        <textarea name="note" cols="30" rows="5" class="form-control">{{ $volunteer->note }}</textarea>
        @if ($errors->has('note'))
            <span class="help-block">{{ $errors->first('note') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('volunteer.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection