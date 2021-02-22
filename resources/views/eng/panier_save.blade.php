@extends('layout')
@section('layout_content')

@if(Cart::count()>0)


<!------ Include the above in your HEAD tag ---------->

<div class="container" >

 <center> 
    <div class="jumbotron" style="margin-top: 30px; margin-bottom: 30px; background-color: #E9967A;  width: 90%; text-align: center; border-radius: 25px 70px;" >

@if(session('success'))
<div class="row">
  <div id="" class="alert alert-success col-sm-12 col-md-12" style="text-align: center; font-style: bold; font-size: 20px;">
    {{session('success')}}
  </div>
</div>
@endif
        
        <strong style=" font-style: bold; font-size: 30px; color: white"> Votre panier d'achat  contient {{Cart::count()}} @if(Cart::count()>1) articles @else article @endif  </strong>
   <div class="container" style=" margin-top: 30px;">
    
    <div class="row">

        <div class="col-sm-12 col-md-12">
            <table class="table bordered" style=" width: 100%; background-color: white;" >
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Désignation</th>
                        <th style="text-align: center; width: 100%;">Quantité</th>
                        <th class="text-center" style="text-align: center; width: 120%;">Prix</th>
                        <th class="text-center" style="text-align: center; width: 100%;">Sous total</th>
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
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> 
                            <img class="media-object" src="{{ $product->model->image }}" style="width: 72px; height: 72px;"> </a>
                            
                        </div></td>
                        <td> <h4 class="media-heading">{{ $product->model->title }}</h4>
                            <div class="media-body">
                                <span>Statut: </span><span class="text-success"><strong>En stock</strong></span>
                            </div>
                        </td>
                        <td class="" style="display: inline-block; width: 100%;" style="text-align: center">
                        <div>
                       <center> 
                            <form action="{{route('cart.decrease_qty_product')}}" method="POST">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                                <input type="hidden" name="qty" value="{{ $product->qty }}">
                                <input type="submit"  style="width: 20px;"name="prenom" value="-">
                            </form>
                            <input type="text" style="text-align: center;" readonly="true" name="qty" id="qty" style="width: 10px;" value="{{ $product->qty }}">
                            <form action="{{route('cart.increase_qty_product')}}" method="POST">
                                @csrf
                                <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                                <input type="hidden" name="qty" value="{{ $product->qty }}">
                                <input type="submit" style="width: 20px;" name="prenom" value="+" placeholder="">
                           </form>
                       </center>
                        </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $product->model->price }}</strong></td>
                       
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $soustotl }}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong> </strong></td>
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
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td style="font-size: 25px; font-size: bold;"> Total: </td>
                        <td style="font-size: 25px; font-size: bold; color: red">{{ $total }}</td>
                        <td style="font-size: 25px; font-size: bold;">FCFA</td>
                    </tr>
               
                </tbody>
                  
                </table>
                                    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Votre nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telephone / Adresse</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Adresse">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Message</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Message">
  </div>
  
 
</form>  
              
        </div>
        <div class="jumbotron" style=" background-color: #fdc8c8;">
                        <input onclick="location.href='{{URL::to('/')}}'"; class="btn btn-success" type="button"  style="width: auto; " name="prenom" value="Continuer l'achat" placeholder="">
                        
                        <input class="btn btn-danger" type="button" style="width: auto;" name="prenom" value="Passer la commande" placeholder="">
                       </div> 
    </div>
</div>
  </div>
</center>
</div>

@else
<div class="container" >
 <center> 
    <div class="jumbotron" style="margin-top: 30px; margin-bottom: 30px; background-color: #E9967A; color: white; width: 50%; text-align: center; border-radius: 5px 5px 5px 5px;" >
    <h3>Votre panier est vide</h3>
  </div>
</center>
</div>
@endif
@endsection