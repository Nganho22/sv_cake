<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sinhvien Model
 *
 * @method \App\Model\Entity\Sinhvien newEmptyEntity()
 * @method \App\Model\Entity\Sinhvien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sinhvien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sinhvien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sinhvien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sinhvien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sinhvien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SinhvienTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sinhvien');
        $this->setDisplayField('MSSV');
        $this->setPrimaryKey('MSSV');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('HoTen')
            ->maxLength('HoTen', 255)
            ->allowEmptyString('HoTen');

        $validator
            ->scalar('NgaySinh')
            ->maxLength('NgaySinh', 255)
            ->allowEmptyString('NgaySinh');

        $validator
            ->scalar('DiaChi')
            ->maxLength('DiaChi', 255)
            ->allowEmptyString('DiaChi');

        $validator
            ->scalar('DienThoai')
            ->maxLength('DienThoai', 100)
            ->allowEmptyString('DienThoai');

        $validator
            ->scalar('MaKhoa')
            ->maxLength('MaKhoa', 255)
            ->allowEmptyString('MaKhoa');

        return $validator;
    }
}
