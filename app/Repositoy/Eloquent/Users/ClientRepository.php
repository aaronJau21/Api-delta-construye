<?php

namespace App\Repositoy\Eloquent\Users;

use App\Exceptions\BadRequestException;
use App\Models\Client;
use App\Repositoy\Repository\Users\ClientRepositoryInterface;

class ClientRepository implements ClientRepositoryInterface
{
  protected $_model;
  public function __construct(Client $client)
  {
    $this->_model = $client;
  }

  public function create(array $data)
  {

    $existClient = $this->_model->where('email', $data['email'])->first();

    if ($existClient) throw new BadRequestException('Ya existe el cliente');

    $create = $this->_model->create($data);

    return $create;
  }

  public function getClient($name)
  {
    $client = $this->_model->where('name', $name)->first();

    return $client;
  }
}
