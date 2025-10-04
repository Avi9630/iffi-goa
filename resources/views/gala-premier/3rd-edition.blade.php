@extends('layouts.app')
@section('site_title', '3rd Edition Gala Premier | IFFI Goa - Celebrating Excellence in Global Cinema')
@section('site_description',
    'Experience the 3rd Edition of the Gala Premier at IFFI Goa, showcasing the best of
    international and Indian cinema. Join us for exclusive screenings, star-studded events, and celebrate cinematic
    excellence in a vibrant festival atmosphere.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Banner Section -->
    <div class="container-fluid page-header bannerBg-th_edition py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">55th IFFI Film Festival</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class=" mt-5 ">
                <div class="section-heading title-line mb-4">
                    <h2>55th IFFI Gala Premiere</h2>
                </div>
                <div class="mt-4">
                    <p>
                        In its third edition, the Gala Premieres and Red-Carpet segment at IFFI continues to get bigger and
                        better in its third edition. With a spectacular line-up of renowned names from the world of cinema,
                        Gala Premieres, in the last two years, have added the buzz to the red carpet making it glitzy and
                        glamorous. Launched with the idea of bridging the gap between audiences and stars, gala premieres
                        and red carpet allows a platform to see and know stars up, close and personal, as they attend the
                        festival for the World, Asia and India premieres of their respective films.
                    </p>

                    <p>In our previous two editions, IFFI witnessed participation from films and web series such as Drishyam
                        2, Ae Watan Mere Watan, Bhediya, Gandhi Talks, Qala, Lost, Goldfish, Kadak Singh, Farrey, Rauta Ka
                        Raaz, Telugu series Dhootha, international series Fauda (season 4), international documentary
                        Interactions, among several others, which brought a fine blend of genres catering to a vast spectrum
                        of cinephiles. Making the red carpet at IFFI the most sought after, we have had noted celebrities
                        such as Salman Khan, Ajay Devgn, Aditi Rao Hydari, Nawazzudin Siddiqui, Manoj Bajpayee, Varun
                        Dhawan, AR Rahman, Sunny Deol, Vijay Sethupathi, Karan Johar, Naga Chaitanya, Sara Ali Khan, Pankaj
                        Tripathi, Nushrat Bharucha gracing the festival with their presence.
                    </p>

                    <p>
                        This year, at the 55th IFFI, Gala Premieres and Red-Carpet segment promises to bring forth a
                        curation of films and series that would satiate movie lovers like never before. From crime
                        thrillers, murder mysteries to slice of life and socially relevant cinema, the 3rd edition of Gala
                        Premieres will offer a heady mix of films not only in terms of genres but also languages including
                        Hindi, English, Marathi, Malayalam and Telugu.
                    </p>

                    <p><b> Gala Premieres Schedule and Red-Carpet Guests </b></p>
                    <div class=" table-responsive mt-2  pb-4">
                        <table class="table table-bordered ">
                            <tbody>
                                <tr>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Show Time
                                    </th>
                                    <th>
                                        Film/project
                                    </th>
                                    <th>
                                        Red Carpet Guests
                                    </th>
                                </tr>
                                <tr>
                                    <td>November 21, 2024
                                    </td>
                                    <td>
                                        12:30 pm
                                    </td>
                                    <td>The Piano Lesson
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 21, 2024
                                    </td>
                                    <td>
                                        4:30 pm
                                    </td>
                                    <td>The Rana Daggubati Show (Series)
                                    </td>
                                    <td>Ranu Daggubati
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 21, 2024
                                    </td>
                                    <td>
                                        5:45 pm
                                    </td>
                                    <td>
                                        Zero Se Restart
                                    </td>
                                    <td>Vidhu Vinod Chopra,<br>
                                        Vikrant Masssey, Medha Shankr, Anant Vijay<br>
                                        Joshi, Anshuman Pushkar, Shantanu Moitra,<br>
                                        Swanand Kirkire, Jaskunwar Kohli
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 22, 2024
                                    </td>
                                    <td>
                                        12:00 pm
                                    </td>
                                    <td>
                                        Snow Flower
                                    </td>
                                    <td>Chhaya Kadam, Vaibhav<br>
                                        Mangle, Sarfaraz Alam Safu, Gajendra Vithal<br>
                                        Ahire, Deepak Kumar, Rekha Bhagat
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 22, 2024
                                    </td>
                                    <td>
                                        5:00 pm
                                    </td>
                                    <td>
                                        Saali Mohabbat
                                    </td>
                                    <td>Divvyendu Sharma, Tisca<br>
                                        Chopra, Manish Malhotra, Jyoti Deshpande, Dinesh Malhotra
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 22, 2024
                                    </td>
                                    <td>
                                        5:45 pm
                                    </td>
                                    <td>Mrs
                                    </td>
                                    <td>Sanya Malhotra, Arati<br>
                                        Kadav, Harman Baweja
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 23, 2024
                                    </td>
                                    <td>
                                        4:30 pm
                                    </td>
                                    <td>Vikatakavi (Series)
                                    </td>
                                    <td>Naresh Agastya, Megha<br>
                                        Akash, Ram Talluri, Pradeep Maddali
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 23, 2024
                                    </td>
                                    <td>
                                        5:30 pm
                                    </td>
                                    <td>Pune Highway
                                    </td>
                                    <td>Amit Sadh, Manjari Fadnis, Ketaki Narayan, Anubhav Pal,<br>
                                        Shishir Sharma, Swapnil Ajgaonkar, Sudeep<br>
                                        Modak, Rahul D’Cunha, Bugs Bhargava Krishna,<br>
                                        Seema Mohapatra, Jahanara Bhargava<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 24, 2024
                                    </td>
                                    <td>
                                        12:00 pm
                                    </td>
                                    <td>Sholay 4k Trailer +<br>
                                        Hazar Vela Sholay Pahilela Manus
                                    </td>
                                    <td>Ramesh Sippy +<br>
                                        Sonali Kulkarni, Siddharth<br>
                                        Jhadav, Dilip Prabhawalkar, Hrishikesh Gupte, Shehzaad Sippy



                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td>November 25, 2024
                                    </td>
                                    <td>
                                        4:30 pm
                                    </td>
                                    <td>Kannappa (Showcase)
                                    </td>
                                    <td>Vishnu Manchu,<br>
                                        Prabhudheva, Kajal Aggarwal, R SarathKumar, Mohan Babu, Mukesh Kumar Singh
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td>November 25, 2024
                                    </td>
                                    <td>
                                        5:15 pm
                                    </td>
                                    <td>The Mehta Boys
                                    </td>
                                    <td>Boman Irani, Avinash Tiwary, Shreya Chowdhary, Danesh Irani
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 26, 2024
                                    </td>
                                    <td>
                                        5:00 pm
                                    </td>
                                    <td>Jab Khuli Kitaab
                                    </td>
                                    <td>Dimple Kapadia, Pankaj<br>
                                        Kapur, Aparshakti Khurana, Manasi Parekh,<br>
                                        Samir Soni, Supriya Pathak, Saurabh Shukla, Sameer Nair, Naren Kumar
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 26, 2024
                                    </td>
                                    <td>
                                        5:45 pm
                                    </td>
                                    <td>Hisaab Barabar
                                    </td>
                                    <td>R Madhavan, Kirti Kulhari,Neil Nitin Mukesh, Ashwani Dhir
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 27, 2024
                                    </td>
                                    <td>
                                        5:15 pm
                                    </td>
                                    <td>Pharma (Series)
                                    </td>
                                    <td>Nivin Pauly, Rajit Kapur, Aalekh Kapoor, Narain, Shruthi Ramachandran, Veena
                                        Nandakumar
                                    </td>
                                </tr>
                                <tr>
                                    <td>November 27, 2024
                                    </td>
                                    <td>
                                        5:45 pm
                                    </td>
                                    <td>Headhunting To Beatboxing (Documentary)
                                    </td>
                                    <td>AR Rahman, Rohit Gupta,Amit Malik, Manil Gupta
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
