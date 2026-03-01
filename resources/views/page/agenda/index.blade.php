@extends('layout.app')
@section('content')
<div class="container ">

    <div class="row">
        <div class="col-md-8 py-5">
            <div class="card p-3text-light text-center bg-secondary border shadow">
                <h3 class="display-6 py-2 text-light">
                    Agenda Tahun 2026
                </h3>
            </div>
<div class="accordion mt-3" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="badge bg-primary text-light p-2 me-5"><i class="fa fa-calendar"></i>  {{Carbon\Carbon::parse($agenda->date)->locale('id')->isoFormat('dddd,D MMMM Y')}}</span>  <strong> "{{$agenda->name}}"</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Lokasi : {{$agenda->location}}</strong> </p>
        <p>{!!$agenda->content!!}</p>
      </div>
    </div>
  </div>
  @php
     $list = App\Models\Agenda::where('id','<>',$agenda->id)->orderBy('id','asc')->paginate(5);
  @endphp
@foreach ($list as $item)
    

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapse{{$item->id}}">
               <span class="badge bg-primary text-light p-2 me-5"><i class="fa fa-calendar"></i>  {{Carbon\Carbon::parse($item->date)->locale('id')->isoFormat('dddd,D MMMM Y')}}</span>  <strong> "{{$item->name}}"</strong>
      </button>
    </h2>
    <div id="collapse{{$item->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p><strong>Lokasi : {{$item->location}}</strong></p> 
        <p>{{$item->content}}</p>
      </div>
    </div>
  </div>

  @endforeach
  
</div>

        </div>
        <div class="col-md-4 py-5">
            <div class="card border-0 outline-0  position-sticky" style="top: 8rem">                
              <img src="{{asset('storage/'.$harian->image)}}" alt="" class="w-100 card shadow border">
           
            </div>

        </div>
    </div>
</div>
@endsection