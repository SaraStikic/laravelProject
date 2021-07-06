@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Odabrani proizvodi </h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3><b>Ime: {{$item->name}}</b></h3>
                      <h5>Status dostave : {{$item->status}}</h5>
                      <h5>Adresa : {{$item->address}}</h5>
                      <h5>Status plaćanja : {{$item->payment_status}}</h5>
                      <h5>Metod plaćanja : {{$item->payment_method}}</h5>

                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 