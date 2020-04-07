<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'stock' => $this->stock == 0 ? 'Out of stock' : $this->stock,
            'discount' => $this->discount,
            'rating' => $this->reviews->count() > 0 ? $this->reviews->sum('star')/$this->reviews->count() : 'No rating yet',
            'href' => [
                'review' => route('reviews.index', $this->id)
            ],
        ];
    }
}
