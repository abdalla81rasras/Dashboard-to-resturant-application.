<?php
include "inc/connection.php";
include "inc/header.php";
?>
                <div class="navbar-nav nv w-100">
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_users.php" class="dropdown-item mb-1">View Users</a>
                            <a href="add_users.php" class="dropdown-item">Add Users</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-square me-2"></i>Snaks</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_snaks.php" class="dropdown-item mb-1">View Snaks</a>
                            <a href="add_snaks.php" class="dropdown-item">Add Snaks</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-hamburger me-2"></i>Burgers</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_burger.php" class="dropdown-item mb-1">View Burgers</a>
                            <a href="add_burger.php" class="dropdown-item">Add Burgers</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-people-carry me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_orders.php" class="dropdown-item mb-1 active">View Orders</a>
                            <a href="add_orders.php" class="dropdown-item">Add Orders</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-location-arrow me-2"></i>Locations</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="view_location.php" class="dropdown-item mb-1">View Locations</a>
                            <a href="add_location.php" class="dropdown-item">Add Locations</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
           <?php
            include "inc/navbar.php";
           ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                        <div class="col-sm-6 col-xl-6">
                            <h3 class="text-secondary alert-link">View Informations Orders :</h3>
                        </div>
                    </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-3">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Order Name</th>
                                        <th scope="col">Meal Or Sandwich</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">QRT</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $select="SELECT * FROM `orders`";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?>
                                    <tr>
                                        <td><?php echo $row['user_name_order']; ?></td>
                                        <td><?php echo $row['phone_number_order']; ?></td>
                                        <td><?php echo $row['location_order']; ?></td>
                                        <td><?php echo $row['order_name']; ?></td>
                                        <td>
                                            <?php echo $row['meal']; ?>  meal ,
                                            <?php echo $row['sandwich']; ?>  Sandwich
                                        </td>
                                        <td><?php echo $row['total_price']; ?> JOD</td>
                                        <td><?php echo $row['qrt']; ?></td>
                                        <td>
                                            <a href="add_orders.php?edit_orders=<?php echo $row['id_orders']; ?>" ><i class="fa fa-edit" title="edit"></i></a> |   
                                            <a href="add_orders.php?delete_orders=<?php echo $row['id_orders']; ?>" ><i class="fa fa-window-close" title="delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </div>

<?php 
    include "inc/footer.php";
?>