<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentFixture
 */
class PaymentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'payment';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'card' => 1,
                'month' => 1,
                'year' => 1,
                'cvv' => 1,
                'amount' => 1,
            ],
        ];
        parent::init();
    }
}
