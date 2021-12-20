<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
        // プロパティを設定して属性でcomponentで表示する。
    public $classMessage;
    public $defaultMessage;

    // ここに変数などを入れる
    public function __construct($classMessage,$defaultMessage='初期値')
    {
    $this->classMessage = $classMessage;
    $this->defaultMessage = $defaultMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base-component');
    }
}
