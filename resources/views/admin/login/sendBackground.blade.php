<div class="enviar-background-content black-bg-opacity item-fixed full-width-full-height z-index-2 hidden">

    <div class="item-full-absolute-align enviar-background-box">
        <div class="enviar-background-form bgc-white p-20 bd">
            <div class="enviar-background-content-close cursor-pointer text-right font-cursive">X</div>
            Mostre-nos seu cantinho de estudos! Pode acontecer dele vir parar na tela de login para todos verem.
            <div class="form-group">
                {!! Form::open([
                        'action' => ['UserController@store'],
                        'files' => true
                    ])
                !!}

                {!! Form::myFile('foto', '') !!}

                <button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>