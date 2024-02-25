<section class="about" id="about">
    <h1 class="heading">
        <span>about</span> me
    </h1>
    <div class="row">
        <div class="info">
            <h3><span>name : </span> {{ $about->name }}<h3>
                    <h3><span>age : </span> {{ $about->age }} <h3>
                            <h3><span>specialtie : </span> {{ $about->specialtie }} <h3>
                                    <h3><span>language : </span> {{ $about->language }}<h3>
                                            <a href="{{ asset('administrator/files/' . $about->cv) }}"><button
                                                    class="btn"> download CV
                                                    <i class="fas fa-download"></i></button></a>
        </div>
        <div class="counter">

            <div class="box">
                <span>{{ $about->exprience }}+</span>
                <h3>years of exprience</h3>
            </div>
            <div class="box">
                <span>{{ $about->proj_completed }}+</span>
                <h3>project completed</h3>
            </div>
            <div class="box">
                <span>{{ $about->hap_client }}+</span>
                <h3>happy clients</h3>
            </div>

            <div class="box">
                <span>{{ $about->award_won }}+</span>
                <h3>award won</h3>
            </div>
        </div>

    </div>


</section>
