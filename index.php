<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>PDFReader</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="reader.php" method="post" enctype="multipart/form-data">
                            <h5 class="mb-3">Leitor de PDF</h5>
                            <div class="col-sm-8 offset-sm-1 mt-5">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile" name="file">
                                </div>
                            </div>                            
                            <input type="submit" class="btn btn-primary float-end" value="Gerar TXT">
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</body>
</html>