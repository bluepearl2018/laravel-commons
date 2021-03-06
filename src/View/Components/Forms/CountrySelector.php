<?php

namespace Eutranet\Commons\View\Components\Forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class CountrySelector extends Component
{
    private $name;
    private Application|Translator|string|array|null $label;
    private $id;
    private $placeholder;
    private $tip;
    private $old;
    private mixed $model;

    /**
     * @var mixed
     */
    private $required;
    private mixed $readonly;
    /**
     * @var array|Application|Translator|string|null
     */

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columnName, $specs, $old)
    {
        $this->name = $columnName;
        $this->id = Str::slug($columnName) ?? '';
        $this->label = trans('fields.' . $this->name);
        $this->required = $specs[2] ?? '';
        $this->placeholder = $specs[3] ?? '';
        $this->tip = $specs[4] ?? '';
        $this->old = $old ?? '';
        $this->model = $specs[5] ?? '';
        $this->readonly = $specs[6] ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): Factory|View|Application
    {
        return view('commons::components.forms.select-country', [
            'name' => $this->name,
            'id' => $this->id,
            'label' => $this->label,
            'required' => $this->required,
            'placeholder' => $this->placeholder,
            'tip' => $this->tip,
            'old' => $this->old,
            'model' => $this->model,
            'readonly' => $this->readonly
        ]);
    }
}
