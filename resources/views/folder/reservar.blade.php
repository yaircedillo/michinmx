

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                    <h2> RESERVAR UNA MESA  </h2>
                    <p>Si un día sientes un vacio ... come es Hambre</p>
                    <p>¿Realiza tu reservación y nosotros te esperamos ?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-12">
                            @if(Session::has('message'))
                            <div class="alert alert-info alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{Session::get('message')}}
                            </div>
                            @endif
                                {!!Form::open(['route'=>'reservacion.store', 'method'=>'POST','class'=>'colorlib-form'])!!}
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                                {!!Form::label('Nombre Completo.')!!}
                                            
                                            <div class="form-field">
                                                 {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Coloca tu nombre completo aquí'])!!}
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                                {!!Form::label('Correo Electronico')!!}
                                            
                                            <div class="form-field">
                                                {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box">
                                        <div class="form-group">
                                                {!!Form::label('Telefono')!!}
                                            
                                            <div class="form-field">
                                                {!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Telefono'])!!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 animate-box">
                                            <div class="form-group">
                                                 {!!Form::label('Fecha')!!}
                                                   <div class="form-field">
                                                    
                                                    {!!Form::date('date',null,['class'=>'form-control ', 'placeholder'=>'Fecha'])!!}
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 animate-box">
                                                <div class="form-group">
                                                     {!!Form::label('Hora')!!}
                                                    
                                                    <div class="form-field">
                                                        <i class="icon icon-arrow-down3"></i>
                                                   

                                                        <select name="time" id="time" class="form-control">
                                                            <option value="9:30am">8:30am</option>
                                                            <option value="9:30am">9:00am</option>
                                                            <option value="9:30am">9:30am</option>
                                                            <option value="10:00am">10:00am</option>
                                                            <option value="10:30am">10:30am</option>
                                                            <option value="11:00am">11:00am</option>
                                                            <option value="11:30am">11:30am</option>
                                                            <option value="12:00am">12:00am</option>
                                                            <option value="12:30am">12:30am</option>
                                                            <option value="1:00pm">1:00pm</option>
                                                            <option value="1:30pm">1:30pm</option>
                                                            <option value="2:00pm">2:00pm</option>
                                                            <option value="2:30pm">2:30pm</option>
                                                            <option value="3:00pm">3:00pm</option>
                                                            <option value="3:30pm">3:30pm</option>
                                                            <option value="4:00pm">4:00pm</option>
                                                            <option value="4:30pm">4:30pm</option>
                                                            <option value="5:00pm">5:00pm</option>
                                                            <option value="5:30pm">5:30pm</option>
                                                           
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 animate-box">
                                                    <div class="form-group">
                                                            {!!Form::label('Numero de personas')!!}
                                                    
                                                        <div class="form-field">
                                                            <i class="icon icon-arrow-down3"></i>
                                                            <select name="people" id="people" class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5+">5+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                   
                                    <div class="col-md-12 animate-box">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-4">
                                                {!!Form::submit('Pedir mesa',[' class'=>'btn btn-primary btn-block'])!!}   
                                     
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                {!!Form::close()!!}
                       </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
  