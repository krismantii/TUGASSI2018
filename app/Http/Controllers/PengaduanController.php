<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePengaduanRequest;
use App\Http\Requests\UpdatePengaduanRequest;
use App\Repositories\PengaduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PengaduanController extends AppBaseController
{
    /** @var  PengaduanRepository */
    private $pengaduanRepository;

    public function __construct(PengaduanRepository $pengaduanRepo)
    {
        $this->pengaduanRepository = $pengaduanRepo;
    }

    /**
     * Display a listing of the Pengaduan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pengaduanRepository->pushCriteria(new RequestCriteria($request));
        $pengaduans = $this->pengaduanRepository->all();

        return view('pengaduans.index')
            ->with('pengaduans', $pengaduans);
    }

    /**
     * Show the form for creating a new Pengaduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('pengaduans.create');
    }

    /**
     * Store a newly created Pengaduan in storage.
     *
     * @param CreatePengaduanRequest $request
     *
     * @return Response
     */
    public function store(CreatePengaduanRequest $request)
    {
        $input = $request->all();

        $pengaduan = $this->pengaduanRepository->create($input);

        Flash::success('Pengaduan saved successfully.');

        return redirect(route('pengaduans.index'));
    }

    /**
     * Display the specified Pengaduan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengaduan = $this->pengaduanRepository->findWithoutFail($id);

        if (empty($pengaduan)) {
            Flash::error('Pengaduan not found');

            return redirect(route('pengaduans.index'));
        }

        return view('pengaduans.show')->with('pengaduan', $pengaduan);
    }

    /**
     * Show the form for editing the specified Pengaduan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengaduan = $this->pengaduanRepository->findWithoutFail($id);

        if (empty($pengaduan)) {
            Flash::error('Pengaduan not found');

            return redirect(route('pengaduans.index'));
        }

        return view('pengaduans.edit')->with('pengaduan', $pengaduan);
    }

    /**
     * Update the specified Pengaduan in storage.
     *
     * @param  int              $id
     * @param UpdatePengaduanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePengaduanRequest $request)
    {
        $pengaduan = $this->pengaduanRepository->findWithoutFail($id);

        if (empty($pengaduan)) {
            Flash::error('Pengaduan not found');

            return redirect(route('pengaduans.index'));
        }

        $pengaduan = $this->pengaduanRepository->update($request->all(), $id);

        Flash::success('Pengaduan updated successfully.');

        return redirect(route('pengaduans.index'));
    }

    /**
     * Remove the specified Pengaduan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengaduan = $this->pengaduanRepository->findWithoutFail($id);

        if (empty($pengaduan)) {
            Flash::error('Pengaduan not found');

            return redirect(route('pengaduans.index'));
        }

        $this->pengaduanRepository->delete($id);

        Flash::success('Pengaduan deleted successfully.');

        return redirect(route('pengaduans.index'));
    }
}
