<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sinhvien $sinhvien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sinhvien'), ['action' => 'edit', $sinhvien->MSSV], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sinhvien'), ['action' => 'delete', $sinhvien->MSSV], ['confirm' => __('Are you sure you want to delete # {0}?', $sinhvien->MSSV), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sinhvien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sinhvien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sinhvien view content">
            <h3><?= h($sinhvien->MSSV) ?></h3>
            <table>
                <tr>
                    <th><?= __('HoTen') ?></th>
                    <td><?= h($sinhvien->HoTen) ?></td>
                </tr>
                <tr>
                    <th><?= __('NgaySinh') ?></th>
                    <td><?= h($sinhvien->NgaySinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('DiaChi') ?></th>
                    <td><?= h($sinhvien->DiaChi) ?></td>
                </tr>
                <tr>
                    <th><?= __('DienThoai') ?></th>
                    <td><?= h($sinhvien->DienThoai) ?></td>
                </tr>
                <tr>
                    <th><?= __('MaKhoa') ?></th>
                    <td><?= h($sinhvien->MaKhoa) ?></td>
                </tr>
                <tr>
                    <th><?= __('MSSV') ?></th>
                    <td><?= $this->Number->format($sinhvien->MSSV) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
