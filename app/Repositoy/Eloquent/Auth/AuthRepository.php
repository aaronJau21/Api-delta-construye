<?php

namespace App\Repositoy\Eloquent\Auth;

use App\Exceptions\BadRequestException;
use App\Exceptions\UnAuthorizedException;
use App\Models\Client;
use App\Models\User;
use App\Repositoy\Repository\Auth\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
  protected $_modelUser;
  protected $_modelClient;

  public function __construct(User $modelUser, Client $modelClient)
  {
    $this->_modelUser = $modelUser;
    $this->_modelClient = $modelClient;
  }

  public function loginUser($data)
  {
    if (!$token = Auth::guard('api')->attempt($data)) {
      throw new UnAuthorizedException('Credenciales incorrectas');
    }

    $status = $this->_modelUser->where('email', $data['email'])->first();

    if ($status->status == 0) {
      throw new BadRequestException('Usuario inactivo');
    }

    return $this->respondWithToken($token, $status);
  }

  public function loginClient(array $data)
  {
    if (!$token = Auth::guard('client')->attempt($data)) {
      throw new UnAuthorizedException('Credenciales incorrectas');
    }

    $user = $this->_modelClient->where('email', $data['email'])->first();

    if ($user->status == false) {
      throw new BadRequestException('Por favor, verifica tu correo electrónico.');
    }

    return $this->respondWithToken($token, $user);
  }

  protected function respondWithToken($token, $user)
  {
    return response()->json([
      'access_token' => $token,
      'user' => [
        'name' => $user->name,
        'email' => $user->email,
        'id' => $user->id
      ],
      'expires_in' => Auth::factory()->getTTL() * 60
    ]);
  }
}
