<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarinfoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarinfoTable Test Case
 */
class CarinfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarinfoTable
     */
    protected $Carinfo;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carinfo',
        'app.Book',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carinfo') ? [] : ['className' => CarinfoTable::class];
        $this->Carinfo = $this->getTableLocator()->get('Carinfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carinfo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarinfoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
