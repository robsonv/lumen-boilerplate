<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @SWG\Swagger(
     *      schemes={"http", "https"},
     *      @OA\Info(
     *          title="Lumen-boilerplate",
     *          version="1.0",
     *      ),
     *
     * ),
     * @OA\Server(
     *         url="/api"
     *     )
     */
}
