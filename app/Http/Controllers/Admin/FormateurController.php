<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateFormateurRequest;
use App\Http\Requests\UpdateFormateurRequest;
use App\Repositories\FormateurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FormateurController extends AppBaseController
{
    /** @var  FormateurRepository */
    private $formateurRepository;

    public function __construct(FormateurRepository $formateurRepo)
    {
        $this->formateurRepository = $formateurRepo;
    }

    /**
     * Display a listing of the Formateur.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $formateurs = $this->formateurRepository->paginate(10);

        return view('admin.formateurs.index')
            ->with('formateurs', $formateurs);
    }

    /**
     * Show the form for creating a new Formateur.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.formateurs.create');
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
        $formateur = $this->formateurRepository->find($id);

        if (empty($formateur)) {
            Flash::error('formateur not found');

            return redirect(route('admin.formateurs.index'));
        }

        return view('admin.formateurs.show')->with('formateur', $formateur);
    }

    /**
     * Show the form for editing the specified formateur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $formateur = $this->formateurRepository->find($id);

        if (empty($formateur)) {
            Flash::error('formateur not found');

            return redirect(route('admin.formateurs.index'));
        }

        return view('admin.formateurs.edit')->with('formateur', $formateur);
    }

    /**
     * Update the specified formateur in storage.
     *
     * @param int $id
     * @param UpdateFormateurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFormateurRequest $request)
    {
        $formateur = $this->formateurRepository->find($id);

        if (empty($formateur)) {
            Flash::error('formateur not found');

            return redirect(route('admin.formateurs.index'));
        }

        $formateur = $this->formateurRepository->update($request->all(), $id);

        Flash::success('formateur updated successfully.');

        return redirect(route('admin.formateurs.index'));
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
        $formateur = $this->formateurRepository->find($id);

        if (empty($formateur)) {
            Flash::error('formateur not found');

            return redirect(route('admin.formateurs.index'));
        }

        $this->formateurRepository->delete($id);

        Flash::success('formateur deleted successfully.');

        return redirect(route('admin.formateurs.index'));
    }
}
