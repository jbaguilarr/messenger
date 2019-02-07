@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-3">
                @if($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @else
                <b-alert show>
                    Por favor ingresa tus datos:
                </b-alert>
                @endif
                <b-form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                          <b-form-group label="Nombre" label-for="name">
                            <b-form-input id="name"
                                          type="text"
                                          name="name"
                                          value="{{ old('name') }}" 
                                          required autofocus>
                            </b-form-input>
                          </b-form-group>
                         <b-form-group label="Correo electronico:" label-for="email"
                                        description="No compartiremos su correo">
                            <b-form-input id="email"
                                          type="email"
                                          name="email"
                                          value="{{ old('email') }}" 
                                          required                                      
                                          placeholder="josebrunoaguilar@gmail.com">
                            </b-form-input>
                          </b-form-group>
                         <b-form-group label="Contrasena:" label-for="password">
                            <b-form-input id="password"
                                          type="password"
                                          name="password"
                                          required>
                            </b-form-input>
                          </b-form-group>  
                           <b-form-group label="Confirmar Contrasena:" label-for="password_confirmation">
                            <b-form-input id="password_confirmation"
                                          type="password"
                                          name="password_confirmation"
                                          required>
                            </b-form-input>
                          </b-form-group> 
                         <b-button type="submit" variant="primary">
                            Confirmar registro
                         </b-button>
                         <b-button href="{{ route('login') }}" variant="link">
                             ya te has registrado
                         </b-button>   

                    </b-form>
            </b-card>
        
        </b-col>
    </b-row>
</b-container>
@endsection
