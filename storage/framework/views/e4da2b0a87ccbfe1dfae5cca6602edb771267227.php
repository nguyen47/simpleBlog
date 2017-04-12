<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <?php if (Sentinel::check()): ?>
              <?php if (Sentinel::findRoleBySlug('admin')): ?>
                <li class="nav-item"><a  class="nav-link">Hello, <?php echo e(Sentinel::getUser()->first_name); ?></a>
                <li class="nav-item"><a  class="nav-link" href="logout">Logout</a></li>
                <li class="nav-item"><a  class="nav-link" href="admin/dashboard">Admin Panel</a></li>
              <?php else: ?>
                <li class="nav-item"><a  class="nav-link">Hello, <?php echo e(Sentinel::getUser()->first_name); ?></a>
                <li class="nav-item"><a  class="nav-link" href="logout">Logout</a></li>
              <?php endif ?>
            <?php else: ?>
              <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
            <?php endif ?>
          </ul>
            </ul>
        </div>
    </div>
</nav>
