<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
        .container.contentprin {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 0 auto;
            max-width: 700px;
            margin-top: 10%;
            margin-left: 30%;
            justify-content: center;
        }

        .col-md-2.offset-md-3.btnFomr {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 40px;
            margin-top: 30px;
        }

        form.formSend {
            padding: 30px;
            background: #f6f6f6;
            width: 100%;
            max-width: 550px;
            -webkit-box-shadow: 3px 5px 20px 5px rgba(0, 0, 0, 0.58);
            box-shadow: 1px 0px 3px 0px rgb(0 0 0 / 58%);
        }
    </style>
    <div class="container contentprin">
        <div class="row">

            <form class="formSend">
                <div class="form-group ">

                    <label class="col-md-1 offset-md-1 col-form-label text-md-end" for="fecha_venta">Marca </label>
                    <div class="col-md-10 offset-md-1">
                        <select class="form-control" value="valueSelect" name="nombre_marca" id="nombre_marca" required>
                            <option value=""> Value</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 offset-md-1 col-form-label text-md-end" for="fecha_venta">Cantidad </label>
                    <div class="col-md-10 offset-md-1">
                        <input class="form-control" type="text" name="fecha_venta" value='value2'
                            id="cantidad_venta"><br>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 offset-md-1 col-form-label text-md-end" for="idMarcaFK">Modelo </label>
                    <div class="col-md-10 offset-md-1">
                        <select class="form-control" value="valueSelect" name="fk_modelo" id="fk_modelo" required>
                            <option value="value2">value2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <div class=" row mb-0">
                        <div class="col-md-2 offset-md-3 btnFomr">
                            <input class="btn btn-primary" type="submit" value="Enviar">
                            <a class="btn btn-warning">Volver</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </div>
</body>