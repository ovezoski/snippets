
<style media="screen">
.user{
  width: 20%;
  padding: 2.5%;
  background: gray;
  display: inline-block;
}
</style>

<?php foreach ($newUsers as $user): ?>

  <div class="user" style="background:<?= $user->color ?>">
    <h1><?= $user->username ?></h1>
  </div>

<?php endforeach; ?>
