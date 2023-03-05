@extends('layouts.app')

@section('content')
<div class="bg-img3">

                </div>
@extends('layouts.nav')
<div class="row full section-size">
 <div class="large-6 large-centered medium-8 medium-centered small-10 small-centered columns " style="margin-top: 5%;">



                        <div  id="divInvalido" style="display: none;" data-alert="" class="alert-box alert icon radius">
                            <span class="icon icon-alert-error"></span>
                            El usuario y/o código son incorrectos. Por favor vuelva a intentarlo.

                            <a href="#" class="close">×</a>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">

                                <h1 style="text-align: center; color: white;">Ingreso a Tutoriales</h1>
                                <div class="large-12  medium-12 columns">


                                    <div class="large-12  medium-12 columns">
                                        <label style="color: white;" for="Usuario">E-mail
                                            <!--<input id="Usuario"  type="text"  name=""  required="no"  >-->
                                            <input id="Usuario" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                        </label>
                                       
                              
                                    </div> 




                                    <div class="large-12  medium-12 columns">
                                        <label style="color: white;" for="Password">Contraseña
                                            <input id="Password"  type="password" name="password"  required="no" >
                                        </label>
                                     
                                    </div> 


                                @error('email')
                                    <span id="nameError" class="invalid-feedback" role="alert">
                                        <strong style="color:red !important">{{ $message }}</strong>
                                    </span>
                                @enderror
                                   @error('password')
                                    <span id="nameError"  class="invalid-feedback" role="alert">
                                        <strong style="color:red !important">{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <div class="row">
                                        <div class="large-4 large-centered medium-8 medium-centered small-6 small-centered columns" style="top: 30px;">
                                            <button  class="button default-action" id ="btnIngresar">Ingresar</button>
                                        </div>
                                    </div>

                                </form>



                            </div>
                        </div>

</div>
</div>
@endsection