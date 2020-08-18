<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateActualiteRequest;
use App\Http\Requests\UpdateActualiteRequest;
use App\Repositories\ActualiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ActualiteController extends AppBaseController
{
    /** @var  ActualiteRepository */
    private $actualiteRepository;

    public function __construct(ActualiteRepository $actualiteRepo)
    {
        $this->actualiteRepository = $actualiteRepo;
    }

    /**
     * Display a listing of the Actualite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actualites = $this->actualiteRepository->paginate(10);

        return view('admin.actualites.index')
            ->with('actualites', $actualites);
    }

    /**
     * Show the form for creating a new Actualite.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.actualites.create');
    }

    /**
     * Store a newly created Actualite in storage.
     *
     * @param CreateActualiteRequest $request
     *
     * @return Response
     */
    public function store(CreateActualiteRequest $request)
    {
        $input = $request->all();

        $actualite = $this->actualiteRepository->create($input);

        Flash::success('Actualite saved successfully.');

        return redirect(route('admin.actualites.index'));
    }

    /**
     * Display the specified Actualite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('admin.actualites.index'));
        }

        return view('admin.actualites.show')->with('actualite', $actualite);
    }

    /**
     * Show the form for editing the specified Actualite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('admin.actualites.index'));
        }

        return view('admin.actualites.edit')->with('actualite', $actualite);
    }

    /**
     * Update the specified Actualite in storage.
     *
     * @param int $id
     * @param UpdateActualiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActualiteRequest $request)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('admin.actualites.index'));
        }

        $actualite = $this->actualiteRepository->update($request->all(), $id);

        Flash::success('Actualite updated successfully.');

        return redirect(route('admin.actualites.index'));
    }

    /**
     * Remove the specified Actualite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('admin.actualites.index'));
        }

        $this->actualiteRepository->delete($id);

        Flash::success('Actualite deleted successfully.');

        return redirect(route('admin.actualites.index'));
    }
}
