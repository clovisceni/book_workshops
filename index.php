<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_Workshops</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</head>
<body>


<div class="fundo">
    <div class="bloco">
        <div class="form">                
        <h1 class="h2 text-white">Agendamento de Oficinas - Cebrac</h1>  


<form class="p-3">

     

    <div class="my-3">
        <label class="form-label text-white">Nome Completo:</label>
        <input class="form-control" type="text" name="f_nome"/> 
    </div>

    <label class="form-label text-white">Cursando</label>
  <select class="form-select" name="f_transporte">
    <option>ANH</option>
    <option>MCC</option>
    <option>INFO</option>
    <option>AAC</option>
    <option>VMG - VMC</option>
    <option>FMC</option>
    <option>ING</option>
    <option>CUIDADOR</option>
  </select>

  <div class="row">
    <div class="my-3 col">
      <label class="form-label text-white">Nascimento: </label>
      <input class="form-control" type="date" name="f_date"/>
    </div>

    <div class="my-3 col">
      <label class="form-label text-white">Telefone: </label>
      <input class="form-control" type="text" name="f_fone"/>
    </div>
  </div>

<div class="my-3">
  <label class="form-label text-white">Oficina</label>
  <select class="form-select" name="f_transporte">
    <option>Oficina 1 - Horário 08:00hs as 09:30</option>
    <option>Oficina 2 - Horário 08:00hs as 09:30</option>
    <option>Oficina 3 - Horário 08:00hs as 09:30</option>
    <option>Oficina 4 - Horário 08:00hs as 09:30</option>
    <option>Oficina 5 - Horário 08:00hs as 09:30</option>
    <option>Oficina 3 - Horário 08:00hs as 09:30</option>
    <option>Oficina 4 - Horário 08:00hs as 09:30</option>
  </select>
</div>


  <input class="btn btn-primary" type="submit" name="btn_Enviar" value="enviar"/>


</form>

        </div>           
    </div>
</div>


<script src="js/script.js"></script>

</body>
</html>