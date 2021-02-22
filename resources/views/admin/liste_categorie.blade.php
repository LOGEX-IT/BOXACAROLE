@extends('admin_layout')
@section('admin_content')


<!-- start: Content -->


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" style="height:10px;" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i class="halflings-icon edit"></i><span class="break"></span>Liste de catégories de produits
						
					</div>
					<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

					<button type="button" onclick="window.location.href = '{{URL::to('/ajout-categorie')}}';"  style="margin-left: 10px; height: 35px; margin-top: 10px; background-color: #E9967A; color: white; font-size: 20px; font-style: bold;"> 	<i class="glyphicon glyphicon-plus"></i>Ajouté nouvelle categorie de produit
					</button>


					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr style="font-style: bold; font-size: 16px;">
								  <th>Nom de catégorie</th>
								  <th>Description</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($all_category_info as $v_all_category_info)  
						  <tbody>
							<tr style="font-size: 16px;">
								<td class="center">{{$v_all_category_info->name }}</td>
								<td class="center">{{$v_all_category_info->description }}</td>
								<td class="center">
                          @if($v_all_category_info->status==1)
								<a class="btn btn-danger" style="width: 5px; height: 15px;" href="{{URL::to('/unactive-category/'.$v_all_category_info->id)}}">
                                 <i class="halflings-icon white thumbs-down"></i>  
                                 </a>
                          @elseif($v_all_category_info->status==2)
                                <a class="btn btn-default" style="width: 5px; height: 15px;" href="">
                                <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                          @else($v_all_category_info->status==6)
                                <a class="btn btn-success" style="width: 5px; height: 15px;" href="{{URL::to('/active-category/'.$v_all_category_info->id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                          @endif
                           
                            <a class="btn btn-info" href="{{ URL::to('/edit-category/'.$v_all_category_info->id)}}">
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