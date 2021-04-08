<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'description'];


    public function search($filter = null)
    {
        if($filter){
            $results = $this
            ->where('name', 'LIKE', "%{$filter}%")
            ->orWhere('description', 'LIKE', "%{$filter}%")
            ->paginate();

            $results->filter = $filter;

            return $results;
        }
        return $this->paginate();
    }

}
