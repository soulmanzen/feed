<html>
<head>
    <title>Тестовая форма</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="styles.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
            <h2>Тестовая форма</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" id="input1" placeholder="Ваше имя..."/>
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Фамилия...</label>
                <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" id="input1" placeholder="Ваша фамилия"/>
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="input1" placeholder="E-Mail"/>
                </div>
            </div>

            <div class="form-group" class="radio">
                <label for="input1" class="col-sm-2 control-label">Пол</label>
                <div class="col-sm-10">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Мужской
                    </label>
                    <label>
                        <input type="radio" name="gender" id="optionsRadios1" value="female"> Женский
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Возраст</label>
                <div class="col-sm-10">
                    <select name="age" class="form-control">
                        <option>Возраст</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Отправить"/>
        </form>
    </div>
</div>
</body>
</html>