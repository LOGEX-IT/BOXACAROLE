@extends('admin_layout')
@section('admin_content')


<!-- start: Content -->
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" style="height:10px;" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i style="font-style: bold; font-size: 45px;" class="halflings-icon edit"></i><span class="break"></span>Liste de produits
            </strong>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

      <button type="button" class="btn btn-primary" onclick="window.location.href = '{{URL::to('/ajout-produits')}}';" style="margin-left: 10px; height: 35px; margin-top: 10px; background-color: #E9967A; color: white; font-size: 20px; font-style: bold;"> Ajouté nouveau produit
          </button>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Réf</th>
							  	  <th>Image</th>
								  <th>Nom de produit</th>
								  <th>Catégorie</th>
								  <th>Marque</th>
								  <th>Prix</th>
                  <th>No statut</th>
                  <th>Statut</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($all_product_info as $all_product)
						  <tbody>
							<tr>
								<td class="center">{{$all_product->id }}</td>
								<td><img src="{{URL::to($all_product->image)}}" style="height: 80px; width: 80px;"> </td>
								<td class="center">{{$all_product->title }}</td>
                <td class="center">{{$all_product->name }}</td>
								<td class="center">{{$all_product->marque }}</td>
								<td class="center">{{$all_product->price }}</td>
                <td class="center">{{$all_product->status }}</td>
                <td class="center">
                   @if($all_product->status==1)
                        <span class="label label-success">Actif</span>
                   @else
                        <span class="label label-danger">Inactif</span>
                   @endif
                </td>
								<td class="center">
                 @if($all_product->status==1)
									<a class="btn btn-danger" style="width: 5px; height: 15px;" href="{{URL::to('/unactive_product/'.$all_product->id)}}">
                    <i class="halflings-icon white thumbs-down"></i>  
                  </a>
                  @else
                  <a class="btn btn-success" style="width: 5px; height: 15px;" href="{{URL::to('/active_product/'.$all_product->id)}}">
                    <i class="halflings-icon white thumbs-up"></i>  
                  </a>
                  @endif
                                    <a class="btn btn-info" href="{{ URL::to('/edit-product/'.$all_product->id)}}" style="width: 5px; height: 15px;" href="">
                                     <i class="halflings-icon white edit" ></i>  
                                    </a>
                                    <a class="btn btn-danger" href="{{URL::to('/delete-product/'.$all_product->id)}}" style="width: 5px; height: 15px;" href="" >
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


<!-- 			Debut modal d'enregistrement de nouveau produit
 -->

  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
        		 <div class="form-group">
          <label for="email">Nom de produit:</label>
          <input type="text" style="width: 50%;" class="form-control-lg" id="email">
        </div>
        <div class="form-group">
        	<label for="email">Categorie de produit:</label>
        	<select class="form-control form-control-lg" style="width: 50%;">
            <option>Large select</option>
            </select>
        </div>
        	</div>
       

        <div class="form-group purple-border">
         <label for="exampleFormControlTextarea4">Petite description de produit</label>
         <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
        </div>

        <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Longue description</label>
        <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
        </div>

       <div class="form-group col-md-12">
        <label for="pwd">Prix:</label>
        <input type="text" style="width: 100%;" class="form-control" id="pwd">
       </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  


<!--   Fin modal
 -->
@endsection