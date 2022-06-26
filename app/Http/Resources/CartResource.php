<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //post_idreturn parent::toArray($request);

        return[
            'cart_id' => $this->id,
            'product' =>new GroceryProductResource(Post::findOrFail($this->post_id)),
            'quantity' => $this->quantity
        ];
    }
}
