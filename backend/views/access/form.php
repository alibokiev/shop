<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="content-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>News</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
                <h3>Create role</h3>
        </div>
        <form action="/index.php?model=access&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Roles</td>
                            <?php foreach($roles as $role) :?>
                                <td><?=$role?></td>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($permissions as $permission) : ?>
                            <tr>
                                <td><?=$permission?></td>
                                <?php foreach($roles as $role) : ?>
                                    <td><input type="checkbox"  <?=(isset($accesses[$role][$permission])) ? 'checked="true"' : '' ?> name="access[<?=$role?>][<?=$permission?>]"></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include_once __DIR__ . "/../footer.php";
?>