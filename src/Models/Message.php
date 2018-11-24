<?php

namespace Cms_Framework_Seed\Message\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cms_Framework_Seed\Database\Model;
use Cms_Framework_Seed\Database\Traits\Slugger;
use Cms_Framework_Seed\Filer\Traits\Filer;
use Cms_Framework_Seed\Hashids\Traits\Hashids;
use Cms_Framework_Seed\Repository\Traits\PresentableTrait;
use Cms_Framework_Seed\Trans\Traits\Translatable;
use Cms_Framework_Seed\User\Traits\User as UserModel;

class Message extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable,  PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'message.message';
    /**
     * User morph to many relation.
     */
    public function user()
    {
        return $this->morphTo();
    }
}
