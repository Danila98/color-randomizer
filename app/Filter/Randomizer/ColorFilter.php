<?php

namespace App\Filter\Randomizer;
use App\Filter\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class ColorFilter extends QueryFilter
{
    /**
     * @param integer $type
     */
    public function type(int $type)
    {
        $this->builder->where('type', $type);
    }

    /**
     * @param array $ids
     */
    public function tags(array $ids)
    {

        $this->builder->where(function (Builder $query) use ($ids) {
                $query->whereHas('tags', fn($query) => $query->whereIn('id', $ids))->with('tags');
        });
    }
}
