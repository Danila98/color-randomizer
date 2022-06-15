<?php

namespace App\Http\Controllers\Api\Randomizer;

use App\DataAdapter\Randomizer\TagAdapter;
use App\Http\Controllers\Controller;
use App\Models\Randomizer\Tag;

class TagController extends Controller
{
    public function getTags(TagAdapter $adapter)
    {
        return $adapter->getArrayModelData(Tag::all());
    }
}
