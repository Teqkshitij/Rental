<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarinfoUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarinfoUsersTable Test Case
 */
class CarinfoUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarinfoUsersTable
     */
    protected $CarinfoUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CarinfoUsers',
        'app.Carinfo',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CarinfoUsers') ? [] : ['className' => CarinfoUsersTable::class];
        $this->CarinfoUsers = $this->getTableLocator()->get('CarinfoUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CarinfoUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarinfoUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CarinfoUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
