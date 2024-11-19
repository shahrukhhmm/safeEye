@include('frontend.component.header')
@include('frontend.component.homeCss')


    <section class="landing_page">
        <div class="paragraph landing-anim">
            <h1>Your Security is Our <span>Top Periority</span></h1>
            <p>Manage your business with ease using our software, offering features like user management, zakat calculation, attendance tracking, inventory management, and branch coordination—all in one powerful solution.</p>
        </div>
        <img src="{{ asset('frontend/images/download.jpeg') }}" alt="">
    </section>
    <section id="services" class="protect">
        <h1 class="card2">How We <span>Help You</span></h1>
        <p class="card2">Our software helps streamline your operations with user management, zakat calculation, attendance tracking, inventory categorization, and branch management, providing efficient tools to simplify and organize your business processes.</p>
        <div class="card-sections">
            <div class="card-sec1">
                <a href="{{ url('/service1') }}">
                    <div class="card-child card1">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2>Zakat</h2>
                        </div>
                        <p>The zakat feature tracks income, calculates zakat, manages payment statuses, and provides
                            branch-specific inventory and zakat details.</p>
                    </div>
                </a>
                <a href="{{ url('/service2') }}">
                    <div class="card-child card2">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2>User Attendence</h2>
                        </div>
                        <p>
                            The attendance feature tracks date, start/end times, breaks, and working hours with a simple
                            start button for accurate logging.</p>
                    </div>
                </a>
            </div>
            <div class="card-sec2">
                <a href="{{ url('/service3') }}">
                    <div class="card-child card1">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2>Inventory Categories</h2>
                        </div>
                        <p>The inventory categories feature allows naming, editing, deleting, and assigning users with
                            start/end dates for organized asset management.</p>
                    </div>
                </a>
                <a href="{{ url('/service4') }}">
                    <div class="card-child card2">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2> Inventories</h2>
                        </div>
                        <p>The inventory feature tracks ID, branches, categories, descriptions, quantity, price, and
                            users, enabling updating, deleting, and managing access, ensuring secure and organized stock
                            management.</p>
                    </div>
                </a>
            </div>
            <div class="card-sec2">
                <a href="{{ url('/service5') }}">
                    <div class="card-child card1">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2>Branches</h2>
                        </div>
                        <p>
                            The "Branches" functionality allows users to add, edit, view, and delete branches with details like name, ID, address, and creation date, ensuring streamlined branch management.</p>
                    </div>
                </a>
                <a href="{{ url('/service6') }}">
                    <div class="card-child card2">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png') }}" alt=""></div>
                            <h2>User management</h2>
                        </div>
                        <p>
                            The User Management system efficiently manages user profiles, tracks IDs, emails, branches, and allows editing, deleting, and monitoring user count for optimal control..</p>
                    </div>
                </a>
            </div>


            <div class="card-sec2">
                <a href="{{ url('/service7') }}">
                    <div class="card-child card1">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png')}}" alt=""></div>
                            <h2>Profit & loss</h2>
                        </div>
                        <p>
                            The Profit and Loss functionality tracks financial performance, automates calculations, provides customizable reports, and offers forecasting insights, enabling informed decision-making for business growth.</p>
                    </div>
                </a>
                <a href="{{ url('/service8') }}">
                    <div class="card-child card2">
                        <div class="font-heading">
                            <div class="font"><img src="{{ asset('frontend/images/SEO.png')}}" alt=""></div>
                            <h2>Customize Invoice</h2>
                        </div>
                        <p>The customizable invoice feature allows businesses to create branded invoices, calculate weights, and streamline billing processes, enhancing accuracy, professionalism, and cash flow management.</p>
                    </div>
                </a>
            </div>

        </div>
    </section>



    @include('frontend.component.footer')
    @include('frontend.component.script')
</body>

</html>
