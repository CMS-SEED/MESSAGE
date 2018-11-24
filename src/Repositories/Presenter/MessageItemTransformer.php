<?php

namespace Cms_Framework_Seed\Message\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class MessageItemTransformer extends TransformerAbstract
{
    public function transform(\Cms_Framework_Seed\Message\Models\Message $message)
    {
        return [
            'id'                => $message->getRouteKey(),
            'status'            => $message->status,
            'star'              => $message->star,
            'from'              => $message->from,
            'to'                => $message->to,
            'subject'           => $message->subject,
            'message'           => $message->message,
            'read'              => $message->read,
            'type'              => $message->type,
        ];
    }
}