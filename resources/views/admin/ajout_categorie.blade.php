@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<strong style="font-style: bold; font-size: 25px;"><i style="font-style: bold; font-size: 45px;" class="halflings-icon edit"></i><span class="break"></span>Ajouté nouvelle catégorie de produit
						</strong>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
			<form class="form-horizontal" action="{{URL('/save-category')}}" method="POST">
                @csrf
						  <fieldset>

						  	<div class="control-group">
							  <label class="control-label" style="font-style: bold; font-size: 15px;" for="date01">Nom de Catégorie</label>
							  <div class="controls">
								<input type="text" required="true" name="name" class="form-control" style="width: 50%;" id="" value="">
							  </div>
							</div>


							<div class="control-group hidden-phone">
							  <label style="font-style: bold; font-size: 15px;" class="control-label" for="textarea2">Description de catégorie</label>
							  <div class="controls">
								<textarea class="cleditor" required="true" name="description" id="textarea2" rows="3"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" style="font-style: bold; font-size: 15px;" for="date01">Statut de Catégorie</label>
							  <div class="controls">
								<input type="checkbox" checked="true" name="status" class="form-control" style="width: 10%;" id="" value="1">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" style="background-color: #E9967A; height: 35px; font-size: 20px; font-style: bold; color: white">Enregistré</button>
							  <button type="reset" style="font-size: 20px; font-style: bold;" class="btn">Annulé</button>
							</div>
						  </fieldset>
			</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->



@endsection