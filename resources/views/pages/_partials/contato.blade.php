<div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2 class="text-success">Contato</h2>
    </div>
    <div class="row mt-1">
        <div class="col-lg-4">
            <div class="info">
                <div class="address">
                    <i class="fas fa-map-marked-alt text-white bg-success"></i>
                    <h4>Endereço:</h4>
                    <p>Endereço: Av. Visc. do Rio Branco, 122 - Centro, Feira de Santana - BA, 44026-000</p>
                </div>

                <div class="email">
                    <i class="fas fa-envelope-open-text text-white bg-success"></i>
                    <h4>Email:</h4>
                    <p>contato@correiazezito.com.br</p>
                </div>

                <div class="phone">
                    <i class="fab fa-whatsapp text-white bg-success"></i>
                    <h4>Telefone:</h4>
                    <p>75 98122-2793</p>
                </div>

            </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" action="{{ route('send.email') }}"  role="form" id="form-contatct">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" />

                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" />

                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"  />

                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5"  placeholder="Mensagem"></textarea>

                </div>

                <div class="text-center"> <button type="submit" class="btn btn-success">Enviar mensagem</button></div>
            </form>

        </div>

    </div>

</div>
