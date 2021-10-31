@extends('layouts.app') 

@section('pageTitle', 'Annuaires') 

@section('content')

<div class="loading-overlay" id="loading-overlay" style="dispaly:none">
	<div class="loading-overlay-image-container" >
		<img src="{{ asset('assets/img/loading.gif') }}" class="loading-overlay-img"/>
	</div>
</div>

<div class="blocSearch" style="margin-top: -20px;">
	<div class="annuaire-search">
		<div class="form-group has-search col-md-12">
			<span class="fa fa-search form-control-feedback"></span>
			<input id="name_annuaire" type="text" name="name_annuaire" class="form-control search-field" placeholder="Nom et prénom(s)">
		</div>
	</div>
	<div class="annuaire-filtre" style="margin-bottom: 20px;">
		<div class="col-md-2 label-annuaire">
			<label>NIVEAU</label>
			<select id="parcours" class="custom-select">
				<option value="">Sélectionner un niveau</option>
				<option value="Licence">Licence</option>
				<option value="Master">Master</option>
				<option value="Doctorat">Doctorat</option>
				<option value="Enseignant">Enseignant</option>
				<option value="Autres">Autres</option>
			</select>
		</div>
		<div class="col-md-2 label-annuaire">
			<label>PROMOTION</label>
			<input id="promotion" class="custom-select" type="number" maxlength="4" pattern="^0[1-9]|[1-9]\d$" step="1" style="text-align: center;font-size: 15px;color: #000; margin: auto" name="promotion" placeholder="2012">
		</div>

		<div class="col-md-2 label-annuaire">
			<label>DOMAINE</label>
			<!--input id="domaines" type="text" name="domaines" style="width: 250px; text-align: center;font-size: 15px;color: #000;" placeholder="Enseignement"-->
			<select id="domaines" name="domaines" class="custom-select">
				<option value="">Tous</option>
				@foreach($domaines as $d)
				<option value="{{ $d->domaines }}">{{ $d->domaines }}</option>
				@endforeach
			</select>
		</div>
		
		<!--div class="col-md-2 label-annuaire">
			<label>NATIONALITE</label>
			<select id="nationality" name="nationality" class="custom-select">
				<option value="">Toutes</option>
				@foreach($nationalities as $n)
				<option value="{{ $n->nationality }}">{{ $n->nationality }}</option>
				@endforeach
			</select>
		</div-->
		
		<!--div class="col-md-2 label-annuaire">
			<label>GENRE</label>
			<select id="genre" name="genre" class="custom-select">
				<option value="">Tous</option>
				<option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
            </select>
		</div-->
		
		<div class="col-md-2 label-annuaire">
			<label>EMPLOYEUR</label>
			<select id="employer" name="employer" class="custom-select">
				<option value="">Tous</option>
				@foreach($employers as $e)
				@if ($e->employer == "")
					@continue
				@endif
				<option value="{{ $e->employer }}">{{ $e->employer }}</option>
				@endforeach
            </select>
		</div>
	</div>
	<div class="row" style="text-align: center;">
		<div class="col-md-2 offset-md-5" style="margin: auto">
			<button id="search-annuaire-btn" class="btn btn-primary btn-sm" type="button">Rechercher</button>
			<button id="clear-search-btn" class="btn btn-info btn-sm" type="button">Effacer</button>
		</div>
	</div>
</div>
<div class="annuaire-items">
	<div class="annuaire">	
	</div>
</div>
<div id="no-result" style="display: none">
	<hr style="display: block;flex: auto;height: 1px;margin-left: 20px;border-top: 1.5px solid #003366 !important;"/>
	<div style="text-align: center;background: papayawhip;"><strong>{{__('Aucune personne trouvée !')}}</strong><br><i class='fas fa-info-circle'></i> {{__('Nous n\'avons trouvé personne dans l\'annuaire.')}}</div>
</div>
@endsection