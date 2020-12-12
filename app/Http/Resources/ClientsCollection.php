<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($element) {
                return [
                    'name' => $element->name,
                    "id" => $element->id,
                    "direction" => $element->direction,
                    "fono" => $element->fono,
                    "image" => $element->img_url
                ];
            })
        ];
    }
}
