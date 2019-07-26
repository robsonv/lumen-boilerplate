<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Obter um determinado colaborador
     *
     * @param string $id
     * @return Response
     *
     * @OA\Get (
     *      path="/v1/colaboradores/{id}",
     *      description="Obter um determinado colaborador",
     *      tags={"Colaborador"},
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id do colaborador",
     *          required=true,
     *          @OA\schema (type="string"),
     *      ),
     *
     *      @OA\Response(response=200, description="OK")
     * )
     */
}
