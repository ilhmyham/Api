<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class trainingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'mentor_id' => $this->mentor_id,
            'harga' => $this->harga,
            'deskripsi' => $this->deskripsi,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
