<div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2 class="text-success">Blog</h2>
        <p>Resumo do que o leitor pode encontrar no blog.</p>
    </div>

    <div class="row">
        @for($i=1; $i<=3; $i++)
        <div class="col-12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
                <img width="100%" src="{{ asset('assets/site/img/correia_zezito_plenario.jpeg') }}"">

                <h4><a href="">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
        </div>
        @endfor


    </div>

</div>
