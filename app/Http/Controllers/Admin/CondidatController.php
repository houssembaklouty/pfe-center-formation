<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateCondidatRequest;
use App\Repositories\CondidatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CondidatController extends AppBaseController
{
    /** @var CondidatRepository */
    private $condidatRepository;

    public function __construct(CondidatRepository $condidatRepo)
    {
        $this->condidatRepository = $condidatRepo;
    }

    /**
     * Display a listing of the Condidat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $condidats = $this->condidatRepository->paginate(10);

        return view('admin.condidats.index')
            ->with('condidats', $condidats);
    }

    /**
     * Display the specified Categorie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $condidat = $this->condidatRepository->find($id);

        if (empty($condidat)) {
            Flash::error('condidat not found');

            return redirect(route('admin.condidats.index'));
        }

        return view('admin.condidats.show')->with('condidat', $condidat);
    }

    /**
     * Show the form for editing the specified condidat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $condidat = $this->condidatRepository->find($id);

        if (empty($condidat)) {
            Flash::error('condidat not found');

            return redirect(route('admin.condidats.index'));
        }

        return view('admin.condidats.edit')->with('condidat', $condidat);
    }

    /**
     * Update the specified condidat in storage.
     *
     * @param int $id
     * @param UpdateCondidatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCondidatRequest $request)
    {
        $condidat = $this->condidatRepository->find($id);

        if (empty($condidat)) {
            Flash::error('condidat not found');

            return redirect(route('admin.condidats.index'));
        }

        $condidat = $this->condidatRepository->update($request->all(), $id);

        Flash::success('condidat updated successfully.');

        return redirect(route('admin.condidats.index'));
    }

    /**
     * Remove the specified formateur from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $condidat = $this->condidatRepository->find($id);

        if (empty($condidat)) {
            Flash::error('condidat not found');

            return redirect(route('admin.condidats.index'));
        }

        $this->condidatRepository->delete($id);

        Flash::success('condidat deleted successfully.');

        return redirect(route('admin.condidats.index'));
    }
}
