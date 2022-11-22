 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Corona Admin</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="<?= base_url('dashboard/login/materialdesignicons.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('dashboard/login/style.css') ?>">

 </head>

 <body>

   <style>
     .auth.login-bg {
       background: url("<?= base_url('dashboard/login/login_image.jpg') ?>");
       background-size: cover;
     }
   </style>

   <div class="container-scroller">
     <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="row w-100 m-0">
         <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
           <div class="card col-lg-4 mx-auto">
             <div class="card-body px-5 py-5">
               <h3 class="card-title text-left mb-3">Login</h3>
               <form action="<?= base_url('auth/login') ?>" method="post" accept-charset="utf-8">
                 <div class="form-group">
                   <label>Email address</label>
                   <input type="email" id="identity" name="identity" class="form-control p_input" autofocus>
                 </div>
                 <div class="form-group">
                   <label>Password</label>
                   <input type="password" id="password" name="password" class="form-control p_input">
                 </div>

                 <div class="text-center mt-4">
                   <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                 </div>


               </form>
             </div>
           </div>
         </div>
         <!-- content-wrapper ends -->
       </div>
       <!-- row ends -->
     </div>
     <!-- page-body-wrapper ends -->
   </div>
 </body>

 </html>