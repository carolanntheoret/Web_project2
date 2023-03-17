<x-layout :title="$title">
        <main class="sectionAdmin">
            <section class="menuAdmin">
            {{-- <a href="{{ url('/disconnect') }}" class="btn btn-primary">Déconnexion</a> --}}
            <div class="user"><h2>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h2>
            <h3>Admin</h3></div>
            <div class="menu">
                <button class="employes"><h2>Staff</h2></button>
                <button class="users"><h2>Users</h2></button>
                <button class="activities"><h2>Activities</h2></button>
                <button class="reservations"><h2>Reservation</h2></div>
            </div>
            </section>
                <section class="listEmployes">
                    <div class="sectionName"><h3>Admin</h3></div>
                    <div class="employeSection"><x-liste-admins :users="$users"/></div>
                </section>
                <section class="listUsers">
                    <div class="sectionName"><h3>Employees</h3></div>
                    <div class="usersSection"><x-liste-users :employees="$employees"/></div>
                </section>
                <section class="listActivities">
                    <div class="sectionName"><h3>Activities</h3></div>
                    <div class="activitiesSection"><x-liste-activities :activities="$activities"/></div>
                </section>
                <section class="listReservations">

                <div class="reservationSection">
                    <div class="sectionMember">
                        <div class="titleMember"><h3>Membres</h3></div>
                        <div class="listMembers" ><x-liste-members :employees="$employees"/></div>
                    </div>
                    <div class="sectionReservation">
                        <div class="titleReservation"><h3>Reservations</h3></div>
                        <div class="listReservations">bonjour</div>
                    </div>
                </div>
            </section>


            <script src="js/main.js" type="module"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        </main>
    </x-layout>
