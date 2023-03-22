<x-layout :title="$title" :actif="$actif">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <main class="w-80 m-auto mt-5">
        <div class="contact-info" style="background-image: url('{{asset('images/blob1.png') }}');">
            <h1>WE'RE HERE</h1>
            <p>1 Circuit Gilles Villeneuve, Montréal, QC H3C 1A9</p>
            <p>+1 450 565 9020</p>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11183.131077394353!2d-73.5414854!3d45.5144514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91b03473b92c9%3A0x46e7ac7562cb8303!2sParc%20Jean-Drapeau!5e0!3m2!1sfr!2sca!4v1679504932932!5m2!1sfr!2sca"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </main>
</x-layout>
