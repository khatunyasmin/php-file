<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
#f0{
     margin-left:350px;padding:65px;border:1px solid #00ffbf;border-width:15px;background-color:#D9CE52;
}
#o1{
    padding:40px;color:#9B2335;font-size:20px;font-family:Arial;
}
.container{
    cursor: pointer;
}
</style>
</head>
            <body>
            

    <div class="container" id="o1">
        <div class="row">
            <div class="col-sm-5" id="f0">
                <form action ="data.php" method="POST">
                    <div class="form-group">
                        <label for="">NAME</label>
                        <input type="text" name="f1" class="form-control">
                              </div>

                        <div class="form-group">
                        <label for="">AGE</label>
                        <input type="number" name="f2" class="form-control">

                           </div>

                       <div class="form-group">
                        <label for="">CONTACT</label>
                        <input type="text" name="f3" class="form-control">
                          </div>
                  <div class="form-group">
                        <label for="">E-MAIL</label>
                        <input type="text" name="f4" class="form-control">
                         </div>
                         <div class="form-group">
                        
                        <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" name="click" type="submit"> SUBMIT </button>
</div>
</form>


</div>
</div>
</div>

</body>

</html>