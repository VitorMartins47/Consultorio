@extends('layouts.main')
@section('content')
<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Agendar uma Consulta</h2>
                            
                                <form role="form" action="{{ route('consultasAgendadas') }}" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="fone" id="fone" class="form-control" placeholder="15997482928">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="date" name="data" id="data" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="mensagem" name="mensagem" placeholder="Mensagem adicional"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Agendar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

@endsection