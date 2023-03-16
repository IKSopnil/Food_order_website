
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Bootstrap JS library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<?php include "panelnavbar.php" ?>
<div class="container">
    <div class="row">

        <div class=" col-md-offset-2">

            <h1 class="text-center my-5">Create post</h1>

            <div class="form-outline">
                <label for="">
                    <h6>Select Category:</h6>
                </label>
                <select id="inputState" name="inputState" class="form-control my-2 text-center justify-content-center w-50">
                   
                    <option value="appetizer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'appetizer') echo 'selected'; ?>>Appetizer</option>
                    <option value="maincourse" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'maincourse') echo 'selected'; ?>>Main Course</option>
                    <option value="dessert" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'dessert') echo 'selected'; ?>>Dessert</option>
                    <option value="beverage" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'beverage') echo 'selected'; ?>>Beverage</option>
                    <option value=""><hr class="dropdown-divider"></option>
                    <option value="offer" id="offer" <?php if (isset($_POST['inputState']) && $_POST['inputState'] === 'offer') echo 'selected'; ?>>Offer</option>
                </select>

                <div class="form-group has-error my-3">
                    <label for="title">Title:<span class="require"></span></label>
                    <input required type="text" class="form-control" name="title" placeholder="write a title name..." />
                </div>

                <div class="form-group my-3">
                    <label for="price">Price:<span class=""></span></label>
                    <input type="number" required placeholder="৳ ৳" class="form-control" name="price" />
                </div>

                <div class="form-group my-3" id="discount_percentage" style="display:none;">
                    <label for="discount">Discount percent (only for offer):<span class=""></span></label>
                    <input type="number" required placeholder="offer percentage %" class="form-control" name="discount" />
                </div>

                <!-- JavaScript/jQuery code to show/hide the discount percentage input field -->
                <script>
                    $(document).ready(function() {
                        $("#inputState").change(function() {
                            if ($(this).val() === "offer") {
                                $("#discount_percentage").show();
                            } else {
                                $("#discount_percentage").hide();
                            }
                        });
                    });
                </script>


                <div class="form-group my-3">
                    <label for="description">Description:</label>
                    <textarea required rows="5" class="form-control" name="description"></textarea>
                </div>
                <div id="footer-left">
                    <label for="file_choose">Upload Image:</label><br>
                    <input type="file" name="file" id="file" class="inputfile" accept='' onchange="fileChange(this)" />
                    <label for="file"><i class="fas fa-paperclip"></i></label>

                </div>


                <div class="form-group my-4 ">
                    <button type="submit" class="btn btn-success mx-4 px-4">
                        Create
                    </button>
                    <button type="reset" class="btn btn-danger px-4">
                        Reset
                    </button>
                </div>

                </form>
            </div>

        </div>
    </div>