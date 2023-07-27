<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     *
     * Calling default alert: <x-AlertComponent />
     * By default the alert will return a blank success alert with bootstrap structure.
     * In case of needed in session alert bellow is an example
     *
     * The type="session" declaires this is a session alert
     * The class="success" is added to the alert type. example: success, danger, warning etc from bootstrap
     * The value="success" will be shown directly in the alert or used as a key in case of type="session"
     *
     * Full Example 1: <x-AlertComponent key="success" class="success" value="success"/>
     * Full Example 2: <x-AlertComponent key="normal" class="danger" value="err"/>
     *
     */
    public function __construct(
        public string $type = 'normal',
        public string $value = 'success',
        public string $class = 'success'
    )
    {
        // <x-AlertComponent key="success" class="success" key="success"/>
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-component');
    }
}
