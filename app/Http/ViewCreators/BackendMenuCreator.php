<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator {

    /**
     * The user model.
     *
     * @var \App\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('/admin/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
        /*
         * Sample for adding menu
         * array_push($menu,
            [
                'class' => {desired class},
                'route' => {desired route or url},
                'icon'  => {md or fa icon class},
                'title' => {title},
                \\Optional Sub Menu Items
                'items' => [
                    ['route' => {route or url}, 'title' => {title}],
                    ...
                ]
            ]);
         */

        array_push($menu, [
            'class' => false,
            'route' => route('user.index'),
            'icon'  => 'md md-accessibility',
            'title' => 'Users'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('post.index'),
            'icon'  => 'md md-web',
            'title' => 'Posts'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('contact.index'),
            'icon'  => 'md md-perm-contact-cal',
            'title' => 'Contact'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('work.index'),
            'icon'  => 'md md-group-work',
            'title' => 'Work'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('category.index'),
            'icon'  => 'md md-open-with',
            'title' => 'Category'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('career.index'),
            'icon'  => 'md md-star',
            'title' => 'Career'
        ]);

        array_push($menu, [
            'class' => false,
            'route' => route('team.index'),
            'icon'  => 'md md-face-unlock',
            'title' => 'Team'
        ]);

        $view->with('allMenu', $menu);
    }
}