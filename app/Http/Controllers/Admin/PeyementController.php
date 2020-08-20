<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePeyementRequest;
use App\Http\Requests\UpdatePeyementRequest;
use App\Repositories\PeyementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PeyementController extends AppBaseController
{
    /** @var  PeyementRepository */
    private $peyementRepository;

    public function __construct(PeyementRepository $peyementRepo)
    {
        $this->peyementRepository = $peyementRepo;
    }

    /**
     * Display a listing of the Peyement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $peyements = $this->peyementRepository->paginate(10);

        return view('admin.peyements.index')
            ->with('peyements', $peyements);
    }

    /**
     * Show the form for creating a new Peyement.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.peyements.create');
    }

    /**
     * Store a newly created Peyement in storage.
     *
     * @param CreatePeyementRequest $request
     *
     * @return Response
     */
    public function store(CreatePeyementRequest $request)
    {
        $input = $request->all();

        $peyement = $this->peyementRepository->create($input);

        Flash::success('Peyement saved successfully.');

        return redirect(route('admin.peyements.index'));
    }

    /**
     * Display the specified Peyement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $peyement = $this->peyementRepository->find($id);

        if (empty($peyement)) {
            Flash::error('Peyement not found');

            return redirect(route('admin.peyements.index'));
        }

        return view('admin.peyements.show')->with('peyement', $peyement);
    }

    /**
     * Show the form for editing the specified Peyement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $peyement = $this->peyementRepository->find($id);

        if (empty($peyement)) {
            Flash::error('Peyement not found');

            return redirect(route('admin.peyements.index'));
        }

        return view('admin.peyements.edit')->with('peyement', $peyement);
    }

    /**
     * Update the specified Peyement in storage.
     *
     * @param int $id
     * @param UpdatePeyementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeyementRequest $request)
    {
        $peyement = $this->peyementRepository->find($id);

        if (empty($peyement)) {
            Flash::error('Peyement not found');

            return redirect(route('admin.peyements.index'));
        }

        $peyement = $this->peyementRepository->update($request->all(), $id);

        Flash::success('Peyement updated successfully.');

        return redirect(route('admin.peyements.index'));
    }

    /**
     * Remove the specified Peyement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $peyement = $this->peyementRepository->find($id);

        if (empty($peyement)) {
            Flash::error('Peyement not found');

            return redirect(route('admin.peyements.index'));
        }

        $this->peyementRepository->delete($id);

        Flash::success('Peyement deleted successfully.');

        return redirect(route('admin.peyements.index'));
    }
}
