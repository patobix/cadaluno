<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Adicione o CSS fornecido */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .titulo {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .titulo form {
            display: flex;
            flex-wrap: wrap;
        }

        .titulo label {
            width: 100%;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .titulo input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .titulo input[type="date"] {
            padding: 5px;
        }

        .titulo input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .titulo input[type="submit"]:hover {
            background-color: #45a049;
        }

        .titulo button {
            background-color: #2196F3;
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
  
   <div class="titulo">
  <form method="GET" action="crudaluno.php">
    <label for="">nome aluno</label>
     <input type="text" name="nome">
     <label for="">idade</label>
     <input type="text" name="idade">
     <label for="">endereco</label>
     <input type="text" name="endereco">
     <label for="">data de nascimento</label>
     <input type="date" name="datadenacimento">
     <label for="">matricula</label>
     <input type="text" name="matricula">

     <input type="submit" name="cadastrar" value="Cadastrar">
     </form>

     <button class="button"><a href="index.php">Voltar</a></button>
  </div>
</body>
</html>