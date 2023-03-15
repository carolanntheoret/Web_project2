<x-layout :title="$title">
        <main class="sectionAdmin">
            <section class="menuAdmin">
            {{-- <a href="{{ url('/disconnect') }}" class="btn btn-primary">Déconnexion</a> --}}
            <div class="user"><p>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
            <p>Admin</p></div>
            <div class="menu">
                <button class="employes"><h2>Staff</h2></button>
                <button class="users"><h2>Users</h2></button>
                <button class="activities"><h2>Activities</h2></button>
                <button class="reservations"><h2>Reservation</h2></div>
            </div>
        </section>
        <section class="listeEmployes">
            <div class="employeSection"><x-liste-admins :users="$users"/></div>
        </section>
        <section class="listeUsers">
            <div class="usersSection"><x-liste-users :employees="$employees"/></div>
        </section>
        <section class="listeActivities">
            <div class="activitiesSection"><x-liste-activities :activities="$activities"/></div>
        </section>
        <section class="listeReservations">
            <div class="reservationSection">Bonjour</div>
        </section>


            <script src="js/main.js" type="module"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        </main>
    </x-layout>
