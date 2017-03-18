@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
@endif
<head>
 <link rel="stylesheet" href="/css/estilo.css" media="screen" title="no title" charset="utf-8" >
    <script type="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="/js/bootstrap.min.js"></script>
    <style type="text/css">
        .section{
            position:fixed;
            left:0px;
            top: 150px;
            width:100%;
            text-align: center;
        }
        
        
    </style>
</head>
<body>
    <div class="section">
        <table align="center" width=800>
            <form action="{{ url('pacient/store/')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                    <tr><td align="center" colspan="2"><h2>Cadastro de paciente</h2></td></tr>
                    <tr><td><label for="name">Nome</label>
	    		<input name="name" type="text" class="form-control" id="name" placeholder="name"></td>
                    <td><label for="cpf">CPF</label>
	    		<input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf"></td></tr>
                    <tr><td><label for="birth">Data de Nascimento</label>
	    		<input name="birth" type="text" class="form-control" id="birth" placeholder="birth"></td>
                    <td><label for="rg">RG</label>
	    		<input name="rg" type="text" class="form-control" id="rg" placeholder="rg"></td></tr>
                    <tr><td><label for="phone">Telefone</label>
	    		<input name="phone" type="text" class="form-control" id="phone" placeholder="phone"></td>
                    <td><label for="civil_status">Estado Civil</label>
	    		<input name="civil_status" type="text" class="form-control" id="civil_status" placeholder="civil_status"></td></tr>
                    <tr><td><label for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email" placeholder="email" ></td>
                    <td><label for="sus">SUS</label>
	    		<input name="sus" type="text" class="form-control" id="sus" placeholder="sus"></td></tr>
                    <tr><td><label for="weight">Peso</label>
	    		<input name="weight" type="text" class="form-control" id="weight" placeholder="weight"></td>
                    <td><label for="height">Altura</label>
	    		<input name="height" type="text" class="form-control" id="height" placeholder="height"></td></tr>
                    <tr><td><label for="skinColor">Cor</label>
	    		<input name="skinColor" type="text" class="form-control" id="skinColor" placeholder="skinColor"></td>
                    <td><label for="locomotionProblem">Problema de locomoção</label>
	    		<input name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem"></td></tr>
                    <tr><td><label for="bedridden">Acamado</label>
	    		<input name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden"></td>
                    <td><label for="osteoporosis">Osteoporose</label>
	    		<input name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis"></td></tr>
                    <tr><td><label for="depression">Depressão</label>
	    		<input name="depression" type="text" class="form-control" id="depression" placeholder="depression"></td>
                    <td><label for="insanity">Insanidade</label>
	    		<input name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity"></td></tr>
                    <tr><td><label for="needCare">Necessita de cuidados</label>
	    		<input name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare"></td>
                    <td><label for="armPerimeter">Perímetro do braço</label>
	    		<input name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter"></td></tr>
                    <tr><td><label for="dm">DM</label>
	    		<input name="dm" type="text" class="form-control" id="dm" placeholder="dm"></td>
                    <td><label for="has">HAS</label>
	    		<input name="has" type="text" class="form-control" id="has" placeholder="has"></td></tr>
                    <tr><td><label for="bookSenior">Caderneta de idoso</label>
	    		<input name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior"></td>
                    <td><label for="oralHealthRisk">Risco para a saúde bucal</label>
	    		<input name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk"></td></tr>
                    <tr><td><label for="country">País</label>
	    		<input name="country" type="text" class="form-control" id="country" placeholder="country"></td>
                    <td><label for="state">Estado</label>
	    		<input name="state" type="text" class="form-control" id="state" placeholder="state"></td></tr>
                    <tr><td><label for="">Cidade</label>
	    		<input name="city" type="text" class="form-control" id="city" placeholder="city"></td>
                    <td><label for="neighboorhood">Bairro</label>
	    		<input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood"></td></tr>
                    <tr><td><label for="zip">CEP</label>
	    		<input name="zip" type="text" class="form-control" id="zip" placeholder="zip"></td>
                    <td><label for="">Rua</label>
	    		<input name="street" type="text" class="form-control" id="street" placeholder="street"></td></tr>
                    <tr><td><label for="number">Número</label>
	    		<input name="number" type="text" class="form-control" id="number" placeholder="number"></td>
                    <td><label for="complement">Complemento</label>
	    		<input name="complement" type="text" class="form-control" id="complement" placeholder="complement"></td></tr>
	    		<input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id">
                    <tr><td><label for="ubs_name">Ubs</label>
	    		<input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name"></td></tr>
	    		<input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id">
                    <tr><td align="center" colspan="2"><button type="submit" class="btn btn-default">Salvar Alteração</button></td></tr>
            </form>
        </table>
    </div>
    @endsection
</body>