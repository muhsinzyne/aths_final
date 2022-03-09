<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ModalDialog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $args;
    public $warrning = true;

    public function __construct($args = [])
    {
        $this->args = $args;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-dialog');
    }
}
