<?php

namespace Dravencms\FrontModule\Components\Primitive\CallToAction\Bar;

use Dravencms\Components\BaseControl\BaseControl;
use Salamek\Cms\ICmsActionOption;

class Bar extends BaseControl
{
    /** @var ICmsActionOption */
    private $cmsActionOption;

    public function __construct(ICmsActionOption $cmsActionOption)
    {
        parent::__construct();
        $this->cmsActionOption = $cmsActionOption;
    }
    
    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/bar.latte');
        $template->render();
    }
}
