@extends('admin_layout')
@section('admin_content')


<!-- start: Content -->


			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" style="height:10px;" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Liste d'images sliders</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

					<button type="button" onclick="window.location.href = '{{URL::to('/ajout-slider')}}';"  style="margin-left: 10px; margin-top: 10px; background-color: #83b9d4; color: white; font-size: 15px; font-style: bold;"> 	<i class="glyphicon glyphicon-plus"></i>Ajouté nouvelle image
					</button>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Référence</th>
								  <th>Image</th>
								  <th>Description</th>
								  <th>Prix</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						  @foreach($all_slider_info as $all_sliders)  
						  <tbody>
							<tr>
								<td>{{ $all_sliders->sliders_id }}</td>
								<td class="center"><img src="{{URL::to($all_sliders->	sliders_image)}}" style="height: 80px; width: 80px;"></td>
								<td class="center">{{ $all_sliders->sliders_description }}</td>
								<td class="center">{{ $all_sliders->sliders_prix_produit }}</td>
								<td class="center">
                            <a class="btn btn-danger" href="">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                           
                            <a class="btn btn-success" href="">
                                    <i class="halflings-icon white thumbs-up"></i>  
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