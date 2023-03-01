<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ki-khaba</title>
  <link rel="stylesheet" href="style.css">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- google font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
  
  <section class="about">
    <style>
        body {
          background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.4)), url("image/about-page.jpg");		 
          background-size: cover;
	        background-position: center;	        
	        align-items: center;
	        justify-content: center;
        }
        
        h1 {
          font-size: 36px;
          margin-bottom: 20px;
          text-align: center;
          color: white;
        }
        p {
          font-size: 18px;
          line-height: 1.5;
          margin-bottom: 30px;
        
          color: white;
        }
        .quote {
          font-style: italic;
          font-size: 24px;
          text-align: center;
          margin-bottom: 30px;
          color: white;
        }
        .quote-author {
          font-style: normal;
          font-size: 18px;
          text-align: center;
          color: white;
        }
.story {
          font-family: Arial, sans-serif;
          font-size: 16px;
          line-height: 1.5;
          color: #333;
}

.story p {
         margin: 0 0 20px;
}

        
      </style>
    </head>
    <body>
    <?php include 'navbar.php'?>
      <div class="container-fluid">
      <h3 class="text-center" style="color:white;margin-top:3%;">About Us</h3>
          <div style="text-align: center;margin: 5%;">
           
                <p class="container-fluid">At Foodie Delivery, we believe that good food can bring people together and make any day better. That's why we're passionate about delivering delicious meals right to your doorstep, whether you're in the mood for something healthy, indulgent, or anything in between.</p>
        <p>Our team of talented chefs and delivery professionals work hard to bring you the best dining experience possible, from carefully selecting fresh ingredients to ensuring that your food arrives hot and on time. We pride ourselves on our attention to detail and our commitment to customer satisfaction.</p>
        <div class="quote">
          "Food is not just fuel, it's information. It talks to your DNA and tells it what to do."<br>- Dr. Mark Hyman
        </div>
        <div class="quote-author">Join us in the pursuit of delicious, healthy food that speaks to your body and soul.</div>
            </div>
        </div>
        <div>
        <div class="story container">
  <p>Samantha had just arrived home after a long day at work. She was starving and had no energy to cook dinner. She had heard about a new food order website called "Ki-Khaba," and decided to give it a try.</p>

  <p>As she opened the website, she was delighted to see the mouth-watering dishes and the simple and user-friendly interface. She was able to browse through different restaurants and menus with ease, and found a delicious vegetarian platter that caught her eye. She added it to her cart, and the order was quickly processed.</p>

  <p>A few minutes later, Samantha received a notification that her food was on its way. She was impressed by the fast delivery and the regular updates on the progress of her order. As she opened the door, she was greeted by a friendly delivery driver who handed her the piping hot food.</p>

  <p>She quickly opened the box to reveal a beautifully presented platter of fresh and flavorful vegetables, along with aromatic rice and a side of crispy papadum. She took a bite and was blown away by the exquisite flavors and quality of the food.</p>

  <p>Samantha was extremely satisfied with the service she received from "Ki-Khaba" and decided to use the website again in the future. She recommended it to her friends and family, and they too became regular customers. "Ki-Khaba" became a go-to choice for people looking for a hassle-free and delicious food delivery experience, and a perfect solution for busy days and relaxing evenings.</p>
</div>
        </div>
      </div>
  </section>
  <!-- footer-->
  <section >
    <?php include 'footer.php' ?>
  </section>
</body>

</html>