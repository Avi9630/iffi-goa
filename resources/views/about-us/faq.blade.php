@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-FAQ py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">FAQ's</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 mb-4 static-content">
        <div class="container">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            What is the International Film Festival of India (IFFI) all about ?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The International Film Festival of India (IFFI) is one of Asia's most significant and oldest
                            film festivals, celebrating the best of global cinema.
                            Held annually in Goa, IFFI brings together filmmakers, industry professionals,
                            and cinema lovers from around the world to showcase and appreciate cinematic excellence.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            When and where is IFFI held ?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            IFFI is held every year in the picturesque state of Goa, India. This festival typically takes
                            place in the month of November, providing a perfect blend of film, art, and culture against the
                            backdrop of Goa's scenic beauty.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            How do I register as a delegate for IFFI ?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            To attend IFFI, you can register online through the official IFFI website.
                            The registration process involves filling out a form with your details and selecting the
                            type of pass you require. Early registration is recommended due to limited availability.
                            Once you log in, scroll down the IFFI account, follow the Delegate Application Guidelines,
                            and send in your application. You will receive an email acknowledging the receipt of your
                            application.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            When will Delegate Registration for IFFI started?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Delegate registration for the 56th edition of the International Film Festival of India (IFFI),
                            scheduled in the state from Nov 20 to 28, has opened on 27th September 2025. Film lovers can
                            apply in the delegate category starting at the cost of Rs 1,180 including the GST, however, in
                            the student category, it is free of charge.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            When will Delegate Registration for IFFI ends?
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Since there is no specific end date for delegate registration for IFFI, be sure to register
                            early to secure your spot.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            What are the categories of Delegate Registration?
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The categories for IFFI delegate registration are as follows: <br>
                            <b>Film Professionals</b> <br>
                            <p>
                                - Registration fee: ₹1180 (including 18% GST)<br>
                                - Benefits: Online accreditation, extra ticket, and free access to panels and screenings.
                            </p>

                            <b>Cine Enthusiasts</b> <br>
                            <p>
                                - Registration fee: ₹1180 (including 18% GST) <br>
                                - Benefits: Online accreditation and free access to panels and screenings.
                            </p>

                            <b>Delegate - Student</b> <br>
                            <p>
                                - Registration fee: ₹0 <br>
                                - Benefits: Online accreditation, free access to panels and screenings, with an allowance of
                                4 tickets per day.
                            </p>
                            <p>
                                These categories offer different benefits tailored to professionals, cinema lovers, and
                                students of cinema.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            What is the cost of Delegate Registration Pass?
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The cost of the IFFI delegate pass varies based on the category: <br>
                            <p>
                                - Film Professionals: ₹1180 (including 18% GST) <br>
                                - Cine Enthusiasts: ₹1180 (including 18% GST)<br>
                                - Delegate - Student: ₹0<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            What all does a delegate have access to ?
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A delegate at IFFI has access to the following: <br>
                            <ul>
                                <li>
                                    Panels and screenings
                                </li>
                                <li>
                                    Online accreditation</li>
                                <li>
                                    Additional benefits based on the category:
                                </li>
                                <p>
                                    <b> Film Professionals:</b> Extra ticket <br>
                                    <b> Students:</b> 4 tickets per day
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            Any special features of the festival for the delegate ?
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, IFFI offers special features for delegates: <br>

                            <ul>
                                <li>
                                    <b>Exclusive Access to Panels and Screenings:</b> Delegates can attend various film
                                    screenings and panel discussions with renowned filmmakers and industry professionals.
                                </li>
                                <li>
                                    <b>Networking Opportunities:</b> Delegates, especially Film Professionals, have the
                                    chance to
                                    network with global cinema personalities and industry experts.
                                </li>
                                <li>
                                    <b>Student Delegate Benefits:</b> Students receive special access with 4 tickets per
                                    day,
                                    providing them with a broader exposure to films and events.
                                </li>
                                <li>
                                    <b>Online Accreditation:</b> Delegates receive online accreditation, ensuring
                                    streamlined
                                    access to all events and venues during the festival.
                                </li>
                            </ul>
                            <p>
                                These features make the festival a rich experience for attendees from different segments
                                of the film industry and enthusiasts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            Why do I have to register at IFFI ?
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Registration at the IFFI website will streamline your participation process. By registering
                            once, your profile remains valid for upcoming events, and we will keep you updated with
                            important updates regarding the next editions of the IFFI festival. You can even get a
                            registration pass by downloading the IFFI app. MYIFFI account is the portal given to register
                            yourself at the IFFI GOA festival. To register, visit the Registration section on our website at
                            <a href="https://my.iffigoa.org/" target="_blank">
                                <strong style="color: blue">my.iffigoa.org</strong>
                            </a>
                            If you do not already have a valid username and
                            password, create a MYIFFI account. After creating your account, navigate to the Registrations
                            tab and select either Delegate or Media. Choose the appropriate criteria, complete the form, and
                            submit it. Once accepted as a Delegate for IFFI, you will receive a confirmation email. Please
                            note that there is a registration deadline, so don't delay!
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            Who can participate in IFFI ?
                        </button>
                    </h2>
                    <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            IFFI is open to filmmakers, producers, actors, industry professionals, media, delegates and
                            cinema enthusiasts. Whether you're an industry veteran or a passionate film lover or you come
                            from the media industry then, you can easily participate in this biggest film festival of GOA.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            Does registering for IFFI give me access to the Opening/Closing ceremony?
                        </button>
                    </h2>
                    <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            No, registering with IFFI does not grant access to the opening and closing ceremonies. This
                            event is invite-based only.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            What does registering for IFFI give me access to?
                        </button>
                    </h2>
                    <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Registering with IFFI provides several exclusive benefits, including access to a variety of
                            workshops
                            and master classes led by industry experts. You will also gain entry to film screenings,
                            allowing you
                            to experience a diverse range of cinematic works. Additionally, you will have the convenience of
                            online
                            ticket booking, making it easier to plan and attend your preferred events. These privileges
                            ensure a rich
                            and engaging festival experience.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            Will I be updated about my application status after applying?
                        </button>
                    </h2>
                    <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes, you will be updated about your application status after applying from Indian Panorama (IP),
                            OTT
                            (Web-series) & Creative Minds of Tomorrow (CMOT) via e-mail. You will receive emails regarding
                            the
                            approval or rejection of your application. Once approved, confirmation details and payment links
                            will
                            also be sent to your registered email. Additionally, all updates will be available on your
                            MYIFFI
                            dashboard, allowing you to easily track your application status and manage any further steps
                            required
                            for your participation.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            What is the delegate registration fee?
                        </button>
                    </h2>
                    <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            The delegate registration fee is ₹1,180. Once the delegate registration is complete, the
                            applicant
                            can access all film screenings through the booking app. Additionally, delegates can participate
                            in
                            masterclasses, where they can view the film schedule and get information about speakers and
                            actors.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            What Happens If I Lose My Badge?
                        </button>
                    </h2>
                    <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            If you lose your IFFI Member badge, a replacement can be issued to you. However, there is a fine
                            of
                            INR <strong>100/-</strong> for the re-issuance of the badge. To get a new badge, you will need
                            to
                            report the loss to the registration desk, pay the fine, and follow the necessary procedures to
                            obtain a replacement. This ensures that you can continue to access all the events and activities
                            without interruption. It's important to keep your badge secure to avoid any inconvenience.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            What if I made a mistake while filling my IFFI registration?
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            If you make a mistake while filling out your IFFI registration, do not start a new application.
                            Instead, promptly send the necessary corrections to
                            <a href="https://registration@iffigoa.org/" target="_blank">
                                <strong style="color: blue">registration@iffigoa.org</strong>
                            </a>. Clearly detail the errors and provide the correct information in your email. Our team will
                            update your registration accordingly. This approach ensures your application is accurate and
                            avoids
                            any confusion or delays in processing your registration.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                            What if I made a mistake while filling my IFFI registration?
                        </button>
                    </h2>
                    <div id="collapse28" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            If you make a mistake while filling out your IFFI registration, do not start a new application.
                            Instead, promptly send the necessary corrections to <a href="https://registration@iffigoa.org/"
                                target="_blank"><strong style="color: blue">registration@iffigoa.org</strong></a>. Clearly
                            detail the errors and provide the correct information in your email. Our team will update your
                            registration accordingly. This approach ensures your application is accurate and avoids any
                            confusion or delays in processing your registration.
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            What Do I Do If I Receive Another Username And Password, After I’ve Registered?
                        </button>
                    </h2>
                    <div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            If you have already registered, ignore the message.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            I Have Not Received Any Email Or Message, Regarding My Username And Password?
                        </button>
                    </h2>
                    <div id="collapse20" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Log on to <a href="https://my.iffigoa.org/" target="_blank"><strong
                                    style="color: blue">my.iffigoa.org</strong></a> and click on Forgot Password. If you
                            still cannot get through, then click on Create a new MyIFFI account.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            Can I Use One Email ID To Register For More Than One Single Person?
                        </button>
                    </h2>
                    <div id="collapse21" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            One email address can be used by only ONE person. If you receive more than one email from us, it
                            is because you have provided the same email address for more than one person. In this case you
                            would need to update your unique email address.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            What Payment Methods Are Available?
                        </button>
                    </h2>
                    <div id="collapse22" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Once you have been approved as a delegate, an email with the payment link will be sent to you.
                            All payments will be done online via Net Banking or Online Payment through Credit/Debit Cards.
                            Offline Mode will also be an option. A downloadable fee deposit challan will be available to
                            you, which you can fill and receive a receipt for at the nearest HDFC bank. Cash payments won't
                            be accepted at the venue.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            While Net Banking, It Says The Process Failed, But The Amount Has Been Debited From My Account?
                        </button>
                    </h2>
                    <div id="collapse23" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Do not make another transaction, in case of the above. Write to us at <a
                                href="https://iffigoa.org/festival/dashboard" target="_blank"><strong
                                    style="color: blue">registration@iffigoa.org</strong></a> so that the team can guide
                            you further.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                            I Am Unable To Attend. Can I Transfer My Delegate Badge To A Colleague Or Receive A Refund?
                        </button>
                    </h2>
                    <div id="collapse24" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            All registrations for an individual are non-transferable and non-refundable under all
                            circumstances, including non-participation.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                            Do I Have To Pay To Register As A Delegate?
                        </button>
                    </h2>
                    <div id="collapse25" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            As a student, Delegate Registration is free. For all the other categories, there is a
                            Registration fee AFTER you have been confirmed as a delegate. Information on Registration Fees
                            are provided according to your criteria.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <!-- Registration Fee Refundable -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                            Is The Registration Fee Refundable?
                        </button>
                    </h2>
                    <div id="collapse26" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            No, it is non-refundable and non-transferable.
                        </div>
                    </div>
                </div>

                <!-- Receipt/Invoice for Registration Fee -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                            Will I Receive A Receipt/Invoice For My Registration Fee?
                        </button>
                    </h2>
                    <div id="collapse27" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. Once registration is complete, delegates can view and print their payment receipts from
                            their MyIFFI account.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is the International Film Festival of India (IFFI) all about ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The International Film Festival of India (IFFI) is one of Asia's most significant and oldest film festivals, celebrating the best of global cinema. Held annually in Goa, IFFI brings together filmmakers, industry professionals, and cinema lovers from around the world to showcase and appreciate cinematic excellence."
                }
            }, {
                "@type": "Question",
                "name": "When and where is IFFI held ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "IFFI is held every year in the picturesque state of Goa, India. This festival typically takes place in the month of November, providing a perfect blend of film, art, and culture against the backdrop of Goa's scenic beauty."
                }
            }, {
                "@type": "Question",
                "name": "How do I register as a delegate for IFFI ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "To attend IFFI, you can register online through the official IFFI website. The registration process involves filling out a form with your details and selecting the type of pass you require. Early registration is recommended due to limited availability. Once you log in, scroll down the IFFI account, follow the Delegate Application Guidelines, and send in your application. You will receive an email acknowledging the receipt of your application."
                }
            }, {
                "@type": "Question",
                "name": "When will Delegate Registration for IFFI started?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Delegate registration for the 55th edition of the International Film Festival of India (IFFI), scheduled in the state from Nov 20 to 28, has opened on 27th September 2024. Film lovers can apply in the delegate category starting at the cost of Rs 1,000 including the GST, however, in the student category, it is free of charge."
                }
            }, {
                "@type": "Question",
                "name": "When will Delegate Registration for IFFI ends?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Since there is no specific end date for delegate registration for IFFI, be sure to register early to secure your spot."
                }
            }, {
                "@type": "Question",
                "name": "Who can participate in IFFI ?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "IFFI is open to filmmakers, producers, actors, industry professionals, media, delegates and cinema enthusiasts. Whether you're an industry veteran or a passionate film lover or you come from the media industry then, you can easily participate in this biggest film festival of GOA."
                }
            }, {
                "@type": "Question",
                "name": "Does registering for IFFI give me access to the Opening/Closing ceremony?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No, registering with IFFI does not grant access to the opening and closing ceremonies. This event is invite-based only."
                }
            }]
        }
    </script>
@endsection
