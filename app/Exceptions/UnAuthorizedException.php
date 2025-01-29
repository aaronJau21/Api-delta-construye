<?php

namespace App\Exceptions;

use Exception;

class UnAuthorizedException extends Exception
{
  protected $code;
  protected $message;

  public function __construct($message = 'Unauthorized', $code = 401)
  {
    $this->code = $code;
    $this->message = $message;
  }

  public function render()
  {
    return response()->json([
      'message' => $this->message
    ], $this->code);
  }
}
