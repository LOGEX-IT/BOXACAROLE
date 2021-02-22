@extends('admin_layout')
@section('admin_content')

<?php
?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i style="font-style: bold; font-size: 45px;" class="halflings-icon edit"></i><span class="break"></span>Modification de produits</strong>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
			<form class="form-horizontal" method="POST" action="{{URL('/update/'.$data->id) }}" enctype="multipart/form-data">
              @csrf
						  <fieldset>

						  	<div class="control-group">
							  <label class="control-label" name for="date01" style="font-style: bold; font-size: 16px;">Nom de produit</label>
							  <div class="controls">
								<input type="text" value="{{$data->title}}" required="true" name="title" class="form-control" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>



							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Categorie de produit</label>
							  <div class="controls">
								 <select class="form-control" required="true" name="categorie_id" style="font-style: bold; font-size: 16px; width: 40%;" id="exampleFormControlSelect1">
                                    <option value="{{$data->categorie_id}}">{{$data->name}}</option>
                         <?php
                               $all_published_category=DB::table('categories')->get();
                               foreach($all_published_category as $v_all_published_category){?>
                                    <option value="{{ $v_all_published_category->id }}">{{ $v_all_published_category->name }}</option>
                         <?php } ?>
                                 </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Style</label>
							  <div class="controls">
								 <select class="form-control" required="true" name="style" style="font-style: bold; font-size: 16px; width: 40%;" id="exampleFormControlSelect1">
                                   <option value="{{$data->style}}">{{$data->style}}</option>
                                    <option value="Hommes">Hommes</option>
									<option value="Dames">Dames</option>
									<option value="Enfants">Enfants</option>
                                 </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Marque</label>
							  <div class="controls">
								<input type="text" value="{{$data->marque}}" required="false" class="form-control" name="marque" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Matière et spécification de fabrication</label>
							  <div class="controls">
								<input type="text" value="{{$data->matiere_fabrication}}" required="false" class="form-control" name="matiere_fabrication" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Origine</label>
							  <div class="controls">
								<input type="text" value="{{$data->origine}}" required="false" class="form-control" name="origine" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Garantie éventuelle</label>
							  <div class="controls">
								<input type="text" value="{{$data->garantie_eventuelle}}" required="false" class="form-control" name="garantie_eventuelle" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px; ">Prix</label>
							  <div class="controls">
								<input type="text" value="{{$data->price}}" required="true" name="price" class="form-control" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="fileInput" style="font-style: bold; font-size: 20px;">Image de produit</label>
							  <div class="controls">
								<input class="input-file uniform_on"  name="image"  id="uploadImage"  type="file" onchange="DisplayImage(this)">
								<img id="imgRoom" src="{{URL::to($data->image)}}" height="120" width="120" style="border:solid" ></img>
							  </div>
							</div>  

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Statut de produit</label>
							  <div class="controls">
								<input type="checkbox" checked="true" name="status" class="form-control" style="font-style: bold; font-size: 16px; width: 40%;" id="" value="1">
							  </div>
							</div> 

							
								<input type="hidden" readonly="true"  name="status2" class="form-control" style="font-style: bold; font-size: 20px;" id="" value="{{$data->status}}">      
							
							<div class="form-actions">
							  <button type="submit" style="background-color: #E9967A; height: 35px; font-size: 20px; font-style: bold; color: white">Modifié</button>
							  <button type="reset" class="btn" style="font-style: bold; font-size: 20px;">Annulé</button>
							</div>
						  </fieldset>
			</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			<script type="text/javascript">
	  function DisplayImage(result) {
        if (result.files && result.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                $("#imgRoom").attr('src', e.target.result);
            }
            fileReader.readAsDataURL(result.files[0]);
        }
    }
			</script>



@endsection