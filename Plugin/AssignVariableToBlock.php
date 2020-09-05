<?php
declare(strict_types=1);

namespace Yireo\ExampleAssignToBlock\Plugin;

use Yireo\ExampleAssignToBlock\Block\Example as ExampleBlock;
use Yireo\ExampleAssignToBlock\ViewModel\Example as ExampleViewModel;

class AssignVariableToBlock
{
    /**
     * @var ExampleViewModel
     */
    private $exampleViewModel;

    public function __construct(
        ExampleViewModel $exampleViewModel
    ) {
        $this->exampleViewModel = $exampleViewModel;
    }

    /**
     * @param ExampleBlock $exampleBlock
     * @return array
     */
    public function beforeToHtml(ExampleBlock $exampleBlock)
    {
        $exampleBlock->assign('viewModel', $this->exampleViewModel);
        return [];
    }
}
