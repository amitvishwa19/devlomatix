<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'cart'=>unserialize($this->cart),
            'address'=>unserialize($this->address),
            'status'=>$this->status,
            'payment_id'=>$this->payment_id,
            'date' => $this->created_at
        ];
    }
}
