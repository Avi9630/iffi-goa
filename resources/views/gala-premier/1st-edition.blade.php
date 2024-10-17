@extends('layouts.app')
@section('site_title', '1st Edition of 53rd Iffi film festival')
@section('site_description',
    'Discover the Creative Minds of Tomorrow at IFFI, showcasing young Indian talent across 13
    film crafts. Apply now to be part of this prestigious program.')
@section('site_keywords',
    'IFFI Goa rules, IFFI guidelines, Film Submission Rules, IFFI entry requirements, IFFI Goa
    policies, Film Festival Regulations, Event Rules IFFI')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Banner Section -->
    <div class="container-fluid page-header bannerBg-first_edition py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">53rd IFFI Film Festival</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class=" mt-5 ">
                <div class="section-heading title-line mb-4">
                    <h2>53rd IFFI 2022</h2>
                </div>
                <div class=" mb-4 ">
                    <p>The 53rd <strong> International Film Festival of India (IFFI)</strong> was held between
                        20<sup>th</sup> to 28<sup>th</sup> November in Panjim, Goa. The festival is committed to showcasing
                        the best of world cinema and providing a platform to filmmakers and audiences alike. It is the
                        biggest film festival in India, which is held annually in Goa with the intention of understanding
                        and appreciating the global cultural ethos represented through films along with their social
                        interaction and building cooperation and friendships at a global level.</p>
                    <p>The department conducted an online Film Poster Design Contest as a tribute to the legendary filmmaker
                        Satyajit Ray. The theme of the contest was <strong> <i>'The One and Only Ray.'</i></strong> Out of
                        635 entries, the jury, which included renowned artists from the fields of art, film, and painting,
                        selected the 75 best film posters. Shyam Benegal, Anjolie Ela Menon, Dhimant Vyas, Radha Binod
                        Sharma, Prakash Bal Joshi &amp; Shukla Sawant were the renowned Jury members. The entire procedure,
                        including the jury's evaluation, took place online. Each jury panelist received a unique login and
                        password, and the following scoring criteria were considered to adjudicated the winners –
                        <i>creativity and originality, relevance to the theme, visual contest and the visual impact</i>.
                    </p>
                    <div class="mt-4 mb-3 pb-4">
                        <img src="{{ asset('public/images/gala-premier/1st-edition/image1.jpg') }}" alt="image"
                            class="img-fluid img-radius-5">
                    </div>
                    <p>The top three winners received monetary prizes, the winners were awarded with ₹ 1,00,000/- ,the First
                        &amp; Second Runner up with ₹ 75,000 &amp; ₹ 50,000 respectively, as well as a souvenir created from
                        these
                        three winning film poster designs, were presented to dignitaries &amp; eminent personalities
                        attending
                        53rd IFFI. Each jury panelist received a unique login and password, and the following scoring
                        criteria were considered to adjudicated the winners – <b><i>creativity and originality, relevance to
                                the theme, visual contest and the visual impact</i></b>.</p>
                    <p>Moreover, the department handled the <b>"Gala Premieres and Special Screenings"</b> a new segment of
                        the festival, which intended to bring mainstream film stars to the public and to celebrate
                        international festival with representing their films keeping the spirit of the film festival intact.
                        The titles included as mentioned below –</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image4.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image3.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mb-3 mt-4">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th scope="col" width="150">DATE</th>
                                    <th scope="col">DAY</th>
                                    <th scope="col">FILM NAME</th>
                                    <th scope="col">STAR CAST &amp; CREW</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21-Nov-22</td>
                                    <td>Monday</td>
                                    <td><i>The Storyteller</i></td>
                                    <td>Paresh Rawal, Adil Hussain, Tannishtha Chatterjee, Anindita Bose Anant Mahadevan
                                        (Director)</td>
                                </tr>
                                <tr>
                                    <td>21-Nov-22</td>
                                    <td>Monday</td>
                                    <td><i>Drishyam 2 </i></td>
                                    <td>Ajay Devgn, Shriya Saran, Bhushan Kumar, Kumar Mangat Pathak, Abhishek Pathak
                                        (Director)</td>
                                </tr>
                                <tr>
                                    <td>22-Nov-22</td>
                                    <td>Tuesday</td>
                                    <td><i></i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>23-Nov-22</td>
                                    <td>Wednesday</td>
                                    <td><i>Lost </i></td>
                                    <td>Yami Goutam, Aniruddha Roy Chowdhury (Director)</td>
                                </tr>
                                <tr>
                                    <td>24-Nov-22</td>
                                    <td>Thursday</td>
                                    <td><i>Raymo </i></td>
                                    <td>Ashika Ranganath, Ishan, Pawan Wodeyar (Director)</td>
                                </tr>
                                <tr>
                                    <td>24-Nov-22</td>
                                    <td>Thursday</td>
                                    <td><i>Goldfish </i></td>
                                    <td>Kalki Koechlin, Deepti Naval Pushan Kriplani (Director)</td>
                                </tr>
                                <tr>
                                    <td>24-Nov-22</td>
                                    <td>Thursday</td>
                                    <td><i>Qala </i></td>
                                    <td>Babil Khan, Triptii Dhimri, Anvitaa Dutt Guptan (Director)</td>
                                </tr>
                                <tr>
                                    <td>25-Nov-22</td>
                                    <td>Friday </td>
                                    <td><i>Bhediya</i></td>
                                    <td>Varun Dhawan, Kriti Sanon, Dinesh Vijan, Amar Kaushik (Director)</td>
                                </tr>
                                <tr>
                                    <td>25-Nov-22</td>
                                    <td>Friday </td>
                                    <td><i>Tera Kya Hoga Lovely</i></td>
                                    <td>Randeep Hooda, Illeana D'Cruz, Balwinder Singh Janjua (Director)</td>
                                </tr>
                                <tr>
                                    <td>26-Nov-22</td>
                                    <td>Saturday </td>
                                    <td><i>Interactions </i></td>
                                    <td>Eric Nazarian (Director)</td>
                                </tr>
                                <tr>
                                    <td>27-Nov-22</td>
                                    <td>Sunday </td>
                                    <td><i>Vadhandhi - Special Episode (Web Series) </i></td>
                                    <td>SJ Suryah, Kameela Nasser, Andrew Vasanth (Director)</td>
                                </tr>
                                <tr>
                                    <td>26-Nov-22</td>
                                    <td>Sunday </td>
                                    <td><i>Fauda- Season 4- Episode 1 (Web Series) </i></td>
                                    <td>Lior Raz, Avi (Avraham) Issacharoff</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Many well-known actors, such as Paresh Rawal, Ajay Devgn, Shriya Saran, Yami Gautam, Ashika
                        Ranganath, Varun Dhawan, Suniel Shetty, Randeep Hooda, Illeana D'Cruz, SJ Suryah, Sai Tamhankar,
                        Kalki Koechlin, Deepti Naval, Pankal Kapur, Supriya Pathak Shah, Rajit Kapur, Karan Kundra, Adil
                        Husain, Tannistha Chatterjee, Adivi Sesh, Raj Kumarr Rao, and others, participated in the 53rd
                        International Film Festival of India.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image10.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image5.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                    </div>
                    <p>The highlight of the segment was the presence of Avi Issacharoff &amp; Lior Raz, the Fauda (Netflix)
                        stars. These actors were all featured in the prestigious Indian Panorama, Special Screenings &amp;
                        Gala
                        Premieres sections. Each and every actor thought this was the ideal &amp; perfect platform for
                        showcasing their films or trailers and for entertaining the audiences.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image6.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image7.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                    </div>
                    <p>A collection of films presented in collaboration with UNICEF, IFFI’s Cause Partner that reflected on
                        the dynamic forces which shape childhood and its socio-economic contexts, Hence sent the CFSI’s
                        Nagamese Children’s film <b><i>Nani Teri Morni</i></b>for screening and as IFFI believes in making
                        cinema an inclusive and accessible avenue for everyone. It took up the initiative of organizing
                        dedicated screenings for specially-abled people keeping in mind their accessibility needs. The films
                        in this section were audio-visual-equipped, with embedded audio descriptions and subtitles. The
                        section featured two films; NFDC’s Co-Production <b><i>Gandhi</i></b> directed by Richard
                        Attenborough and <b><i>The Storyteller</i></b> directed by Ananth Narayan Mahadevan, which is also
                        one of the film at Gala Premieres &amp; Special Screening section.</p>
                    <p>Additionally, the <b><i>75 Creative Minds Of Tomorrow</i></b> (CMOT) programme was implemented. As
                        part of the
                        first-ever outreach effort by NFDC, the winning film of the 53-hour filmmaking challenge, which was
                        a component of the CMOT, was screened in front of a huge audience of approx. <b><i>2 Crore school
                                children</i></b>between the ages of 8 and 12 across <b><i>22,000 schools of India</i></b>.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image8.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="redCarp">
                                <img src="{{ asset('public/images/gala-premier/1st-edition/image11.jpg') }}" alt="image"
                                    class="img-fluid img-radius-5">
                            </div>
                        </div>
                    </div>
                    </b>
                </div>
            </div>
        </div>
    </div>

@endsection
