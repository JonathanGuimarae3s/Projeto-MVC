<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>


        <div class="container my-5">
            <div class="table-responsive">
                <table class="table table-primary">
                    <a href="form">
                        <button class="btn btn-success">Adicionar artigo</button>
                    </a>

                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">titulo </th>
                            <th scope="col">conteudo</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->dados['artigos'] as $artigo) {
                            extract($artigo); ?>
                            
                            <tr>
            
                                    <td><?= $id ?></td>
                
                                    <td><?= $titulo ?></td>
                                    <td><?= $conteudo ?></td>
                
                                    <td> 
                                        <a href="./editar_artigo?id=<?php echo $id; ?>">
                                            <button class='btn btn-primary'>editar</button>
                                        </a>
                                    </td>
                                    <td> 
                                        <a href="delete?id=<?php echo $id; ?>">
                                            <button class='btn btn-warning'>excluir</button>
                                        </a>
                                    </td>
                                </tr>
                        
                        
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>