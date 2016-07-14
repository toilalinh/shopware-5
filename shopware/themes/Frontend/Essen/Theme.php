<?php

namespace Shopware\Themes\Essen;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Bare';

    protected $name = 'Essen theme';

    protected $description = 'Essen long description';

    protected $author = 'Laudert';

    protected $license = 'Laudert';

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}