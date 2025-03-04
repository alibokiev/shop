<?php
    include_once __DIR__ . "/../heder.php";
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Preview</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach ($all as $p) : ?>
                    <tr>
                        <td><?=$p['id']?></td>
                        <td><img src="http://localhost/MyProject/uploads/products/<?=$p['picture']?>"></td>
                        <td><?=$p['title']?></td>
                        <td><?=$p['preview']?></td>
                        <td><?=$p['price']?></td>
                        <td><?=$p['status']?></td>
                        <td><?=$p['created']?></td>
                        <td><?=$p['updated']?></td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="/index.php?model=product&action=update&id=<?=$p['id']?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/index.php?model=product&action=delete&id=<?=$p['id']?>">
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
      </div>
    </section>
  </div>

<?php
    include_once __DIR__ . "/../footer.php";
?>