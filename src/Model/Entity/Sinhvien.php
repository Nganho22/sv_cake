<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sinhvien Entity
 *
 * @property int $MSSV
 * @property string|null $HoTen
 * @property string|null $NgaySinh
 * @property string|null $DiaChi
 * @property string|null $DienThoai
 * @property string|null $MaKhoa
 */
class Sinhvien extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'HoTen' => true,
        'NgaySinh' => true,
        'DiaChi' => true,
        'DienThoai' => true,
        'MaKhoa' => true,
    ];
}
