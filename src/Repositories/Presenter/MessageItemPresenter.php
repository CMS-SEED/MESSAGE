<?php

namespace Cms_Framework_Seed\Message\Repositories\Presenter;

use Cms_Framework_Seed\Repository\Presenter\FractalPresenter;

class MessageItemPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MessageItemTransformer();
    }
}