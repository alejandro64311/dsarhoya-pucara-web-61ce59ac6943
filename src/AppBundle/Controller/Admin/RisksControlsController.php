<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\RisksControls;

class RisksControlsController extends BaseEAdminController
{
    /**
     * {@inheritdoc}
     */
    protected function createNewEntity()
    {
        $mine = $this->mineService->getMine($this->request);

        return new RisksControls($mine);
    }
}
