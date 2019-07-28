<?php

namespace App\Repositories;

use App\Models\Collaborator;
use App\Interfaces\ColaboradorInterface;
use App\Models\Withdrawl;

class CollaboratorRepository
{
    public function list()
    {
        return Collaborator::all();
    }

    public function get($id)
    {
        $collborator = Collaborator::find($id);
        //$colaborador->reservados            = Reserva::count();
        //$colaborador->reservados_aberto     = Reserva::where('id_retirada', null)->count();
        //$colaborador->reservados_retirados  = Reserva::where('id_colaborador', $colaborador->id)->where('id_retirada','!=', null)->count();
        //$colaborador->retiradas             = Retirada::count();

        return $collborator;
    }

    public function create($data)
    {
        $collaborator = new Collaborator();
        $collaborator->save();

        return $collaborator;
    }
}
