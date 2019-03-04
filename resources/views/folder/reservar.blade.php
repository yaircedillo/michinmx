
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6 animate-box {{ $errors->has('name')  ? 'has-error' : '' }}" >
                                    <div class="form-group">
                                            {!!Form::label('Nombre Completo.')!!}
                                        
                                        <div class="form-field">
                                             {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Coloca tu nombre completo aquí'])!!}
                                        
                                        </div>
                                        {!! $errors->first('name','<span class="text-danger">:message</span>')!!}
                                    </div>
                                </div>

                                <div class="col-md-6 animate-box {{ $errors->has('email')  ? 'has-error' : '' }}">
                                    <div class="form-group">
                                            {!!Form::label('Correo Electronico')!!}
                                        
                                        <div class="form-field">
                                            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com'])!!}
                                            
                                        </div>
                                        {!! $errors->first('email','<span class="text-danger">:message</span>')!!}
                                    </div>
                                </div>

                                <div class="col-md-6 animate-box {{ $errors->has('phone')  ? 'has-error' : '' }}">
                                    <div class="form-group">
                                            {!!Form::label('Telefono')!!}
                                        
                                        <div class="form-field">
                                            {!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Telefono'])!!}
                                        </div>
                                        {!! $errors->first('phone','<span class="text-danger">:message</span>')!!}
                                    </div>
                                </div>

                                <div class="col-md-6 animate-box  {{ $errors->has('date')  ? 'has-error' : '' }}">
                                        <div class="form-group">
                                             {!!Form::label('Fecha')!!}
                                               <div class="form-field">
                                                
                                                {!!Form::date('date',null,['class'=>'form-control ', 'placeholder'=>'Fecha'])!!}
                                            </div>
                                            {!! $errors->first('date','<span class="text-danger">:message</span>')!!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 animate-box {{ $errors->has('time')  ? 'has-error' : '' }}">
                                            <div class="form-group">
                                                 {!!Form::label('Hora')!!}
                                                
                                                <div class="form-field">
                                                    <i class="icon icon-arrow-down3"></i>
                                               

                                                    <select name="time" id="time" class="form-control">
                                                        <option style="color:#000000" value="9:30am">8:30am</option>
                                                        <option style="color:#000000" value="9:30am">9:00am</option>
                                                        <option style="color:#000000" value="9:30am">9:30am</option>
                                                        <option style="color:#000000" value="10:00am">10:00am</option>
                                                        <option style="color:#000000" value="10:30am">10:30am</option>
                                                        <option style="color:#000000" value="11:00am">11:00am</option>
                                                        <option style="color:#000000" value="11:30am">11:30am</option>
                                                        <option style="color:#000000" value="12:00am">12:00am</option>
                                                        <option style="color:#000000" value="12:30am">12:30am</option>
                                                        <option style="color:#000000" value="1:00pm">1:00pm</option>
                                                        <option style="color:#000000" value="1:30pm">1:30pm</option>
                                                        <option style="color:#000000" value="2:00pm">2:00pm</option>
                                                        <option style="color:#000000" value="2:30pm">2:30pm</option>
                                                        <option style="color:#000000" value="3:00pm">3:00pm</option>
                                                        <option style="color:#000000" value="3:30pm">3:30pm</option>
                                                        <option style="color:#000000" value="4:00pm">4:00pm</option>
                                                        <option style="color:#000000" value="4:30pm">4:30pm</option>
                                                        <option style="color:#000000" value="5:00pm">5:00pm</option>
                                                        <option style="color:#000000" value="5:30pm">5:30pm</option>
                                                       
                                                      
                                                    </select>
                                                </div>
                                                {!! $errors->first('time','<span class="text-danger">:message</span>')!!}
                                            </div>
                                        </div>

                                        <div class="col-md-6 animate-box {{ $errors->has('people')  ? 'has-error' : '' }}">
                                                <div class="form-group">
                                                        {!!Form::label('Numero de personas')!!}
                                                
                                                    <div class="form-field">
                                                        <i class="icon icon-arrow-down3"></i>
                                                        <select name="people" id="people" class="form-control">
                                                            <option style="color:#000000" value="1">1</option>
                                                            <option style="color:#000000" value="2">2</option>
                                                            <option style="color:#000000" value="3">3</option>
                                                            <option style="color:#000000" value="4">4</option>
                                                            <option style="color:#000000" value="5+">5+</option>
                                                        </select>
                                                    </div>
                                                    {!! $errors->first('people','<span class="text-danger">:message</span>')!!}
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
                          