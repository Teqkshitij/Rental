<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookTable Test Case
 */
class BookTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookTable
     */
    protected $Book;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Book',
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
        $config = $this->getTableLocator()->exists('Book') ? [] : ['className' => BookTable::class];
        $this->Book = $this->getTableLocator()->get('Book', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Book);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BookTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BookTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
