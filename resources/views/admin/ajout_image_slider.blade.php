@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Ajouté nouvelle image</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
			<form class="form-horizontal" action="{{URL('/savec-slider')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Slider image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="sliders_image"  id="uploadImage"  type="file" onchange="DisplayImage(this)">
								<img id="imgslider" height="180" width="180" style="border:solid" />
							  </div>
							</div> 

							<div class="control-group">
							  <label class="control-label" for="date01">Prix d produit</label>
							  <div class="controls">
								<input type="text" class="form-control" name="sliders_prix_produit" style="width: 50%;" id="" value="">
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> description</label>
							  <div class="controls">
								<textarea class="cleditor" name="sliders_description" id="textarea2" rows="3"></textarea>
							  </div>
							</div> 

							<div class="control-group">
							  <label class="control-label" for="date01">Statut de l'image</label>
							  <div class="controls">
								<input type="checkbox" name="sliders_statut" class="form-control" style="width: 10%;" id="" value="1">
							  </div>
							</div>        
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Enregistré</button>
							  <button type="reset" class="btn">Annulé</button>
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
                $("#imgslider").attr('src', e.target.result);
            }
            fileReader.readAsDataURL(result.files[0]);
        }
    }
			</script>



@endsection