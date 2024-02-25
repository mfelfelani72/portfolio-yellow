<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> me</h1>
    <div class="row">
        <div class="content">
            <h3 class="title">contact info</h3>
            <div class="info">
                <h3><i class="fas fa-envelope"></i>
                    mfelfelani72@gmail.com</h3>
                <h3><i class="fas fa-phone"></i>
                    +123-456-789</h3>
                <h3><i class="fas fa-phone"></i>
                    +111-222-333</h3>
                <h3><i class="fas fa-map-marked-alt"></i>
                    yerevan, armenia</h3>
            </div>
        </div>

        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" placeholder="name" class="box" name="name">
            <input type="email" placeholder="email" class="box" name="email">
            <input type="text" placeholder="subject" class="box" name="subject">
            <textarea name="description" id="" cols="30" rows="10" class="box message" placeholder message></textarea>
            <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>
</section>
