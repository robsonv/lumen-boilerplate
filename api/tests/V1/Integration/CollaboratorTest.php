<?php

use App\Models\Collaborator;
use Illuminate\Http\Response;

class CollaboratorTest extends TestCase
{
    /**
     * api/v1/collaborators/id [GET]
     *
     * @test
     */
    public function should_return_collaborator()
    {
        $collaborator = factory(Collaborator::class)->create();

        $this->get("api/v1/collaborators/{$collaborator->id}");

        $this->seeStatusCode(Response::HTTP_OK);

        $this->seeJsonStructure(
            [
                "id",
                "name",
            ]
        );
    }

    /**
     * api/v1/collaborators [GET]
     *
     * @test
     */
    public function should_return_collaborator_collection()
    {
        $this->get("api/v1/collaborators");

        $this->seeStatusCode(Response::HTTP_OK);

        $this->seeJsonStructure([
            '*' => [
                'id',
                'name'
            ]
        ]);
    }

    /**
     * api/v1/collaborators/id [DELETE]
     *
     * @test
     */
    public function should_delete_a_collaborator()
    {
        $collaborator = factory(Collaborator::class)->create();

        $this->delete("api/v1/collaborators/{$collaborator->id}", [], []);
        $this->seeStatusCode(Response::HTTP_OK);
        $this->seeJsonStructure([
            'status'
        ]);
    }
}
