<?php

namespace App\Repositories;

use App\Models\Collaborator;
use Illuminate\Database\Eloquent\Collection;

class CollaboratorRepository
{
    /**
     * get collaborator
     *
     * @param string $id
     * @return Collaborator
     */
    public function get($id): Collaborator
    {
        $collborator = Collaborator::find($id);

        return $collborator;
    }

    /**
     * get collaborators collection
     *
     * @param string $id
     * @return Collaborator
     */
    public function list(): Collection
    {
        return Collaborator::all();
    }

    /**
     * create collaborator
     *
     * @param array $input
     * @return Collaborator
     * @throws \Exception
     */
    public function create(array $input): Collaborator
    {
        $collaborator = new Collaborator();
        $collaborator->fill($input);
        $collaborator->save();

        return $collaborator;
    }

    /**
     * update collaborator
     *
     * @param string $id
     * @param array $input
     * @return Collaborator
     * @throws \Exception
     */
    public function update(string $id, array $input): Collaborator
    {
        $collaborator = new Collaborator();
        $collaborator = $collaborator->find($id);
        $collaborator->fill($input);
        $collaborator->save();
        return $collaborator;
    }

    /**
     * delete collaborator
     *
     * @param string $id
     * @return Collaborator
     * @throws \Exception
     */
    public function delete(string $id): Collaborator
    {
        $collaborator = new Collaborator();
        $collaborator = $collaborator->find($id);
        $collaborator->delete();
        return $collaborator;
    }
}
