<?php

namespace App\Http\Controllers\Condidat;

use App\Http\Controllers\Controller;
use App\Repositories\FormationRepository;
use App\Repositories\ActualiteRepository;

class HomeController extends Controller
{
    /** @var  FormationRepository */
    private $formationRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FormationRepository $formationRepo, ActualiteRepository $actualiteRepo)
    {
        $this->middleware('condidat.auth:condidat');
        $this->formationRepository = $formationRepo;
        $this->actualiteRepository = $actualiteRepo;
    }

    /**
     * Show the Condidat dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $formations = $this->formationRepository->paginate(3);

        $actualites = $this->actualiteRepository->paginate(3);

        // dd($actualites);

        return view('condidat.home', compact('formations', 'actualites'));
    }
}
