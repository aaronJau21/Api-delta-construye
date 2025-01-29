<?php

namespace App\Exceptions;

use Exception;

class BadRequestException extends Exception
{
  protected $code;
  protected $message;
  public function __construct($message = 'Bad Request', $code = 400)
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
