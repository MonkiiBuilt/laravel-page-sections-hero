<?php
/**
 * @author Jonathon Wallen
 * @date 6/6/17
 * @time 2:47 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsHero\Models;

use MonkiiBuilt\LaravelPages\Models\PageSection;

class PageSectionHero extends PageSection
{
    protected static $singleTableType = 'hero';

    public function getDecorator()
    {
        $decoratorName = \MonkiiBuilt\LaravelPageSectionsHero\PageSectionHeroDecorator::class;
        return new $decoratorName($this);
    }
}