<?php

namespace App\Exceptions;

use Exception;

class InternalServerErrorException extends Exception
{
  protected $code;
  protected $message;
  public function __construct($message = 'Internal Server Error', $code = 500)
  {
    $this->code = $code;
    $this->message = $message;
    parent::__construct($message, $code);
  }

  public function render()
  {
    return response()->json([
      'error' => $this->message
    ], $this->code);
  }
}
