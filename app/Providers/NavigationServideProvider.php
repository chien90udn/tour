<?php

namespace App\Providers;

use App\Support\Navigation\Navigation;
use App\Support\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class NavigationServideProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $navigation = $this->app->make('navigation');

        $navigation->register(new NavigationItem(
            'admin.index', 'Dashboard', 'admin.index', '*', 'fa fa-fw fa-home'
        ));
        $navigation->register(new NavigationItem(
            'admin.accounts', 'Users', null, 'accounts', 'fa fa-fw fa-users', [
                new NavigationItem('admin.accounts.users.index', 'Users Manager', 'admin.accounts.users.index', 'accounts.users.index'),
                new NavigationItem('admin.accounts.groups.index', 'Groups Manager', 'admin.accounts.groups.index', 'accounts.groups.index')
            ]
        ));
        $navigation->register(new NavigationItem(
            'admin.tours', 'Tours Management', null, 'tours', 'fa fa-fw fa-plane', [
                new NavigationItem('admin.tours.tours.index', 'Tours', 'admin.tours.tours.index', 'tours.tours.index'),
                new NavigationItem('admin.tours.groups.index', 'Groups Tours', 'admin.tours.groups.index', 'tours.groups.index'),
                new NavigationItem('admin.tours.destinations.index', 'Google Travel Map', 'admin.tours.destinations.index', 'tours.destinations.index'),
                new NavigationItem('admin.tours.hotelcategory.index', 'Hotels Category', 'admin.tours.hotelcategory.index', 'tours.hotelcategory.index'),
                new NavigationItem('admin.tours.hotels.index', 'Hotels', 'admin.tours.hotels.index', 'tours.hotels.index'),
                new NavigationItem('admin.tours.cruisescategory.index', 'Cruises Category', 'admin.tours.cruisescategory.index', 'tours.cruisescategory.index'),
                new NavigationItem('admin.tours.cruises.index', 'Cruises', 'admin.tours.cruises.index', 'tours.cruises.index'),
                new NavigationItem('admin.tours.cruisestours.index', 'Cruises Tours', 'admin.tours.cruisestours.index', 'tours.cruisestours.index'),
            ]
        ));

        $navigation->register(new NavigationItem(
            'admin.pages', 'Pages', 'admin.pages.index', 'pages.index', 'fa fa-fw fa-file-text'
        ));

        $navigation->register(new NavigationItem(
            'admin.post', 'Bài viết', null, 'admin.post.index', 'fa fa-fw fa-edit', [
                new NavigationItem('admin.post.category.index', 'Danh mục', 'admin.post.category.index', 'post.category.index'),
                new NavigationItem('admin.post.index', 'Bài viết', 'admin.post.index', 'accounts.post.index')
            ]
        ));

        $navigation->register(new NavigationItem(
            'admin.themes', 'Themes', null, 'themes', 'fa fa-fw fa-code', [
                new NavigationItem('admin.themes.menus.index', 'Menus', 'admin.themes.menus.index', 'themes.menus.index'),
                new NavigationItem('admin.themes.option.index', 'Themes', 'admin.themes.option.index', 'themes.option.index')
            ]
        ));


        $navigation->register(new NavigationItem(
            'admin.option.index', 'Cấu hình chung', 'admin.option.index', '*', 'fa fa-fw fa-cog'
        ));

        $navigation->register(new NavigationItem(
            'admin.contact.index', 'Contact', 'admin.contact.index', '*', 'fa fa-envelope-o'
        ));

        $navigation->register(new NavigationItem(
            'admin.booking.index', 'Booking', 'admin.booking.index', '*', 'fa fa-book'
        ));

        $navigation->register(new NavigationItem(
            'admin.customized.index', 'Customized Tours', 'admin.customized.index', '*', 'fa fa-bicycle'
        ));

        $navigation->register(new NavigationItem(
            'admin.crawler.index', 'Crawler', 'admin.crawler.index', '*', 'fa fa-cloud-download'
        ));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('navigation', function ($app) {
            return new Navigation();
        });
    }
}
