<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>.:Form Login:.</title>
  </head>
  <body>
    <div class="container-fluid" style="margin-top: 15%">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <img class="img mx-auto d-block" src="https://img.freepik.com/free-psd/smartphone-logo-isolated_23-2151232024.jpg?w=740&t=st=1717121996~exp=1717122596~hmac=0bf69d6354646be79addfdf742e4472c159865f38bc5c3d650e72ce507040f0b" width="250" alt="">
                            <div class="form-group"></div>
                                <input type="email" name="email" placeholder="Masukan E-Mail"
                                class="form-control" autofocus required>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Masukan Password"
                                class="form-control" autofocus required> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login</button> 
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>