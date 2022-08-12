<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<?= include 'header.php'?>
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        <form>
          <h1 style="color: white; margin-top: 16%;" >Envie sua mensagem!</h1>
          <div class="form-group" style="margin-top: 9%;">
            <label style="color: white;" for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@empresa.com">
          </div>
          <div class="form-group">
            <label style="color: white;" for="exampleInputPassword1">Nome Completo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label style="color: white;" for="exampleInputPassword1">Mensagem</label>
            <textarea type="text" rows="3" class="form-control" id="exampleInputPassword1" placeholder="..."></textarea>
          </div>

          <button style="margin-top: 3%;" type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
</section>
<h1 style="margin-top:14%;"></h1>
<?= include 'footer.php'?>
