@extends('layouts.app')
@include('layouts.sidebar')
@section('content')

    <div class="title m-b-md">

        {{ config('app.name', 'Laravel') }}

    </div>

@endsection


 
@include('layouts.footer')
