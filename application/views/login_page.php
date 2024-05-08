<!DOCTYPE html>
<html>
<head>
 <title>Login Page</title>
 <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta http-equiv="content-language" content="en-gb">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <style>
   body{
   background-image: url('https://cdn.pixabay.com/photo/2017/05/25/20/06/background-2344222_960_720.png');
   background-size: cover;

  }
  .container .logo {
      position: absolute;
      top: 40px;
      left: 0;
      right: 0;
      margin: 0 auto;
  }
  .container h3 {
      position: absolute;
      top: 150px;
      left: 0;
      right: 0;
      margin: 0 auto;
  }

  .logo {
      display: block;
      background-image: url("logo.jpg");
       background-size: 100%;
      width: 110px;
      height: 110px;
      font-size: 5rem;
      text-align: center;
      border-radius: 50%;
   
  }
  .container{
   max-width: 400px;
   width: auto;
   color: white;
   margin-top: 100px;
   padding: 80px 50px 50px 50px;
   background: rgb(63,94,251);
      background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(193,22,240,1) 100%);
      border-radius: 10px;
      margin-bottom: 100px;
     

  }
  h3{
   text-align: center;
   color: white;
  }
  .btn{
   width: 100%;
   background-color: #8311e6;
   color: white;
  }
  .btn:hover{
   background-color: #1156e6;
   color: white;

  }
  a{
   color: white;
   text-decoration: none;
  }
  a:hover{
   color: black;
   text-decoration: none;

  }
 </style>
</head>
<body>
 <div class="container">
  <div class="logo"> 
  </div>
  <div>
  <form action="<?= site_url('login') ?>" method="POST">

       <h3>Login</h3>
     </div>
  <form>
     <div class="form-group">
       <label>Username</label>
       <input type="text" class="form-control" name="username" >
      
     </div>
     <div class="form-group">
       <label>Password</label>
       <input type="password" class="form-control" name="password">
     </div>
     <div class="form-group">
      <br>
      <button type="submit" class="btn btn-light">Login</button>
     </div>
    </div>
     </div>

  </form>
 </div>

</body>
</html>

      