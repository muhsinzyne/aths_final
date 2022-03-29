<?php
namespace App\View\Components;

use Illuminate\View\Component;

class AjaxLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = [])
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('ajax.ajax-layout');

        // return view('auth.layout', ['comment' => 'Sign-in', 'wrapperClass' => 'w-lg-500px']);
    }
}
