<?php

declare(strict_types=1);

namespace spec\PhpSpec\Formatter\Presenter\Value;

use PhpSpec\ObjectBehavior;

class BooleanTypePresenterSpec extends ObjectBehavior
{
    public function it_is_a_type_presenter()
    {
        $this->shouldImplement('PhpSpec\Formatter\Presenter\Value\TypePresenter');
    }

    public function it_should_support_boolean_values()
    {
        $this->supports(true)->shouldReturn(true);
        $this->supports(false)->shouldReturn(true);
    }

    public function it_should_present_a_true_boolean_as_a_string()
    {
        $this->present(true)->shouldReturn('true');
    }

    public function it_should_present_a_false_boolean_as_a_string()
    {
        $this->present(false)->shouldReturn('false');
    }
}
