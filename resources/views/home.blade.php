@extends('welcome')

@section('content')

@if(Auth::user()->role == 1)
@include('dashboard_client')
@else
@include('dashboard_admin')
@endif

@endsection