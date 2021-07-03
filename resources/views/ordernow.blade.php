@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Iznos</td>
              <td> {{$total}} din</td>
              </tr>
              <tr>
                <td>Taksa</td>
                <td>0 din</td>
              </tr>
              <tr>
                <td>Isporuka </td>
                <td>500 din</td>
              </tr>
              <tr>
                <td>Ukupan iznos</td>
              <td> {{$total+500}}din</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="napiši svoju e-mail adresu" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Nacin placanja</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Placanje putem interneta</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Placanje prilikom isporuke</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Naruči</button>
              </form>
          </div>
     </div>
</div>
@endsection 