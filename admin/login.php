<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <!--font awsesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

  <body>
   
    <div class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #eee;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form class="mb-3 mt-md-4">
                  <h2 class="fw-bold mb-2  ">Admin Login</h2>
                  
                  <p class=" mb-3"> Please enter your Username and password!</p>
                  <div class="mb-3">
                    <label for="username" class="form-label ">Username</label>
                    <input type="name" class="form-control" id="Username" placeholder="name">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                   
                    <div class="input-group">
                  <input type="password" class="form-control" id="password" required>
                  <span class="input-group-text"><i class="fas fa-eye"></i></span>
                </div>
                  </div>
                  
                 
                  <div class="d-grid">
                    <button class="btn btn-outline-dark" type="submit">Login</button>
                  </div>
                </form>
              

              </div>
              
              
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  
  </body>

</html>
<script>
    // Show/hide password toggle
    const togglePassword = document.querySelector('.input-group-text');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>