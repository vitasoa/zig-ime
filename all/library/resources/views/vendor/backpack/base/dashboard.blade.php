@extends(backpack_view('blank')) 

@section('content')
<div class="card-group mb-4" style="padding: 15px;">
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-people">
				</i>
			</div>
			<div class="text-value">
			{{ $nbr_collections }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Collections
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-user-follow">
				</i>
			</div>
			<div class="text-value">
			{{ $new_collections }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Nouvelles Collections
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-basket-loaded">
				</i>
			</div>
			<div class="text-value">
			{{ $collections_download }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Téléchargement
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-people">
				</i>
			</div>
			<div class="text-value">
			{{ $themes }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Themes
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-user-follow">
				</i>
			</div>
			<div class="text-value">
			{{ $keywords }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Mots Clés
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-basket-loaded">
				</i>
			</div>
			<div class="text-value">
			{{ $authors }}
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Auteurs
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card-group mb-4" style="padding: 15px;">
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-pie-chart">
				</i>
			</div>
			<div class="text-value">
			{{ $countLicence }} %
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Niveau Licence
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-speedometer">
				</i>
			</div>
			<div class="text-value">
			{{ $countMaster }} %
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Niveau Master
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-speedometer">
				</i>
			</div>
			<div class="text-value">
				{{ $countDoctorat }} %
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Niveau Doctorat
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-speedometer">
				</i>
			</div>
			<div class="text-value">
				{{ $countEnseignant }} %
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Enseignants
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="h1 text-muted text-right mb-4">
				<i class="icon-speedometer">
				</i>
			</div>
			<div class="text-value">
				{{ $countOthers }} %
			</div>
			<small class="text-muted text-uppercase font-weight-bold">
				Autres
			</small>
			<div class="progress progress-xs mt-3 mb-0">
				<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 

@php 
    $widgets['after_content'][] = [ 
        'type' => 'chart', 
        'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class, 
        'class' => 'card mb-2', 
        'wrapper' => ['class'=> 'col-md-6', 'style'=>'float:left'] 
    ]; 
    
    $widgets['after_content'][] = [ 
        'type' => 'chart', 
        'controller' => \App\Http\Controllers\Admin\Charts\WeeklyDownloadsChartController::class, 
        'class' => 'card mb-2',
        'wrapper' => ['class'=> 'col-md-6', 'style'=>'float:left'] 
    ]; 
@endphp