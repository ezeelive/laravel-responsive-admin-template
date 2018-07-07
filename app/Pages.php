<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $primaryKey = 'page_id';
	 protected $fillable = [
        'page_name', 'page_title', 'page_detail', 'meta_title', 'meta_keyword', 'meta_description', 'is_active', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    public function Pages(){
      return $this->belongsTo('App\pages');
    }

}
