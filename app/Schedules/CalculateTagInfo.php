<?php

namespace App\Schedules;

use App\Http\Controllers\TagController;
use App\Models\Tag;
use App\Models\TransTag;

class CalculateTagInfo
{
    public function __invoke()
    {
        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tag->transactions_count = TransTag::query()
                ->where('tag_id', $tag->id)
                ->count();
            $tag->usage_percentage = TagController::calculateTagPercentage($tag);
            $tag->save();
        }
    }
}
