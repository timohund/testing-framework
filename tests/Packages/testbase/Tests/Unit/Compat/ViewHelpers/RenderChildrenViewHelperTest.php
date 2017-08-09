<?php
namespace IchHabRecht\Testbase\Tests\Unit\Compat\ViewHelpers;

/*
 * This file is part of the IchHabRecht testing-framework project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 */

use IchHabRecht\Testbase\ViewHelpers\RenderChildrenViewHelper;
use TYPO3\CMS\Fluid\Tests\Unit\ViewHelpers\ViewHelperBaseTestcase;

class RenderChildrenViewHelperTest extends ViewHelperBaseTestcase
{
    /**
     * @var RenderChildrenViewHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $viewHelper;

    protected function setUp()
    {
        parent::setUp();
        $this->viewHelper = $this->getMock('IchHabRecht\\Testbase\\ViewHelpers\\RenderChildrenViewHelper', array('renderChildren'));
        $this->injectDependenciesIntoViewHelper($this->viewHelper);
        $this->viewHelper->initializeArguments();
    }

    /**
     * @test
     */
    public function renderReturnsExpectedResult()
    {
        $this->viewHelper->expects($this->once())->method('renderChildren')->willReturn('foo');

        $this->assertSame('foo', $this->viewHelper->render());
    }
}
