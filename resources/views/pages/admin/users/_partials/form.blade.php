@csrf
<fieldset> Dados pessoais </fieldset>
<hr>
<div class="form-row">
    <div class="form-group col-12">
        <label for="name">Nome completo</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
               placeholder="Informe o nome completo do usuário" value="{{$user->name ?? old('name')}}">
        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-6">
        <label for="document">CPF</label>
        <input type="text" name="document" class="form-control @error('document') is-invalid @enderror" id="document"
               placeholder="Somente números" value="{{$user->document ?? old('document')}}">

        @error('document')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group col-6">
        <label for="document">Celular</label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
               placeholder="Informe um telefone" value="{{$user->phone ?? old('phone')}}">

        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-4">
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control @error('cep') is-invalid @enderror" id="cep"
               placeholder="Somente números" value="{{$user->cep ?? old('cep')}}" >

        @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group col-6">
        <label for="street">Logradouro</label>
        <input type="text" name="street" class="form-control @error('street') is-invalid @enderror" id="street"
               placeholder="Nome da rua" value="{{$post->street ?? old('street')}}" readonly>

        @error('logradouro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group col-2">
        <label for="number">Nº</label>
        <input type="text" name="number" class="form-control @error('number') is-invalid @enderror" id="number"
               placeholder="Nº" value="{{$user->number ?? old('number')}}" >

        @error('number')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-5">
        <label for="district">Bairro</label>
        <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" id="district"
               placeholder="Informe o CEP do seu endereço" value="{{$user->district ?? old('district')}}" readonly>

        @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group col-5">
        <label for="city">Cidade</label>
        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city"
               placeholder="Nome da cidade" value="{{$user->city ?? old('city')}}" readonly>

        @error('city')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="form-group col-2">
        <label for="state">UF</label>
        <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" id="state" value="{{$user->state ?? old('state')}}" readonly>

        @error('city')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="form-group col-12">
        <label for="complement">Complemento</label>
        <input type="text" name="complement" class="form-control @error('complement') is-invalid @enderror" id="complement" value="{{$user->state ?? old('state')}}">

        @error('city')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>


<fieldset> Dados de acesso</fieldset>
<hr>
<div class="form-row">
    <div class="form-group col-6">
        <label for="email">Email de acesso</label>
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
               placeholder="Informe o email de acesso" >

        @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group col-6">
        <label for="email">Confirmação de Email</label>
        <input type="text" name="email_confirmation" class="form-control @error('email_confirmation') is-invalid @enderror" id="email_confirmation"
               placeholder="Confirme o email">

        @error('logradouro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-6">
        <label for="password">Senha de acesso</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
               placeholder="Informe a senha de acesso" >

        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group col-6">
        <label for="password_confirmation">Confirmação de Senha</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
               placeholder="Confirme a senha de acesso">

        @error('password_confirmation')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
