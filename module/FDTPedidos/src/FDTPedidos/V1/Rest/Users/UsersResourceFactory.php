<?php
namespace FDTPedidos\V1\Rest\Users;

class UsersResourceFactory
{
    public function __invoke($services)
    {
        return new UsersResource($services->get('FDTPedidos\\V1\\Rest\\Users\\UsersRepository'));
    }
}
