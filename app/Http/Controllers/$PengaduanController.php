<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create$PengaduanRequest;
use App\Http\Requests\Update$PengaduanRequest;
use App\Repositories\$PengaduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class $PengaduanController extends AppBaseController
{
    /** @var  $PengaduanRepository */
    private $$PengaduanRepository;

    public function __construct($PengaduanRepository $$PengaduanRepo)
    {
        $this->$PengaduanRepository = $$PengaduanRepo;
    }

    /**
     * Display a listing of the $Pengaduan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->$PengaduanRepository->pushCriteria(new RequestCriteria($request));
        $$Pengaduans = $this->$PengaduanRepository->all();

        return view('$_pengaduans.index')
            ->with('$Pengaduans', $$Pengaduans);
    }

    /**
     * Show the form for creating a new $Pengaduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('$_pengaduans.create');
    }

    /**
     * Store a newly created $Pengaduan in storage.
     *
     * @param Create$PengaduanRequest $request
     *
     * @return Response
     */
    public function store(Create$PengaduanRequest $request)
    {
        $input = $request->all();

        $$Pengaduan = $this->$PengaduanRepository->create($input);

        Flash::success('$ Pengaduan saved successfully.');

        return redirect(route('$Pengaduans.index'));
    }

    /**
     * Display the specified $Pengaduan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $$Pengaduan = $this->$PengaduanRepository->findWithoutFail($id);

        if (empty($$Pengaduan)) {
            Flash::error('$ Pengaduan not found');

            return redirect(route('$Pengaduans.index'));
        }

        return view('$_pengaduans.show')->with('$Pengaduan', $$Pengaduan);
    }

    /**
     * Show the form for editing the specified $Pengaduan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $$Pengaduan = $this->$PengaduanRepository->findWithoutFail($id);

        if (empty($$Pengaduan)) {
            Flash::error('$ Pengaduan not found');

            return redirect(route('$Pengaduans.index'));
        }

        return view('$_pengaduans.edit')->with('$Pengaduan', $$Pengaduan);
    }

    /**
     * Update the specified $Pengaduan in storage.
     *
     * @param  int              $id
     * @param Update$PengaduanRequest $request
     *
     * @return Response
     */
    public function update($id, Update$PengaduanRequest $request)
    {
        $$Pengaduan = $this->$PengaduanRepository->findWithoutFail($id);

        if (empty($$Pengaduan)) {
            Flash::error('$ Pengaduan not found');

            return redirect(route('$Pengaduans.index'));
        }

        $$Pengaduan = $this->$PengaduanRepository->update($request->all(), $id);

        Flash::success('$ Pengaduan updated successfully.');

        return redirect(route('$Pengaduans.index'));
    }

    /**
     * Remove the specified $Pengaduan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $$Pengaduan = $this->$PengaduanRepository->findWithoutFail($id);

        if (empty($$Pengaduan)) {
            Flash::error('$ Pengaduan not found');

            return redirect(route('$Pengaduans.index'));
        }

        $this->$PengaduanRepository->delete($id);

        Flash::success('$ Pengaduan deleted successfully.');

        return redirect(route('$Pengaduans.index'));
    }
}
