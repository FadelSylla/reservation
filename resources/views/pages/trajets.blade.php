@extends('layouts/default')

@section('content')
	<section class="content-header">
        <h1>
          Trajets disponibles pour: 
         <small>{{ $villeDpt }} - {{ $villeArr }} à la date de {{ $dateDpt }}</small>
        </h1>
      </section> 
      <br>
@if ($nb > 0)
@for ($i = 0; $i < $nb; $i++)
	<form action="{{ route('mes_reservations.store') }}" method="POST">	
		@csrf
		<div class="box box-primary">
			<div class="box-header">
				<div class="col-md-4 col-xs-4">
					<h1 class="box-title">{{ $villeDpt }} - {{ $villeArr }}</h1>
				</div>
				<div class="col-md-4 col-xs-4">
					<a href="#voirUneCompagnie" data-toggle="modal" data-target="#exampleModal"><h1 class="box-title">{{ $compagnies[$i]->nom }}</h1>
          			</a>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modalComp" aria-hidden="true">
		}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalComp">{{ $compagnies[$i]->nom }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="box-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Identification" data-toggle="tab">Identification</a></li>
                                <li><a href="#Contacts" data-toggle="tab">Contacts</a></li>
                                
                                <li><a href="#Paiement" data-toggle="tab">Comptes de paiement</a></li>
                                <li><a href="#Plus" data-toggle="tab">Plus</a></li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Identification">
                                        <div class="box-body">
                                          <div class="row">
                                            <div class="col-md-6 col-xm-12">
                                              <div class="form-group">
                                            <label for="nomComp">Raison sociale</label>
                                            <input type="text" class="form-control" name="nomComp" id="nomComp" placeholder="Nom de la compagnie" disabled="disabled" value="{{ $compagnies[$i]->nom }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="desComp">Description</label>
                                            <textarea class="form-control required" rows="2" name="desComp" placeholder="Description de la compagnie" disabled="disabled">{{ $compagnies[$i]->description }}</textarea>
                                          </div>
                                          
                                            </div>
                                            <div class="col-md-6 col-xm-12">
                                            <div class="form-group">
                                            <label for="rccmComp">N° RCCM </label>
                                            <input type="text" class="form-control " name="rccmComp" id="rccmComp" placeholder="Numéro RCCM" disabled="disabled" value="{{ $compagnies[$i]->rccm }}" >
                                          </div>
                                              <div class="form-group">
                                            <label for="ifuComp">N° IFU </label>
                                            <input type="text" class="form-control" name="ifuComp" id="ifuComp" placeholder="Numéro IFU" disabled="disabled" value="{{ $compagnies[$i]->ifu }}" >
                                          </div>
                                            </div>
                                          </div>
                                        </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="Contacts">
                                    
                                    <div class="box-body">
                                      <div class="col-md-12 col-xm-12">
                                        <div class="form-group">
                                        <label for="telComp">N° de téléphone</label>
                                        <input type="text" class="form-control" name="telComp" disabled="disabled" value="{{ $compagnies[$i]->telephone }}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="emailComp">Email</label>
                                        <input type="Email" class="form-control" name="emailComp" value="{{ $compagnies[$i]->email }}" disabled="disabled">
                                      </div>
                                      <div class="form-group">
                                        <label for="adrComp">Adresse</label>
                                        <textarea class="form-control" rows="2" name="adrComp" disabled="disabled" value={{ $compagnies[$i]->adresse }} ></textarea>
                                      </div>
                                      </div>
                                    </div>
                                    
                                </div>
                               
                                
                                <div class="tab-pane fade" id="Paiement">
                                    
                                    <div class="box-body">
                                      <div class="col-md-12 col-xm-12">
                                        <div class="form-group">
                                        <label for="numBanqComp">Compte bancaire</label>
                                        <input type="text" class="form-control" name="numBanqComp" placeholder="Numéro de compte" disabled="disabled">
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="momoComp">Mobile Money</label>
                                        <input type="text" class="form-control" name="momoComp" placeholder="Numéro mobile money" disabled="disabled">
                                      </div>
                                      
                                       </div>
                                       <div class="col-md-6 col-xm-12">
                                         <div class="form-group">
                                        <label for="floozComp">Flooz</label>
                                        <input type="text" class="form-control" name="floozComp" placeholder="Numéro flooz" disabled="disabled">
                                      </div>
                                      </div>
                                       
                                       </div>
                                      </div>

                                        
                                      </div>
                                    
                                    
                                </div>
                                <div class="tab-pane fade" id="Plus">
                                    
                                    <div class="box-body">
                                    <div class="row">
                                      <div class="col-md-4 col-xm-12">
                                          <div class="form-group">
                                        <label for="validiterReserv">Validité d'un ticket (en jour)</label>
                                        <input type="int" class="form-control" name="validiterReserv" placeholder="validité d'un ticket" disabled="disabled">
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xm-12">
                                        <div class="form-group">
                                        <label for="durPostPenalite">Nombre de jour avant pénalité</label>
                                        <input type="text" class="form-control" name="durPostPenalite" placeholder="plage de repport" disabled="disabled">
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xm-12">
                                        <div class="form-group">
                                        <label for="penaliter">Pourcentage de pénalité (en %)</label>
                                        <input type="int" class="form-control" name="prnaliter" placeholder="pénalité en %" disabled="disabled">
                                      </div>
                                      </div>
                                    </div>
                                      
                                      <div class="row">
                    
                                        <div class="col-md-12 col-xm-12">
                                          <div class="form-group">
                                            <label for="msgAverti">Message d'avertissement</label>
                                            <textarea class="form-control" rows="2" name="msgAverti" disabled="disabled"></textarea>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      </div>
                                    
                                </div>
                            </div>
                        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
				</div>
				<div class="col-md-4 col-xs-4">
					<h1 class="box-title pull-right" style="color: red">{{ $tarifs[$i] }} F CFA</h1>
				</div>
			</div>
			<div class="box-body">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					@if ($compagnies[$i]->wifi == '1')
					<b class="fa fa-wifi"> Wifi :</b><b style="color: green"> disponible</b>
					@else 
					<b class="fa fa-wifi"> Wifi :</b><b style="color: red"> non disponible</b>
					@endif
				</div>
				<div class="col-md-3">
					@if ($compagnies[$i]->climatisation == '1')
					<b class="fa fa-tint"> Climatisation :</b><b style="color: green"> disponible</b>
					@else
					<b class="fa fa-tint"> Climatisation :</b><b style="color: red"> non disponible</b>
					@endif
				</div>
				<button class="btn btn-primary pull-right" type="submit">
  				Reserver
				</button>

				<!-- Modal Reserver-->

			</div>
			
		</div>
	</form>
	
@endfor

@else 
<p>Aucun résultat pour ce trajet</p>
@endif

	
@endsection 


