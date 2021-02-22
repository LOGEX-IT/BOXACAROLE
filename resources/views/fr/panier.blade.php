@extends('fr.layout')
@section('layout_content')

@if(Cart::count()>0)


<!------ Include the above in your HEAD tag ---------->

 <center> 
    

@if(session('success'))
<div class="row">
  <div id="" class="alert alert-success col-sm-12" style="text-align: center; font-style: bold; font-size: 20px;">
    {{session('success')}}
  </div>
</div>
@endif
        
        <strong style=" font-style: bold; font-size: 30px; color: white"> Votre panier d'achat  contient {{Cart::count()}} @if(Cart::count()>1) articles @else article @endif  
        </strong>

        
            <table class="table bordered" style="margin-left: 20px; margin-right: 20px; background-color: white;" >
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Désignation</th>
                        <th style="text-align: center; width: 30%;">Quantité</th>
                        <th style="text-align: center; width: 30%;">Prix</th>
                        <th style="text-align: center; width: 30%;">Sous total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                        $total=0;
                        ?>
                   @foreach (Cart::content() as $product)
                      <?php
                           $soustotl = $product->model->price * $product->qty
                         ?>
                <tr>
                        <td style="">
                            <img src="../{{$product->model->image }}" width="120px">
                        </td>
                        <td> 
                          {{ $product->model->title }}
                        </td>
                        <td class="" style="">
                        <div>
                       <center> 
                        <form action="{{route('cart.increase_qty_product')}}" method="POST">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                                <input type="hidden" name="qty" value="{{ $product->qty }}">
                                <input type="submit" style="width: 20px; text-align: center; font-size: 15px; font-style: bold;" name="" value="+" placeholder="">
                            </form>
                            <input type="text" style="text-align: center;" readonly="true" name="qty" id="qty" style="width: 10px;" value="{{ $product->qty }}">
                        <form action="{{route('cart.decrease_qty_product')}}" method="POST">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                                <input type="hidden" name="qty" value="{{ $product->qty }}">
                                <input type="submit"  style="width: 20px; text-align: center; font-size: 15px; font-style:bold;"name="" value="-">

                        </form>
                       </center>
                        </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $product->model->price }}</strong></td>
                       
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $soustotl }}</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <form action="{{route('cart.destroy',$product->rowId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        </form>
                        </td>
            </tr>
                    <?php $total =$total + $soustotl; ?>
                   @endforeach
          </tbody>
          <tr>
                        <td style="font-size: 25px; font-size: bold;">  </td>
                        <td style="font-size: 25px; font-size: bold;">  </td>
                        <td style="font-size: 25px; font-size: bold; "></td>
                        <td></td>
                    </tr>
                  
    </table>
    <h3>Total:</h3> <strong style="font-size: 25px; font-size: bold; color: red;">{{ $total }}</strong><br>
<form action="{{ route('commande.store') }}" method="POST">
{{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" name="nom" id="inputEmail4" placeholder="Votre nom" required="true">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telephone</label>
      <input required="true" type="text" class="form-control" name="telephone" id="inputPassword4" placeholder="Adresse">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" required="true" class="form-control" name="adresse" id="inputAddress" placeholder="Message">
  </div>    
        <div class="jumbotron" style=" background-color: #ffffff;">
                        <input onclick="location.href='{{URL::to('/')}}'"; class="btn btn-default" type="button"  style="width: auto; " name="" value="Continuer l'achat" placeholder="">
                        
                        <button class="btn btn-success" type="submit" style="width: 20%; height: 20%;"> OK</button>
        </div> 
  </form> 
</center>

@else
 <center> 
    <div class="jumbotron" style="margin-top: 30px; margin-bottom: 30px; background-color: #E9967A; color: white; width: 50%; text-align: center; border-radius: 5px 5px 5px 5px;" >
    <h3>Votre panier est vide</h3>
  </div>
</center>
@endif
@endsection