<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\Question;
class QuestionResource extends JsonResource
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
          'title'=>$this->title,
          'slug'=>$this->slug,
          'path' =>$this->path,
          'body' =>$this->body,
          'created_at'=>$this->created_at->diffForHumans(),
          'user' =>$this->user->name,
          'user_id' =>$this->user_id
        ];
        //return parent::toArray($request);
    }
}
