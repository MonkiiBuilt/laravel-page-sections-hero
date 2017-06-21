<?php
/**
 * @author Jonathon Wallen
 * @date 6/6/17
 * @time 2:45 PM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LaravelPageSectionsHero;


use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MonkiiBuilt\LaravelPages\Models\PageSection;
use MonkiiBuilt\LaravelPageSectionsHero\Models\PageSectionHero;

class ServiceProvider  extends BaseServiceProvider {

    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LaravelPageSectionsHero');

        PageSection::addSingleTableSubclass(PageSectionHero::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'page-sections-hero');

    }
}