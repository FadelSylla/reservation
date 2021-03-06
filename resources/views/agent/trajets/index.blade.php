@extends('layouts/masterAgent', ['title'=>'Tajets'])

@section('content_header')
      <h1>
        Gestion des trajets
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ route('trajets.index') }}"><i class="fa fa-exchange"></i>Trajets</a></li>
        <li>Tous les trajets</li>
      </ol>
@endsection

@section('content')

	<div class="row" style="margin-top: 5px;">
		<div class="col-md-4 col-xs-12">
			<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#trajetModal">
  			Ajouter un tajet
			</button>
			<!-- trajet modal -->
		<form action="{{ route('trajets.store') }}" method="Post">
			{{ csrf_field() }}
			<div class="modal fade" id="trajetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nouveau trajet</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
			        	<label class="label-control" for="villeDpt">Ville de départ</label>
			        	<select class="form-control selectpicker" name="villeDpt" required="required">
			        		<option></option>
			        		@foreach ($villes as $ville)
			        			<option>{{ $ville->ville }}</option>
			        		@endforeach
			        	</select>
			        </div>
			        <div class="form-group">
			        	<label class="label-control" for="villeArr">Ville d'arrivée</label>
			        	<select class="form-control selectpicker" name="villeArr" required="required">
			        		<option></option>
			        		@foreach ($villes as $ville)
			        			<option>{{ $ville->ville }}</option>
			        		@endforeach
			        	</select>
			        </div>
			        <div class="form-group">
			        	<label class="label-control" for="tarif">Tarif</label>
			        	<input type="number" class="form-control" name="tarif" required="required">
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-flat btn-warning" data-dismiss="modal">Fermer</button>
			        <button type="submit" class="btn btn-flat btn-primary">Enregistrer</button>
			      </div>
			    </div>
			  </div>
			</div>
		</form>
		</div>

		<div class="col-md-4 col-xs-12" style="margin-bottom: 10px;">
			
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="form-group input-group">
               <input type="text" class="form-control" placeholder="rechercher un trajet">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
          	</div>	
		</div>		
	</div>

	<div class="box box-primary">
		<div class="box-header">
			<h1 class="box-title">Tous les trajets</h1>
		</div>
		<div class="box-body">
			<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
			
				<theader>
					<tr>
						<th>Départ</th>
						<th>Arrivé</th>
						<th>Tarif</th>
						<th colspan="4" style="text-align: center">Actions</th>
					</tr>
				</theader>
				<tbody>
					@for ($i = 0; $i < $nb; $i++)
						<tr>
							<td>{{ $tabDpt[$i] }}</td>
							<td>{{ $tabArr[$i] }}</td>
							<td>{{ $trajets[$i]->tarif }}</td>
							<td align="center">
								<a href="{{ route('heureDepart.index') }}"><i class="glyphicon glyphicon-time" title="Heures de départ"></i></a>
							</td>
							<td align="center">
								<a href="{{ route('lieuEmbarq.index') }}"><i class="glyphicon glyphicon-map-marker" title="Lieu d'embarquement"></i></a>
							</td>
							<td align="center">
								<a href="#"  data-toggle="modal" data-target="#editTrajetModal" title="Modifier"><i class="glyphicon glyphicon-edit"></i>
								</a>
							</td>
							<td align="center">
								<form action="{{ route('trajets.destroy', $trajets[$i]) }}" method="Post" onsubmit="return confirm('Voulez-vous vraiment supprimer ce trajet ? Cette action est irréverssible')">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button><i class="glyphicon glyphicon-trash" title="Supprimer" style="color: red;"></i></button>
								</form>
							</td>
						</tr>
					@endfor
				</tbody>
				<tfooter>
					<tr>
						<th>Départ</th>
						<th>Arrivé</th>
						<th>Tarif</th>
						<th colspan="4" style="text-align: center">Actions</th>
					</tr>
				</tfooter>
			</table>
		</div>
		</div>
		<div class="box-footer">
			
		</div>
	</div>

@endsection





