<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComputerCard extends Component
{
    public mixed $computer;

    public function __construct(mixed $computer)
    {
        $this->computer = $computer;
    }

    public function render(): View|Closure|string
    {
        return view('components.computer-card');
    }
}
