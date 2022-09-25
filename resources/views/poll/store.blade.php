@extends('poll.template')

@section('content')
    <h1 class="color-red text-uppercase text-center mb-5"><b>El reto Del arroz americano  2022</b></h1>


    <div class="container mb-5">


            <form class="form" method="GET" action="{{ url('/store') }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Datos Personales</legend>
                    <div class="form-group">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('name') }}</div>
                        @endif
                        <label for="inputName">Nombre:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="einputEmail">Email:</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputPhone">Teléfono:</label>
                                    <input type="text" name="phone"  class="form-control">
                                </div>
                            </div>
                        </div>
                </fieldset>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Encuesta para Participantes</legend>

                <div class="form-group">
                        @if ($errors->has('knowRiceUSA'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('knowRiceUSA') }}</div>
                        @endif
                        <label for="knowRiceUSA">1.- Antes de participar en esta actividad, conocía sobre el arroz de los Estados Unidos:</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="knowRiceUSA" value="si" required>
                            <label class="form-check-label" for="knowRiceUSA-1">
                               a) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="knowRiceUSA" value="no" required>
                            <label class="form-check-label" for="knowRiceUSA-2">
                               b) No
                            </label>
                        </div>
                    </div>


                <div class="form-group">
                        @if ($errors->has('originRiceMexico'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('originRiceMexico') }}</div>
                        @endif
                        <label for="originRiceMexico">2.- ¿Conoce usted sobre los diferentes orígenes del arroz que se consumen en México?</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input originRiceMexico" type="radio" name="originRiceMexico" value="si" required>
                            <label class="form-check-label" for="originRiceMexico-1">
                                c) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input originRiceMexico" type="radio" name="originRiceMexico" value="no" required>
                            <label class="form-check-label" for="originRiceMexico-2">
                                d) No
                            </label>
                        </div>
                    </div>

                <div class="form-group">
                        @if ($errors->has('whichOriginDoYouPrefer'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('whichOriginDoYouPrefer') }}</div>
                        @endif
                        <label for="whichOriginDoYouPrefer">3.- Si conoce sobre los orígenes del arroz, ¿Cuál origen prefiere?</label>
                        <br/>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="whichOriginDoYouPrefer" value="Estados Unidos">
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                e) Estados Unidos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="whichOriginDoYouPrefer" value="Paraguay" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-2">
                                f) Paraguay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input whichOriginDoYouPrefer" type="radio" name="whichOriginDoYouPrefer" value="Uruguay" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                g) Uruguay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input whichOriginDoYouPrefer" type="radio" name="whichOriginDoYouPrefer" value="Argentina" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                h) Argentina
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input whichOriginDoYouPrefer" type="radio" name="whichOriginDoYouPrefer" value="Brasil" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                i) Brasil
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="whichOriginDoYouPrefer" value="México" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                j) México
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="whichOriginDoYouPrefer" value="Otro" required>
                            <label class="form-check-label" for="whichOriginDoYouPrefer-1">
                                k) Otro, (indique)
                            </label>
                            <input class="form-control" type="text" name="whichOriginDoYouPreferOther" value="" style="display: none;">
                        </div>
                    </div>


                    <div class="form-group">
                        @if ($errors->has('whyOriginDoYouPrefer'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('whyOriginDoYouPrefer') }}</div>
                        @endif
                        <label for="whyOriginDoYouPrefer">4.- ¿Por qué prefiere ese origen? (elija todas las que apliquen)</label>
                        <br/>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="whyOriginDoYouPrefer[]" value="Más calidad">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-1">
                                a) Más calidad
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="whyOriginDoYouPrefer[]" value="Mejor precio">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-2">
                                b) Mejor precio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="whyOriginDoYouPrefer[]" value="Siempre está disponible">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-1">
                                c) Siempre está disponible
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="whyOriginDoYouPrefer[]" value="Es nacional">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-1">
                                d) Es nacional
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="whyOriginDoYouPrefer[]" value="Las condiciones de venta que ofrece el suplidor">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-1">
                                e) Las condiciones de venta que ofrece el suplidor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input whyOriginDoYouPreferOther" type="checkbox" name="whyOriginDoYouPrefer[]" value="Otro">
                            <label class="form-check-label" for="whyOriginDoYouPrefer-1">
                                f) Otro, (indique)
                            </label>
                            <input class="form-control" type="text" name="whyOriginDoYouPreferOther" value="" style="display: none;">

                        </div>
                    </div>


                    <div class="form-group">
                        @if ($errors->has('afterParticipate'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('afterParticipate') }}</div>
                        @endif
                        <label for="afterParticipate">5.- Después de haber participado en esta actividad aumento mi conocimiento sobre los beneficios para la salud, la facilidad de cocción, los atributos de versatilidad y las prácticas de producción sostenible del arroz estadounidense.</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="afterParticipate" value="si" required>
                            <label class="form-check-label" for="afterParticipate-1">
                                a) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="afterParticipate" value="no" required>
                            <label class="form-check-label" for="afterParticipate-2">
                                b) No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        @if ($errors->has('willingBuyAmericanRice'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('willingBuyAmericanRice') }}</div>
                        @endif
                        <label for="willingBuyAmericanRice">6.- Estoy dispuesto a comprar arroz estadounidense después de participar en esta actividad desarrollada por USA Rice:</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="willingBuyAmericanRice" value="si" required>
                            <label class="form-check-label" for="willingBuyAmericanRice-1">
                                a) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="willingBuyAmericanRice" value="no" required>
                            <label class="form-check-label" for="willingBuyAmericanRice-2">
                                b) No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        @if ($errors->has('willingTryNewRecipes'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('willingTryNewRecipes') }}</div>
                        @endif
                        <label for="willingTryNewRecipes">7.- Estoy dispuesto a probar nuevas recetas y aumentar la frecuencia de consumo de arroz en casa después de participar en esta actividad desarrollada por USA Rice:</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="willingTryNewRecipes" value="si" required>
                            <label class="form-check-label" for="willingTryNewRecipes-1">
                                a) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="willingTryNewRecipes" value="no" required>
                            <label class="form-check-label" for="willingTryNewRecipes-2">
                                b) No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        @if ($errors->has('beforeActivation'))
                            <div class="alert alert-danger" role="alert"> {{ $errors->first('beforeActivation') }}</div>
                        @endif
                        <label for="beforeActivation">8.- Antes de la activación, ¿Conocías como identificar el origen del Arroz?</label>
                        <br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="beforeActivation" value="si" required>
                            <label class="form-check-label" for="beforeActivation-1">
                                a) Sí
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="beforeActivation" value="no" required>
                            <label class="form-check-label" for="beforeActivation-2">
                                b) No
                            </label>
                        </div>
                    </div>

                </fieldset>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-blue" style="width: 150px">Enviar</button>

                </div>

            </form>

</div>

@stop

@section('script')
<script>
    $(document).ready(function(){

        $(".originRiceMexico").click(function(e){
            if( $('input[name=originRiceMexico]:checked').val() === 'no'){
                $('input[name=whichOriginDoYouPrefer]').attr("disabled",true);
                $('input[name=whichOriginDoYouPrefer]').attr("required",false);
            }else{
                $('input[name=whichOriginDoYouPrefer]').attr("disabled",false);
                $('input[name=whichOriginDoYouPrefer]').attr("required",true);
            }


        });

        $("input[name=whichOriginDoYouPrefer]").click(function(e){
            if( $('input[name=whichOriginDoYouPrefer]:checked').val() === 'Otro'){
                $('input[name=whichOriginDoYouPreferOther]').show();
            }else{
                $('input[name=whichOriginDoYouPreferOther]').hide();
            }
        });


        $(".whyOriginDoYouPreferOther").click(function(e){
            if( $('.whyOriginDoYouPreferOther:checked').val() === 'Otro'){
                $('input[name=whyOriginDoYouPreferOther]').show();
            }else{
                $('input[name=whyOriginDoYouPreferOther]').hide();
            }
        });

    });
</script>
@stop