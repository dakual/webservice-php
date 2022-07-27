<?php

namespace App\Models;

use Illuminate\Http\Resources\Json\JsonResource;

class Response extends JsonResource
{
    protected $id;
    protected $message;
    protected $timestamp;

    public function __construct(){}

    public function setId($id) {
        $this->id = $id;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'timestamp' => $this->timestamp
        ];
    }
}
