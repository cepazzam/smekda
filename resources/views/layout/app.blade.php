@php
use Illuminate\Support\Facades\DB;
$skl = DB::table('sekolahs')->orderBy('id','desc')->first();
@endphp
@include('layout.header')
@include('layout.navbar')
@yield('content')
@include('layout.footer')