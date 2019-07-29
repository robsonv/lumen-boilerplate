<?php

namespace App\Http\Controllers;

use App\Http\Resources\CollaboratorResource;
use App\Http\Requests\CollaboratorRequest;
use App\Services\CollaboratorService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CollaboratorController extends Controller
{
    /**
     * CollaboratorService instance variable
     *
     * @var CollaboratorService
     */
    protected $collaborator_service;

    /**
     * create a CollaboratorController instance
     *
     * @param CollaboratorService
     */
    public function __construct(CollaboratorService $collaborator_service)
    {
        $this->collaborator_service = $collaborator_service;
    }

    /**
     * Obter um determinado colaborador
     *
     * @param string $id
     * @return Response
     *
     * @OA\Get (
     *      path="/v1/collaborators/{id}",
     *      description="Obter um determinado colaborador",
     *      tags={"Collaborators"},
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
    public function get(string $id)
    {
        $collaborator = $this->collaborator_service->get($id);

        return response()->json(new CollaboratorResource($collaborator));
    }

    /**
     * Obter colaboradores
     *
     * @return Response
     *
     * @OA\Get (
     *      path="/v1/collaborators",
     *      description="Obter uma lista de colaboradores",
     *      tags={"Collaborators"},
     *
     *  @OA\Response(response=200, description="OK")
     * )
     */
    public function list()
    {
        $result = $this->collaborator_service->getAll();

        return response()->json($result);
    }

    /**
     * create collaborator
     *
     * @OA\Post(
     *     path="/v1/collaborators",
     *     description="criar uma reserva",
     *     tags={"Collaborators"},
     *
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="name", type="string", example="João da Silva"),
     *          ),
     *     ),
     *
     *     @OA\Response(response=201, description="Created"),
     *     @OA\Response(response=422, description="Validation concern"),
     *     @OA\Response(response=500, description="Internal server error"),
     * )
     */
    public function create(Request $request)
    {
        $data  = $this->validate($request, CollaboratorRequest::createRules());

        $collaborator = $this->collaborator_service->create($data);

        return response()->json(new CollaboratorResource($collaborator));
    }

    /**
     * Remover uma determinada reserva
     *
     * @param string $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/v1/collaborators/{id}",
     *      description="Remover uma determinada reserva",
     *      tags={"Collaborators"},
     *
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id da reserva",
     *          required=true,
     *          @OA\schema (type="string"),
     *      ),
     *
     *  @OA\Response(response=200, description="OK")
     * )
     */
    public function delete(string $id)
    {
        $this->collaborator_service->delete($id);

        return response()->json(['status' => 'success']);
    }
}
