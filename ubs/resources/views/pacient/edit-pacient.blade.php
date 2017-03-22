@extends('layouts.inside')

@section('content')
@if (session('erro'))
  	<div class="alert alert-danger">
  		{{ session('erro')}}
  	</div>
  @endif

<body>

<form action="{{ url('pacient/edit/'.$pacient->person_pacient)}}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <div class="section">
    <table align="center" width=800>
        <tr><td align="center" colspan="2"><h2>Editar paciente</h2></td></tr>
                        <tr><td><label for="name">Nome</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{!! $pacient->name !!}"></td>
	    		<td><label for="cpf">CPF</label>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="cpf" value="{!! $pacient->cpf !!}"></td></tr>
	    		<tr><td><label for="birth">Data de Nascimento</label>
                            <input name="birth" type="text" class="form-control" id="birth" placeholder="birth" value="{!! $pacient->birth !!}"></td>
                        <td><label for="rg">RG</label>
                            <input name="rg" type="text" class="form-control" id="rg" placeholder="rg" value="{!! $pacient->rg !!}"></td></tr>
	    		<tr><td><label for="phone">Telefone</label>
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{!! $pacient->phone !!}"></td>
	    		<td><label for="civil_status">Estado Civil</label>
                            <select name="civil_status" type="text" class="form-control" id="civil_status" >
                                <option value="Casado">Casado</option>
                                <option value="Separado">Separado</option>
                                <option value="Solteiro">Solteiro</option>
                                <option value="Viuvo">Viuvo</option>
                            </select></td></tr>
                        <input name="email" type="hidden" class="form-control" id="email" placeholder="email" value="{!! $pacient->email !!}">
	    		<tr><td><label for="sus">SUS</label>
                            <input name="sus" type="text" class="form-control" id="sus" placeholder="sus" value="{!! $pacient->sus !!}"></td>
	    		<td><label for="weight">Peso</label>
                            <input name="weight" type="text" class="form-control" id="weight" placeholder="weight" value="{!! $pacient->weight !!}"></td></tr>
	    		<tr><td><label for="height">Altura</label>
                            <input name="height" type="text" class="form-control" id="height" placeholder="height" value="{!! $pacient->height !!}"></td>
                        <td><label for="skinColor">Cor</label>
                            <select name="skinColor" type="text" class="form-control" id="skinColor">
                                <option value="Branco">Branco</option>
                                <option value="Negro">Negro</option>
                                <option value="Pardo">Pardo</option>
                            </select></td></tr>
	    		<tr><td><label for="locomotionProblem">Problema de locomoção</label>
	    		<select name="locomotionProblem" type="text" class="form-control" id="locomotionProblem" placeholder="locomotionProblem">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
                        <td><label for="bedridden">Acamado</label>
	    		<select name="bedridden" type="text" class="form-control" id="bedridden" placeholder="bedridden">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
	    		<tr><td><label for="osteoporosis">Osteoporose</label>
	    		<select name="osteoporosis" type="text" class="form-control" id="osteoporosis" placeholder="osteoporosis">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
  			<td><label for="depression">Depressão</label>
	    		<select name="depression" type="text" class="form-control" id="depression" placeholder="depression">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
  			<tr><td><label for="insanity">Insanidade</label>
                        <select name="insanity" type="text" class="form-control" id="insanity" placeholder="insanity">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
	    		<td><label for="needCare">Necessita de cuidados</label>
	    		<select name="needCare" type="text" class="form-control" id="needCare" placeholder="needCare">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
	    		<tr><td><label for="armPerimeter">Perímetro do braço</label>
	    		<select name="armPerimeter" type="text" class="form-control" id="armPerimeter" placeholder="armPerimeter">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
  			<td><label for="dm">DM</label>
                            <input name="dm" type="text" class="form-control" id="dm" placeholder="dm" value="{!! $pacient->dm !!}"></td></tr>
  			<tr><td><label for="has">HAS</label>
                            <input name="has" type="text" class="form-control" id="has" placeholder="has" value="{!! $pacient->has !!}"></td>
  			<td><label for="bookSenior">Caderneta de idoso</label>
	    		<select name="bookSenior" type="text" class="form-control" id="bookSenior" placeholder="bookSenior">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td></tr>
  			<tr><td><label for="oralHealthRisk">Risco para a saúde bucal</label>
	    		<select name="oralHealthRisk" type="text" class="form-control" id="oralHealthRisk" placeholder="oralHealthRisk">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select></td>
  			<td><label for="country">País</label>
                            <input name="country" type="text" class="form-control" id="country" placeholder="country" value="{!! $pacient->country !!}"></td></tr>
  			<tr><td><label for="state">Estado</label>
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
                            </select></td>
  			<td><label for="">Cidade</label>
                            <input name="city" type="text" class="form-control" id="city" placeholder="city" value="{!! $pacient->city !!}"></td></tr>
	    		<tr><td><label for="neighboorhood">Bairro</label>
                            <input name="neighboorhood" type="text" class="form-control" id="neighboorhood" placeholder="neighboorhood" value="{!! $pacient->neighboorhood !!}"></td>
  			<td><label for="zip">CEP</label>
                            <input name="zip" type="text" class="form-control" id="zip" placeholder="zip" value="{!! $pacient->zip !!}"></td></tr>
  			<tr><td><label for="">Rua</label>
                            <input name="street" type="text" class="form-control" id="street" placeholder="street" value="{!! $pacient->street !!}"></td>
  			<td><label for="number">Número</label>
                            <input name="number" type="text" class="form-control" id="number" placeholder="number" value="{!! $pacient->number !!}"></td></tr>
  			<tr><td><label for="complement">Complemento</label>
                            <input name="complement" type="text" class="form-control" id="complement" placeholder="complement" value="{!! $pacient->complement !!}"></td></tr>
                            <input name="address_id" type="hidden" class="form-control" id="address_id" placeholder="address_id" value="{!! $pacient->id !!}"></td>
			<td><label for="ubs_name">Ubs</label>
                            <input name="ubs_name" type="text" class="form-control" id="ubs_name" placeholder="ubs_name" value="{!! $pacient->ubs_name !!}"></td></tr>
                            <input name="ubs_id" type="hidden" class="form-control" id="ubs_id" placeholder="ubs_id" value="{!! $pacient->ubs_id !!}">
                        <tr><td align="center" colspan="2"><button type="submit" class="btn btn-default">Salvar Alteração</button></td></tr>
                </table>
    </div>
</form>
</body>
@endsection
