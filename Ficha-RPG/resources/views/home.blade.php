<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>A Mesa RPG - Home</title>

        @include('imports.importsHead') 

    </head>
    <body>
        {{-- BODY START --}}

        <div class="container-fluid col-8">
            <div class="row bg-dark align-content-center" style="height:20rem;">
                <h1 class="" style="color: white;">A MESA RPG</h1>
            </div>
            <div class="row bg-light pt-3">
                <div class="col-6">
                    <h1 class="">
                        Introdução
                    </h1>
                    <p>
                        Tem como objetivo agilizar o controle de fichas de RPGs de mesa, por meio de uma interface gráfica que permite que os jogadores criem suas fichas de forma modular e personalizável. Que possa ser editada para diversos tipos de mesas e/ ou sistemas.
                    </p>
                </div>
                <div class="col-6">
                    <h1 class="mx-auto">
                        Mesas
                    </h1>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#novaFicha" class="btn btn-outline-info" style="width:7rem; height: 5rem;">
                        <i class="bi bi-file-earmark-plus mx-auto my-auto" style="font-size:3rem;"></i>
                    </button>

                </div>
            </div>
            <a href="fichas">fichas</a>
        </div>

        {{-- MODAL --}}

        <div class="modal fade" id="novaFicha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">NOVA MESA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="novaficha" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nomeMesa" class="form-label">Nome da mesa</label>
                            <input type="text" class="form-control" id="nomeMesa">
                        </div>
                        <div class="mb-3">
                            <label for="descricaoMesa" class="form-label">Descrição da mesa</label>
                            <textarea name="descricaoMesa" id="descricaoMesa" class="form-control" rows="5"></textarea>
                            <div class="form-text">Uma breve história do universo e da missão</div>
                        </div>
                        <div class="mb-3">
                            <label for="sistema">Sistema</label>
                            <input type="text" class="form-control" id="sistema">
                            <div class="form-text">Call of Chtulhu, D&D, </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary" value="Nova Mesa">
                    </div>
                </form>
            </div>
            </div>
        </div>

        {{-- /MODAL --}}

        {{-- BODY END --}}
        @include('imports.importsBodyEnd')
        <script type="text/js">

        </script>
    </body>
</html>