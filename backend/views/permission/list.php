<?php
    include_once __DIR__ . "/../heder.php";
?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Permission</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <th>Title</th>
                    <th style="text-align: center;">Action</th>
                </thead>
                <tbody>

                    <?php foreach ($all as $p) : ?>
                    <tr>
                        <td><?=$p?></td>
                        <td class="project-actions text-right">
                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a> -->
                            <!-- <a class="btn btn-info btn-sm" href="/index.php?model=permission&action=update&id=<?=$p?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a> -->
                            <a class="btn btn-danger btn-sm" href="/?model=permission&action=delete&permission=<?=$p?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once __DIR__ . "/../footer.php";
?>