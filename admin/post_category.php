<?php include"db_connect.php" ?>
<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <button class="btn btn-secondary mx-4" type="button">
                        Dashboard
                    </button>
                    <li class="nav-item mx-4">
                        <a href="user.php"><button class="btn btn-secondary " type="button">
                                User
                            </button></a>
                    </li>
                    <li class="nav-item mx-4">

                        <a href="post_category.php">
                            <button class="btn btn-secondary " type="button">
                                All Post
                            </button>
                        </a>


                    </li>
                    <a href="order.php"><button class="btn btn-secondary mx-4" type="button">
                            Order
                        </button></a>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section>
    <div class="container my-5">
        <!-- Example single danger button -->
        <div class="form-outline">
        <label for="inputState">Filter:</label>
            <select id="inputState" class="form-control my-2 text-center justify-content-center w-50">
                <option selected><button>All Post...</button></option>
                <option><button>Appetizer</button></option>
                <option><button>Main Course</button></option>
                <option><button>Dessert</button></option>
                <option><button>Beverage</button></option>
                <option><button>Offer</button></option>
                
            </select>
            
        </div>
        <div>
        <div class="container">
  <h2>Admin Dashboard</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Title</th>
        <th>Image</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td>1</td>
        <td>Product 1</td>
        <td><img src="product1.jpg" alt="Product 1" style="max-width: 100px;"></td>
        <td>$10.00</td>
        <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    
      
    </tbody>
  </table>
</div>

        </div>

    </div>
</section>