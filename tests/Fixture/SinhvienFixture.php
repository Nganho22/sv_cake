<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SinhvienFixture
 */
class SinhvienFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'sinhvien';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'MSSV' => 1,
                'HoTen' => 'Lorem ipsum dolor sit amet',
                'NgaySinh' => 'Lorem ipsum dolor sit amet',
                'DiaChi' => 'Lorem ipsum dolor sit amet',
                'DienThoai' => 'Lorem ipsum dolor sit amet',
                'MaKhoa' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
