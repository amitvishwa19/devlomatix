<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroceryProductResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            'image' => $this->feature_image,
            'price' => $this->description,
            'discount' => 5,
            'netPrice' => $this->description -($this->description * 20)/100,
            'sku' => '5',
            'featured' => $this->featured,
            'rating' => 5
        ];
    }
}
