<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        select {
  appearance: none; /* remove estilo padrão */
  -webkit-appearance: none;
  -moz-appearance: none;

  background-color: #1e1e2f;
  color: #fff;
  padding: 10px 15px;
  border: 2px solid #4cafef;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  outline: none;

  /* setinha personalizada */
  background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='20' width='20' viewBox='0 0 20 20'><path d='M5 7l5 5 5-5H5z'/></svg>");
  background-repeat: no-repeat;
  background-position: right 10px center;
  background-size: 20px;
}

select:hover {
  border-color: #00e1ff;
}

select:focus {
  border-color: #ff4081;
  box-shadow: 0 0 8px rgba(255, 64, 129, 0.6);
}
option {
  background: #1e1e2f;
  color: #fff;
  padding: 10px;
}

    </style>

</head>
<body>
    
    <center>
        <h2>Escolha uma turma</h2>
    <select>
<option value="1MIN">1MIN</option>
<option value="2MIN">2MIN</option>
<option value="3MIN">3MIN</option>
<option value="1MAM">1MAM</option>
<option value="2MAM">2MAM</option>
<option value="3MAM">3MAM</option>
<option value="1MAD">1MAD</option>
<option value="2MAD">2MAD</option>
<option value="3MAD">3MAD</option>
    </select><br>
    <br>
    <button type="submit">Entrar</button>
</center>
</body>
</html>