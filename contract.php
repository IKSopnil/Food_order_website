<head>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<?php include "navbar.php" ?>

<style>
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px #ccc;
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #444;
    }

    input[type=text],
    input[type=email],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #444;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
    .contract{
        background-color: #eee;
    }
    .contract_head {
        height: 20vh;
        background-color: #fff;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;

    }
</style>
</head>
<section class="contract d-flex justify-content-center">
    <div class=" text-center   mx-auto">
        <div class="contract_head container text-center my-4 justify-content-center mt-0 pt-5 bg-white" >
            <h3>Contract Us </h3>
            <p>Contact us for any questions or concerns you may have.</p>

        </div>
        
        <div class=" container row bg-white my-5">
        <h3 class="my-5">Message Us</h3>
            <div class="col-lg-6  justify-content-center align-items-center mt-4">
                <p class="my-4">"Thank you for your interest in our company! We would love to hear from you. If you have any questions, comments, or feedback, please don't hesitate to get in touch with us using the form below. One of our representatives will get back to you as soon as possible.</p>
                <p class="my-4">
                Alternatively, you can reach us by phone or email. Our contact information can be found on the right-hand side of this page.
                </p>
                <p class="my-4">
                We value your input and appreciate your business. Thank you for choosing us!
                "</p>
            </div>

            <div class="col-lg-6 justify-content-center my-2 mb-5">
                <div>
                    <form class="text-start">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message ">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <input type="submit" class="my-3" value="Send">
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>
<?php include "footer.php" ?>