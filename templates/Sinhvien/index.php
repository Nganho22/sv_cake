<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sinhvien> $sinhvien
 */
?>
<div class="sinhvien index content">
    <?= $this->Html->link(__('New Sinhvien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sinhvien') ?></h3>

    <!-- Search Form -->
    <?= $this->Form->create(null, ['type' => 'get', 'id' => 'search-form']) ?>
        <input type="text" id="search" name="search" placeholder="Tìm kiếm sinh viên..." autocomplete="off" value="<?= $this->request->getQuery('search') ?>">
    <?= $this->Form->end() ?>

    <div id="sinhvien-list">
        <!-- Bảng kết quả và phân trang sẽ được chèn vào đây -->
        <?= $this->element('Sinhvien/index_ajax') ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function loadResults() {
            $.ajax({
                url: "<?= $this->Url->build(['action' => 'index']) ?>",
                type: "GET",
                data: $("#search-form").serialize(),
                success: function(data) {
                    $("#sinhvien-list").html($(data).find("#sinhvien-list").html());
                    $("#pagination").html($(data).find("#pagination").html());
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error:", textStatus, errorThrown);
                    alert("An error occurred while processing your request.");
                }
            });
        }

        // Lắng nghe sự thay đổi của các trường tìm kiếm
        $("#search-form input").on("input change", function() {
            loadResults();
        });
    });
</script>





