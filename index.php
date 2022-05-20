
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Регистрация</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
  <script src="ajax.js"></script>
</head>
<body>
<div id="form-box">
<form method="post" id="register_form" action="">
    <span id="errors"></span>
<div class="mb-3">
    <label for="NameInput" class="form-label">Имя</label>
    <input type="text" name="name" class="form-control" id="NameInput" value="" placeholder="Ваше Имя">
</div>
<div class="mb-3">
    <label for="SurnameInput" class="form-label">Фамилия</label>
    <input type="text" name="surname" class="form-control" id="SurnameInput" placeholder="Ваша Фамилия">
</div>
<div class="mb-3">
    <label for="EmailInput" class="form-label">Электронная почта</label>
    <input type="email" name="email" class="form-control" id="EmailInput" placeholder="example@box.com">
</div>
<div class="mb-3">
    <label for="PasswordInput" class="form-label">Пароль</label>
    <label for="PasswordInput" class="form-label"><small>Не менее 6 символов, одна заглавная буква, одна цифра</small></label>
    <input type="password" name="password" class="form-control" id="PasswordInput" autocomplete="on">
</div>
<div class="mb-3">
    <label for="Password1Input"  class="form-label">Повторите пароль</label>
    <input type="password" name="password1" class="form-control" id="Password1Input" autocomplete="on">
</div>
    <button type="submit" class="btn btn-outline-primary">Регистрация</button>
</form>
</div>
</body>
</html>