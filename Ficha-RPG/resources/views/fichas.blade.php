<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fichas</title>

        @include('imports.importsHead')

        <style type="text/css">
            
        </style>
    </head>
    <body>
        {{-- BODY START --}}

        <div class="container-fluid min-vh-100 row align-items-center m-0 p-0">
            <div class="container row justify-content-center">
                <button type="button" data-bs-toggle="modal" data-bs-target="#novaFicha" class="btn btn-outline-info" style="width:15rem; height: 13rem;">
                    <i class="bi bi-file-earmark-plus mx-auto my-auto" style="font-size:4rem;"></i>
                </button>
            </div>
            
        </div>

        {{-- MODAL --}}

        <div class="modal fade" id="novaFicha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">NOVA FICHA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="novaficha" method="POST">
                    <div class="modal-body">
                            <div class="mb-3">
                              <label for="nomeFicha" class="form-label">Nome da Ficha</label>
                              <input type="text" class="form-control" id="nomeFicha">
                            </div>
                            <div class="mb-3">
                              <label for="descricaoFicha" class="form-label">Descrição da ficha</label>

                              <input type="" class="form-control" id="descricaoFicha">
                              <div class="form-text"></div>
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary" value="Nova Ficha">
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