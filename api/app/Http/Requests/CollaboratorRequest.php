<?php

namespace App\Http\Requests;

use Error;

class CollaboratorRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function createRules()
    {
        return [
            'name' => 'required|string'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function updateRules()
    {
        return [];
    }
}
