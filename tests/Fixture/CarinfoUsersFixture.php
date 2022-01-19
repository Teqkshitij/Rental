<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarinfoUsersFixture
 */
class CarinfoUsersFixture extends TestFixture
{
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
