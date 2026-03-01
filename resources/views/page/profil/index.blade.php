@extends('layout.app')
@section('content')
<div class="container py-5">

    <div class="row">
        <div class="col-md-8">
            <div class="card border p-5">
                <h5 class="mb-3 p-3 bg-secondary rounded-3 text-center text-light">{{$profil->title}}</h5>
                <img src="{{asset('public/storage/'.$profil->image)}}" alt="" class="card w-50">

            </div>
            <p class="mt-3">
                    {!! $profil->content!!}
                </p>

        </div>
        <div class="col-md-4 ">
            <div class="card border-0 outline-0  position-sticky" style="top: 8rem">                
                <div class="card-body bg-light ">
                    <ul style="list-style:none;line-height:40px">
                        @foreach ($list as $item)                            
                        
                        <li><a href="{{route('profil.read',$item->slug)}}" class="nav-link list"><i class="fa fa-angle-double-right me-3"></i> {{$item->title}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection