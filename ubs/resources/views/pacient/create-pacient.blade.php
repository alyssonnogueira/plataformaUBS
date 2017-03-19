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
	    		<input name="name" type="text" class="form-control" id="name"></td>
                    <td><label for="cpf">CPF</label>
	    		<input name="cpf" type="text" class="form-control" id="cpf" ></td></tr>
                    <tr><td><label for="birth">Data de Nascimento</label>
	    		<input name="birth" type="text" class="form-control" id="birth" placeholder="ANO-MES-DIA"></td>
                    <td><label for="rg">RG</label>
	    		<input name="rg" type="text" class="form-control" id="rg"></td></tr>
                    <tr><td><label for="phone">Telefone</label>
	    		<input name="phone" type="text" class="form-control" id="phone"></td>
                    <td><label for="civil_status">Estado Civil</label>
	    		<select name="civil_status" type="text" class="form-control" id="civil_status" >
                            <option value="Casado">Casado</option>
                            <option value="Separado">Separado</option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Viuvo">Viuvo</option>
                        </select></td></tr>
                    <tr><td><label for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email"></td>
                    <td><label for="sus">SUS</label>
	    		<input name="sus" type="text" class="form-control" id="sus" ></td></tr>
                    <tr><td><label for="weight">Peso</label>
	    		<input name="weight" type="text" class="form-control" id="weight"></td>
                    <td><label for="height">Altura</label>
	    		<input name="height" type="text" class="form-control" id="height"></td></tr>
                    <tr><td><label for="skinColor">Cor</label>
	    		<select name="skinColor" type="text" class="form-control" id="skinColor">
                            <option value="Branco">Branco</option>
                            <option value="Negro">Negro</option>
                            <option value="Pardo">Pardo</option>
                        </select></td>
                    <td><label for="locomotionProblem">Problema de locomoção</label>
	    		<select name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
                    <tr><td><label for="bedridden">Acamado</label>
	    		<select name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
                    <td><label for="osteoporosis">Osteoporose</label>
	    		<select name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
                    <tr><td><label for="depression">Depressão</label>
	    		<select name="depression" type="text" class="form-control" id="depression" placeholder="depression">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
                    <td><label for="insanity">Insanidade</label>
                        <select name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
                    <tr><td><label for="needCare">Necessita de cuidados</label>
	    		<select name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
                    <td><label for="armPerimeter">Perímetro do braço</label>
	    		<select name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
                    <tr><td><label for="dm">DM</label>
	    		<input name="dm" type="text" class="form-control" id="dm"></td>
                    <td><label for="has">HAS</label>
	    		<input name="has" type="text" class="form-control" id="has"></td></tr>
                    <tr><td><label for="bookSenior">Caderneta de idoso</label>
	    		<select name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
                    <td><label for="oralHealthRisk">Risco para a saúde bucal</label>
	    		<select name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
                    <tr><td><label for="country">País</label>
	    		<input name="country" type="text" class="form-control" id="country" ></td>
                    <td><label for="state">Estado</label>
                    <select name="state" type="text" class="form-control" id="state"  >
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PE">PE</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="RS">TO</option>
                    </select></td></tr>
                    <tr><td><label for="">Cidade</label>
	    		<input name="city" type="text" class="form-control" id="city"></td>
                    <td><label for="neighboorhood">Bairro</label>
	    		<input name="neighboorhood" type="text" class="form-control" id="neighboorhood" ></td></tr>
                    <tr><td><label for="zip">CEP</label>
	    		<input name="zip" type="text" class="form-control" id="zip" ></td>
                    <td><label for="">Rua</label>
	    		<input name="street" type="text" class="form-control" id="street" ></td></tr>
                    <tr><td><label for="number">Número</label>
                            <input name="number" type="number" class="form-control" id="number" ></td>
                    <td><label for="complement">Complemento</label>
	    		<input name="complement" type="text" class="form-control" id="complement"></td></tr>
	    		<input name="address_id" type="hidden" class="form-control" id="address_id" >
                    <tr><td><label for="ubs_name">Ubs</label>
                        <select name="ubs_name" type="text" class="form-control" id="ubs_name">
                            <?php foreach ($ubses as $key => $value): ?> 
                                <option value="{!! $value->name !!}">{!! $value->name !!}</option>>
                            <?php endforeach; ?>
                        </select></td></tr>
	    		<input name="ubs_id" type="hidden" class="form-control" id="ubs_id" >
                    <tr><td align="center" colspan="2"><button type="submit" class="btn btn-default">Salvar Alteração</button></td></tr>
            </form>
        </table>
    </div>
    @endsection
</body>