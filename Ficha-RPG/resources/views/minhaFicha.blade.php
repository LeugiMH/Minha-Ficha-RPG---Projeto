<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ficha Login</title>
        @include('imports.importsHead') 

        <style type="text/css">
            #ficha{
                resize: both;
                overflow: hidden;
                height: 90%;
                width: 50%;
                min-width: 300px;
                min-height: 600px;
                max-width: 100%;
                overflow-y: auto;
            }
            .colapsaPressets{
                position: relative;
                top: 150px;
                left:-50px;
                border-radius: 10px 10px 0 0;
                border: 0;
                transform: rotate(-90deg);
            }
            .dropdown{
                width: 0px !important;
                min-width: 0px !important;
                max-width: 0px !important;
            }
            .add-caixa{
                background: #ccc;
                width: 100%;
                border: 0;
                border-radius: 7px;
                transition: background 300ms;
            }
            .add-caixa:hover{
                background: #ddd;
            }
            .presset{
                width: 100%;
                height:150px;
            }
            .componenteTexto{
                border-bottom: 1px black solid;
            }
            .ComponenteTextoConLegenda{
                border-bottom: 1px black solid;
                display: inline;
            }
        </style>
    </head>
    <body>
        {{-- BODY START --}}

        <div class="container-fluid row min-vh-100 m-0 p-0" style="overflow-x: hidden !important;">
            <div class="container justify-content-center col-lg-9">

                {{-- TÍTULO DA FICHA --}}
                <h1 class="text-center my-3">Ficha</h1>

                {{-- FICHA --}}
                <div class="container p-3 my-3" id="ficha" style="background: #eee;">
                    <button class="p-1 my-2 add-caixa"  data-bs-toggle="modal" data-bs-target="#addComponente">
                        <i class="bi bi-plus-circle" style="font-size: 2rem"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg p-0 " id="sideBar" style="background: #eee; transition: 500ms linear;">
                <button type="button" class=" colapsaPressets p-2 m-0" style="width:fit-content; background: #eee;">
                    Pressets
                </button>
                <div class="sideContent p-3 container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#novaFicha" class="col btn btn-outline-info presset">
                                Presset 1
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#novaFicha" class="col btn btn-outline-info presset">
                                Presset 2
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAIS --}}

        {{-- MODAL ADD COMPONENTE --}}

        <div class="modal fade" id="addComponente" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adicionar componente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row p-3">
                        <div class="col-6">
                            <button type="button" id="addComponenteTexto" data-bs-dismiss="modal" class="col btn btn-outline-info presset">
                                Texto
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="button" id="addComponenteTextoComLegenda" data-bs-dismiss="modal" class="col btn btn-outline-info presset">
                                Texto com Legenda
                            </button>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" value="Nova Mesa">
                </div>
            </div>
            </div>
        </div>

        {{-- /MODAL ADD COMPONENTE --}}

        {{-- BODY END --}}
        @include('imports.importsBodyEnd')
        <script type="text/javascript">

            // faz aparecer ou não a sidebar
            $(".colapsaPressets").click(function() {
                $("#sideBar").toggleClass("dropdown");
        
                $(".sideContent").toggleClass("d-none");
                
            });

            // add componente
            $("#addComponenteTexto").click(function(e) {
                var elemento = "<p class='m-0 componenteTexto m-2' contenteditable='true'></p>";
                $(".add-caixa").before(elemento);
                console.log(e);
            });
            $("#addComponenteTextoComLegenda").click(function(e) {
                var elemento1 = "<p class='col-3 m-0 my-2 componenteTexto h5' id='componenteTextoComLegenda' contenteditable='true' style='grid-area:L;'></p>";
                var elemento2 = "{{--<input type='range' id='spacer' class='col p-0' max='100' min='0' step='5' onchange='resize()' style='grid-area:R;'>--}}";
                var elemento3 = "<p class='col m-0 my-2 componenteTexto' contenteditable='true' style='grid-area:T;'></p>";
                $(".add-caixa").before("<div class='row p-0 m-0'>" + elemento1 + elemento2 + elemento3 + "</div>");
            });

           function resize()
           {
                var tamanho = $('#spacer').val();

                console.log(tamanho);
                $("#componenteTextoComLegenda").css("width", tamanho + "%");
           } 


        </script>
    </body>
</html>