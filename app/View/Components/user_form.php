<?php

namespace App\View\Components;

use Illuminate\View\Component;

class user_form extends Component
{
    public $admin;
    public $user;
    public $create_admin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($connected_user, $user_to_modify, $create_admin = null)
    {
        $this->admin = $connected_user->admin ? true : false;
        $this->user = $user_to_modify ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user_form');
    }
}
