<?php
/**
 * @author Jonathon Wallen
 * @date 6/6/17
 * @time 3:19 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsHero;

use MonkiiBuilt\LaravelPages\PageSectionDecoratorAbstract as PageSectionDecoratorAbstract;

class PageSectionHeroDecorator extends PageSectionDecoratorAbstract
{
    public function renderForm() {
        return view('page-sections-hero::hero', ['section' => $this->wrapped]);
    }
}