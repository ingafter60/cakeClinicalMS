<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->HTML->link(__('New'.$type),   ['action' => 'add']) ?></li>
    <li><?= $this->HTML->link(__('List'.$types), ['action' => 'index']) ?></li>
</ul>
