<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarusersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarusersTable Test Case
 */
class CarusersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarusersTable
     */
    protected $Carusers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carusers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carusers') ? [] : ['className' => CarusersTable::class];
        $this->Carusers = $this->getTableLocator()->get('Carusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carusers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarusersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
