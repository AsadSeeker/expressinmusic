<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light"><?= $_ENV['COMPANY_NAME'] ?></div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://<?= $_SERVER['HTTP_HOST']."/user/dashboard" ?>">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://<?= $_SERVER['HTTP_HOST']."/user/upload" ?>">Upload a Song</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://<?= $_SERVER['HTTP_HOST']."/user/view_all" ?>">View All Songs</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://<?= $_SERVER['HTTP_HOST']."/user/profile" ?>">Profile</a>
    </div>
</div>