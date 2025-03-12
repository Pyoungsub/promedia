<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FroalaEditor extends Component
{
    public $id;
    public $model;
    public $path;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null, $model = 'content', $path = '/board/store-image')
    {
        //
        $this->id = $id ?? md5(uniqid());
        $this->model = $model;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.froala-editor');
    }
}
