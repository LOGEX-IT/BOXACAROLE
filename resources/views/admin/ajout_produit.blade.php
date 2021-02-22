@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i class="halflings-icon edit"></i><span class="break"></span>Ajouté nouveau produit</strong>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
			<form class="form-horizontal" action="{{URL('/save-produit')}}" method="POST" enctype="multipart/form-data">
            @csrf
						  <fieldset>

						  	<div class="control-group">
							  <label class="control-label" name for="date01" style="font-style: bold; font-size: 16px;">Nom de produit</label>
							  <div class="controls">
								<input type="text" style="font-style: bold; font-size: 16px; width: 40%;" required="true" name="title" class="form-control"  id="" value="">
							  </div>
							</div>



							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Categorie de produit</label>
							  <div class="controls">
								 <select style="font-style: bold; font-size: 16px; width: 40%;" class="form-control" required="true" name="categorie_id"  id="exampleFormControlSelect1">
                                    <option>Veuillez selectionner une catégorie</option>
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
								 <select style="font-style: bold; font-size: 16px; width: 40%;" class="form-control" required="true" name="style" id="exampleFormControlSelect1">
                                    <option value="Hommes">Hommes</option>
									<option value="Dames">Dames</option>
									<option value="Enfants">Enfants</option>
                                 </select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Marque</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px; width: 40%;" type="text" required="false" class="form-control" name="marque"  id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Matière et spécification de fabrication</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px; width: 40%;" type="text" required="false" class="form-control" name="matiere_fabrication" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Origine</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px; width: 40%;" type="text" required="false" class="form-control" name="origine"  id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Garantie éventuelle</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px; width: 40%;" type="text" required="false" class="form-control" name="garantie_eventuelle" id="" value="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Prix</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px; width: 40%;" type="text" required="true" name="price" class="form-control" id="" value="">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="fileInput" style="font-style: bold; font-size: 16px;">Image de produit</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px;" class="input-file uniform_on" name="image"  id="uploadImage"  type="file" onchange="DisplayImage(this)">
								<img id="imgRoom" height="120" width="120" style="border:solid" />
							  </div>
							</div>  

							<div class="control-group">
							  <label class="control-label" for="date01" style="font-style: bold; font-size: 16px;">Statut de produit</label>
							  <div class="controls">
								<input style="font-style: bold; font-size: 16px;" type="checkbox" checked="true" name="status" class="form-control" style="width: 10%;" id="" value="1">
							  </div>
							</div>        
							
							<div class="form-actions">
							  <button type="submit" style="background-color: #E9967A; height: 35px; font-size: 20px; font-style: bold; color: white">Enregistré
							  </button>
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