@extends('master/HeaderFooter')

@section('content')
    
<div class="row" style="padding-top: 150px">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        
        <div class="card" style="width: 57rem;">
            <div class="card-header">
              <h3>LISTA DE RESTAURANTES</h3>
            </div>
            <ul class="list-group list-group-flush">
            @if (count($dados)==0)   
                <p class="alert alert-danger text-center"> Nenhum restaurante foi encontrado.</p>
                    </ul>
                </div>
            @else

                @foreach ($dados as $restaurante)
                    
            
            <li class="list-group-item">
                <div class=" row">
                    <div class = col-md-6>
                   <a href="#"> {{  $restaurante->nome_restaurante  }}</a>
                    </div>
                    <div class=" col-md-6">
                        {{  $restaurante->descricao  }}
                    </div>
                </div>
            </li>
            @endforeach

            @endif
            </ul>
        </div>
        
    </div>
</div>


@endsection