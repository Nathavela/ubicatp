<?php

namespace App\Http\Controllers;

use App\Repositories\PropiedadRepository;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    protected $propiedadRepository;

    public function __construct(PropiedadRepository $propiedadRepository)
    {
        $this->propiedadRepository = $propiedadRepository;
    }

    public function show($id)
    {
        $propiedad = $this->propiedadRepository->getById($id);
        return view('propiedades.show', compact('propiedad'));
    }

}
