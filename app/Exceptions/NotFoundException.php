<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{
  protected $message;
  protected $code;

  public function __construct($message = 'Not Found', $code = 404)
  {
    $this->message = $message;
    $this->code = $code;
  }

  public function render()
  {
    return response()->json([
      'message' => $this->message
    ], $this->code);
  }
}
