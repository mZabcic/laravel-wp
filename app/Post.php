<?php 

namespace App;

use Corcel\Model\Post as Corcel;

class Post extends Corcel
{

    public function __construct() {
        array_push($this->appends, 'owner');
    }


    public function getOwnerAttribute()
    {
        return $this->acf->owner;
    }
}