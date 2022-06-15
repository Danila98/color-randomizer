<?php

namespace App\DataAdapter\Randomizer;

use App\DataAdapter\DataAdapter;
use App\Models\Randomizer\Tag;
use Illuminate\Database\Eloquent\Model;

class TagAdapter extends DataAdapter
{

    /**
     * @param Tag $tag
     */
    public function getModelData(Model $tag) : array
    {
        return [
            'name' => $tag->name,
            'id' => $tag->id,
        ];
    }
}
