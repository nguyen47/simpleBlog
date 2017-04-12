<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-block">
            <div class="input-group">
              <form action="search" method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="text" name="search" placeholder="Search for ...">
                <button type="submit"class="btn btn-default">Search</button>
              </form>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-block">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <?php foreach ($categories as $categories): ?>
                        <li><a href="#"><?php echo e($categories->name); ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-block">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>
