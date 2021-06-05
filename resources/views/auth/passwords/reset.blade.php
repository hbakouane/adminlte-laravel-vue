@extends('layouts.auth')

@section('content')
    <password-update token="{{ request('token') }}"></password-update>
@endsection
