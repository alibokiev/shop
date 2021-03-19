<?php
    include_once __DIR__ . "/../heder.php";
?>
<div class="content-wrapper" style="min-height: 1372.62px; padding: 1% 15%;">
    <h1>Permission</h1>
   <div class="card card-primary">
        <div style="background-color: #343a40;" class="card-header">
                <h3>Create permission</h3>
        </div>
        <form action="/?model=permission&action=save" method="post" enctype="multipart/form-data">
            <div class="card-body"> 
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?=$one['permission'] ?? ''?>" name="permission" class="form-control">
                </div>
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