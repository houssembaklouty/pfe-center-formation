<?php

namespace App\Http\Controllers\Condidat;

use App\Http\Requests\CreateFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Repositories\FormationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Categorie;

class FormationController extends AppBaseController
{
    /** @var  FormationRepository */
    private $formationRepository;

    public function __construct(FormationRepository $formationRepo)
    {
        $this->formationRepository = $formationRepo;
    }

    /**
     * Display a listing of the Formation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $formations = $this->formationRepository->paginate(3);

        //  dd($formations);

        return view('condidat.formations.index')
            ->with('formations', $formations);
    }

    /**
     * Show the form for creating a new Formation.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Categorie::all();

        // dd($categories);

        return view('condidat.formations.create', compact('categories'));
    }

    /**
     * Store a newly created Formation in storage.
     *
     * @param CreateFormationRequest $request
     *
     * @return Response
     */
    public function store(CreateFormationRequest $request)
    {
        $input = $request->all();

        $formation = $this->formationRepository->create($input);

        Flash::success('Formation saved successfully.');

        return redirect(route('condidat.formations.index'));
    }

    /**
     * Display the specified Formation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('condidat.formations.index'));
        }

        return view('condidat.formations.show')->with('formation', $formation);
    }

    /**
     * Show the form for editing the specified Formation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formation = $this->formationRepository->find($id);

        $categories = Categorie::all();

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('condidat.formations.index'));
        }

        return view('condidat.formations.edit')->with('formation', $formation)->with('categories', $categories);
    }

    /**
     * Update the specified Formation in storage.
     *
     * @param int $id
     * @param UpdateFormationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormationRequest $request)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('condidat.formations.index'));
        }

        $formation = $this->formationRepository->update($request->all(), $id);

        Flash::success('Formation updated successfully.');

        return redirect(route('condidat.formations.index'));
    }

    /**
     * Remove the specified Formation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $formation = $this->formationRepository->find($id);

        if (empty($formation)) {
            Flash::error('Formation not found');

            return redirect(route('condidat.formations.index'));
        }

        $this->formationRepository->delete($id);

        Flash::success('Formation deleted successfully.');

        return redirect(route('condidat.formations.index'));
    }
}
