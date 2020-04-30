<?php

namespace App;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Dummy
 */
class DummyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
//            'name' => $this->name,
        ];
    }
}
