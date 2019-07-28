<?php

namespace App\Services;

use App\Colaborador;
use App\Repositories\CollaboratorRepository;

class CollaboratorService
{
    /**
     * Collaborator Repository variable
     *
     * @var $collaborator_repository
     */
    protected $collaborator_repository;

    public function __construct(CollaboratorRepository $collaborator_repository)
    {
        $this->collaborator_repository = $collaborator_repository;
    }

    public function getAll()
    {
        return $this->collaborator_repository->list();
    }

    public function get($id)
    {
        return $this->collaborator_repository->get($id);
    }

    public function create($data)
    {
        return $this->collaborator_repository->create($data);
    }

    public function delete($id)
    {
        $this->collaborator_repository->delete($id);
    }
}
