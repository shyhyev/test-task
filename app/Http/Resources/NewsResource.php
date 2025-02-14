<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema (
 *     schema="NewsDataResource",
 *     @OA\Property (property="id", type="integer", example="1"),
 *     @OA\Property (property="title", type="string", example="Title"),
 *     @OA\Property (property="description", type="string", example="Description"),
 *     @OA\Property (property="image", type="string", example="Url of image"),
 * )
 */
class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"          => $this->id,
            "title"       => $this->title,
            "description" => $this->description,
            "image"       => public_url($this->image),
            "author"      => UserResource::make($this->author)
        ];
    }
}
