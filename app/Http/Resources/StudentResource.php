<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'ten'=>$this->name,
            'maNganh'=>$this->maNganh,
            'created_at'=>$this->created_at ? $this->created_at->format('d/m/Y') :'.',
            'updated_at' => $this->updated_at ? $this->updated_at->format('d/m/Y') : '.'
        ];
    }
}
