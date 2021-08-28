<?php

namespace Fibdesign\Blog\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resource = [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'tags' => $this->tags,
            'popular' => $this->popular,
            'registered' => $this->registered,
            'category' => $this->category,
        ];
        if (!auth('sanctum')->check()){
            $resource += [
                'comments' => CommentResource::collection($this->approvedComments),
            ];
        }else{
            $resource += [
                'isPopularFull' => $this->isPopularFull,
            ];
        }
        return $resource;
    }


}
