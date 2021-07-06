@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Vrati se nazad</a>
       <h2><b>{{$product['name']}}</b></h2>
       <h3>Cena : {{$product['price']}}</h3>
       <h4>Opis proizvoda:<i> {{$product['description']}}</i></h4>
       <h4>Kategorija:<b> {{$product['category']}}</b></h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Dodaj u korpu</button>
       </form>
       <br><br>
      <!-- <button class="btn btn-success">Kupi</button>-->
       <br><br>
    </div>
   </div>
</div>
@endsection