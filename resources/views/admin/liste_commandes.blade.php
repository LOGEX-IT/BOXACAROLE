@extends('admin_layout')
@section('admin_content')

<?php
    use Illuminate\Support\Facades\DB;
   
    $commande = DB::table('commandes')
    ->orderBy('commandes.idcommande', 'asc')
    ->get();
?>
<!-- start: Content -->


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" style="height:10px;" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i style="font-style: bold; font-size: 25px;" class="halflings-icon edit"></i><span class="break"></span>Liste de commandes clients
						</strong>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr style="font-style: bold; font-size: 16px;">
								  <th>Ref commande</th>
								  <th>Produit</th>
								  <th>Prix unitaire</th>
								  <th>Qte</th>
								  <th>Nom client</th>
								  <th>Tel</th>
								  <th>Adresse</th>
								  <th>Date de commande</th>
								  <th>Actions</th> 
							  </tr>
						  </thead> 
						  @foreach($showCommande as $v_showCommande)  
						  <tbody>
							<tr style="font-size: 16px;">
								<td class="center">{{$v_showCommande->idcommande }}</td>
								<td><img src="{{URL::to($v_showCommande->image)}}" style="height: 80px; width: 80px;"> </td>
								<td class="center">{{$v_showCommande->price }}</td>
								<td class="center">{{$v_showCommande->qteprod }}</td>
								<td class="center">{{$v_showCommande->nom }}</td>
								<td class="center">{{$v_showCommande->Telephone }}</td>
								<td class="center">{{$v_showCommande->adresse }}</td>
								<td class="center">{{$v_showCommande->created_at }}</td>
								<td class="center">
								<a class="btn btn-danger" style="width: 5px; height: 15px;" href="">
                                 <i class="halflings-icon white thumbs-down"></i>  
                                 </a>
                           
                            <a class="btn btn-info" href="">
                                <i class="halflings-icon white edit" ></i>  
                            </a>
                            <a class="btn btn-danger" href="" >
                                <i class="halflings-icon white trash" ></i> 
                            </a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>             
					</div>
				</div><!--/span-->
			</div><!--/row-->

						<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" style="height:10px;" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i style="font-style: bold; font-size: 25px;" class="halflings-icon edit"></i><span class="break"></span>Facture de commandes clients
						</strong>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr style="font-style: bold; font-size: 16px;">
								  <th>Ref commande</th>
								  <th>Etat</th>
								  <th>Montant HT</th>
								  <th>Client</th>
								  <th>Adresse</th>
								  <th>Téléphone</th>
								  <th>Date de commande</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($commande as $v_showCommande) 
						  <tbody>
							<tr style="font-size: 16px;">
								<td class="center">{{$v_showCommande->idcommande }}</td>
								<td class="center" style="font-style: bold; font-size: 16px; color: red">{{$v_showCommande->EtatCommande }}</td>
								<td class="center">{{$v_showCommande->PrixTotal }}</td>
								<td class="center">{{$v_showCommande->nom }}</td>
								<td class="center">{{$v_showCommande->adresse }}</td>
								<td class="center">{{$v_showCommande->Telephone }}</td>
								<td class="center">{{$v_showCommande->created_at }}</td>
								<td class="center">
								<a class="btn btn-danger" style="width: 5px; height: 15px;" href="">
                                 <i class="halflings-icon white thumbs-down"></i>  
                                 </a>
                           
                            <a class="btn btn-info" href="">
                                <i class="halflings-icon white edit" ></i>  
                            </a>
                            <a class="btn btn-danger" href="" >
                                <i class="halflings-icon white trash" ></i> 
                            </a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>             
					</div>
				</div><!--/span-->
			</div><!--/row-->

  
@endsection