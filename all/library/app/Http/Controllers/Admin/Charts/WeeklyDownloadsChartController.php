<?php

namespace App\Http\Controllers\Admin\Charts;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use DB;

use App\Models\Book;
use App\Models\Member;

/**
 * Class WeeklyDownloadsChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WeeklyDownloadsChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();
		
		$member_info = DB::table('collection_users_downloaded')
			->select('user_id', DB::raw('count(*) as nbr'))
			->groupBy('user_id')->get();
		
		$countLicence = 0;
		$countMaster = 0;
		$countDoctorat = 0;
		$countEnseignant = 0;
		$countOthers = 0;
		$allDownload = DB::table('collection_users_downloaded')->get();
		foreach($member_info as $m) {
			$mInfos = Member::where('id', '=', $m->user_id)->first();
			if($mInfos->formation == 'Autres'){
				$countOthers = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Licence'){
				$countLicence = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Master'){
				$countMaster = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Doctorat'){
				$countDoctorat = round(($m->nbr / count($allDownload)) * 100, 2);
			}elseif($mInfos->formation == 'Enseignant'){
				$countEnseignant = round(($m->nbr / count($allDownload)) * 100, 2);
			}else{
				$countLicence = 0;
				$countMaster = 0;
				$countDoctorat = 0;
				$countEnseignant = 0;
				$countOthers = 0;
			}
		}

        $this->chart->dataset('Red', 'pie', [$countLicence, $countMaster, $countDoctorat, $countEnseignant, $countOthers])
                    ->backgroundColor([
                        'rgb(255, 193, 7)',
                        'rgb(77, 189, 116)',
                        'rgb(96, 92, 168)', 
						'rgb(26, 22, 168)', 						
						'rgb(98, 122, 168)', 
                    ]);

        // OPTIONAL
        $this->chart->displayAxes(false);
        $this->chart->displayLegend(true);
        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels(['Licence', 'Master', 'Doctorat', 'Enseignant', 'Autres']);
    }
}