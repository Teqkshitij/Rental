<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookFixture
 */
class BookFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'book';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'carinfo_id' => 1,
                'user_id' => 1,
                'date' => 'Lorem ipsum dolor sit amet',
                'time' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
