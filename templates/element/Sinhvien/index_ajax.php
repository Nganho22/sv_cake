<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sinhvien> $sinhvien
 */
?>
<?= $this->Html->css('style.css') ?>
<table>
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('MSSV') ?></th>
            <th><?= $this->Paginator->sort('HoTen') ?></th>
            <th><?= $this->Paginator->sort('NgaySinh') ?></th>
            <th><?= $this->Paginator->sort('DiaChi') ?></th>
            <th><?= $this->Paginator->sort('DienThoai') ?></th>
            <th><?= $this->Paginator->sort('MaKhoa') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sinhvien as $sv): ?>
        <tr>
            <td><?= $this->Number->format($sv->MSSV) ?></td>
            <td><?= h($sv->HoTen) ?></td>
            <td><?= h($sv->NgaySinh) ?></td>
            <td><?= h($sv->DiaChi) ?></td>
            <td><?= h($sv->DienThoai) ?></td>
            <td><?= h($sv->MaKhoa) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $sv->MSSV]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sv->MSSV]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sv->MSSV], ['confirm' => __('Are you sure you want to delete # {0}?', $sv->MSSV)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div id="pagination" class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers([
            'before' => '',
            'after' => '',
            'currentClass' => 'active' // Add this option
        ]) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>

