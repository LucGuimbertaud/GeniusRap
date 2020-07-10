<?php

namespace App;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
    {
       $url = route('artists.show', $this->id);

       return new SearchResult($this, $this->name, $url);
    }
}
