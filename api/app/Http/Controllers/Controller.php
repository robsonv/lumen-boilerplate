<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @SWG\Swagger(
     *      schemes={"http", "https"},
     *      @OA\Info(
     *          title="EPI Manager",
     *          version="1.2",
     *          @OA\Contact(
     *              email="robson.stun@hotmail.com"
     *          )
     *      ),
     *
     * ),
     * @OA\Server(
     *         url="/api"
     *     )
     */
}
