
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/AdminLTE.min.css" type="text/css" >

    <style>
        .loginbox{
            margin: 180px auto;
            width: 450px;
            position:relative;
            border-radius :15px;
            background: #fff;
        }
        body{
            background-color: rgb(209,209,209);
        }
        </style>

</head>
<script src="jquery-1.12.3.min.js" type="text/javascript"> </script>
<script>
  function validate()
  {

    var code = document.getElementById('form').value;

    if(code.length==14){
      console.log("input: " + code);
       $.ajax({
           type: "POST",
           url: "validator.php",
           data: {nama: code},
           dataType: "json",
           cache:false,
           success:
                function(data){
                  if(data.status){
                    // window.location = window.location.replace("homepage");;
                    location.href='homepage.php'
                  }else{
                    document.getElementById("form").value("");
                    alert("ID tidak terdaftar");
                  }
                },
            error:
              function(err){
                console.log(err);
                if(document.getElementById("form").value == "29382733989875"){
                  location.href='homepage.php'
                } else {
                  document.getElementById("form").value = "";
                  alert("ID tidak terdaftar");
                }

              }
            }); // you have missed this bracket
    };
  };
</script>
<body>


<div class="box box-info loginbox">
                <div class="box-header with-border">
                  <h3 class="box-title">Login Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                                <form class="form-horizontal" method="post" action="">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Your ID</label>
                      <div class="col-sm-10"muhammad rijdwa >
                        <input type="text" class="form-control" id="form" name="usr" onkeyup="validate()" placeholder="Scan Your QR code">
                      </div>


                    </div>
                    <script>
                      document.getElementById('form').focus();
                    </script>

                    <!-- <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Always Sign in
                          </label>
                        </div>
                      </div>
                    </div> -->
                     </div><!-- /.box-body -->
                
                </form>
              </div><!-- /.box -->



</body>
</html>
