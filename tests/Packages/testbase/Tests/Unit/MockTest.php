<?php
namespace IchHabRecht\Testbase\Tests\Unit;

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

use IchHabRecht\Testbase\Mock;
use IchHabRecht\TestingFramework\MockObject\AccessibleMockObjectInterface;
use IchHabRecht\TestingFramework\TestCase\UnitTestCase;

class MockTest extends UnitTestCase
{
    /**
     * @test
     */
    public function getMockReturnsMock()
    {
        /** @var Mock|\PHPUnit_Framework_MockObject_MockObject $subjectMock */
        $subjectMock = $this->getMock('IchHabRecht\\Testbase\\Mock', array('dummy'), array('foo'));

        $this->assertSame('foo', $subjectMock->getAProtectedProperty());
    }

    /**
     * @test
     */
    public function getAccessibleMockReturnsAccessibleMock()
    {
        /** @var Mock|\PHPUnit_Framework_MockObject_MockObject|AccessibleMockObjectInterface $subjectAccessibleMock */
        $subjectAccessibleMock = $this->getAccessibleMock('IchHabRecht\\Testbase\\Mock', array('dummy'));
        $subjectAccessibleMock->_set('aProtectedProperty', 'foo');

        $this->assertSame('foo', $subjectAccessibleMock->getAProtectedProperty());
    }
}
