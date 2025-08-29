@extends('layouts.app')
@section('site_title', '2nd Edition of 54th Iffi film festival')
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
    <div class="container-fluid page-header bannerBg-second_edition py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">54th IFFI Film Festival</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class=" mt-5 ">
                <div class="section-heading title-line mb-4">
                    <h2>54th IFFI - Gala Premieres & Red Carpet Section | 20th to 28th November 2023</h2>
                </div>
                <div class="mt-4">
                    <p>
                        At the 54th International Film Festival of India (IFFI), the National Film Development Corporation
                        Limited presented the second edition of "Gala Premieres." This segment has been meticulously crafted
                        to connect film stars with the audience, celebrating global cinematic artistry and bringing forth an
                        extraordinary selection of films, all while upholding the festival's core ethos. The Gala Premieres
                        segment was launched during the 53rd edition of IFFI to add more glitz and glamor to the festival,
                        allowing the public to see their favorite stars up close. It was a huge success, drawing in large
                        audiences, with mainstream films from across the globe gracing the red carpet and attending the gala
                        premieres.
                    </p>
                    <div class="row mt-4 mb-3 pb-4">
                        <div class="col-md-6 col-sm-6">
                            <img class="img-fluid img-radius-5"
                                src="{{ asset('public/images/gala-premier/2nd-edition/image1.jpg') }}" alt="image">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-fluid img-radius-5"
                                src="{{ asset('public/images/gala-premier/2nd-edition/image2.jpg') }}" alt="image">
                        </div>
                    </div>
                    <p>The segment was designed to connect cinema to reach the roots of India, providing a
                        platform for filmmakers and delegates to interact and build global friendships. It added
                        inclusiveness where Indie art meets glamour, and diverse talent connects with the industry. True to
                        the festival ethos, the Gala Premieres had directors, in attendance, with cast supporting the
                        auteur. This year, a total of 9 Gala Premieres were screened and up to 80 Red Carpets were held
                        across all sections, including Indian Panorama, International Cinema, Restored Classics, etc.
                    </p>
                    <p><b> The Dignitaries at Gala Premieres </b></p>
                    <p>
                        Gala premieres witnessed a star-studded extravaganza with the presence of some of the biggest names
                        in the film industry. Mr. Salman Khan graced the event for the premiere of "Farrey," directed by the
                        talented Soumendra Padhi, adding a touch of glamour and charisma to the red carpet. Pankaj Tripathi
                        and Parvathy Thiruvothu, joined by the cast, marked the world premiere of "Kadak Singh," a
                        captivating film directed by Annirudha Roy Chowdhury.
                    </p>
                    <p>
                        The festival continued to shine with the presence of Vijay Sethupathy and Aditi Rao Hydari,
                        accompanied by the team of "Gandhi Talks," directed by Kishore Pandurang Belekar. Superstar Arya
                        made his mark with the Amazon Original series "The Village," directed by the talented Milind Rau.
                        The renowned Siddharth Randeria added his charm to the occasion for the film "Hurry Om Hurry,"
                        directed by Nisarg Vaidya. Nawazuddin Siddiqui made a notable appearance for "Rautu Ki Beli,"
                        directed by the skilled Anand Surapur.
                    </p>
                    <p>
                        The red carpet also witnessed the dynamic duo, Naga Chaitanya and Parvathy Thiruvothu, gracing the
                        event for the Amazon Original series "Dhootha," directed by the acclaimed Vikram K. Kumar. Akshay
                        Oberoi captivated the audience with his presence for "Dil Hai Gray," directed by Susi Ganeshan. The
                        festival concluded on a high note with the stellar presence of Vijay Raghavendra, Bhavana Rao, and
                        Shruti Prakash for "Grey Games," directed by the talented Gangadhar Salimath. This year's IFFI was
                        not just a celebration of cinema but a confluence of talent, creativity, and cinematic excellence.
                    </p>
                    <div class="row mt-4 mb-3 pb-4 ">
                        <div class="col-md-4 col-sm-4 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image4.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image5.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image3.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image6.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image7.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image8.jpg') }}"
                                class="img-fluid img-radius-5" alt="image">
                        </div>
                    </div>
                    <p><b> Films showcased/cancelled in Gala Premieres </b></p>
                    <div class=" table-responsive mt-2  pb-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SR. NO</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">FILM / PROJECT</th>
                                    <th scope="col">AUDI</th>
                                    <th scope="col">RED CARPET TIME</th>
                                    <th scope="col">SCREENING TIME</th>
                                    <th scope="col">CAST &amp; CREW</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>21.11.23</td>
                                    <td>FARREY (Hindi)</td>
                                    <td>Audi 1 </td>
                                    <td>4:00 PM</td>
                                    <td>5:00 PM</td>
                                    <td>5:00 PM Salman Khan (Producer), Alizeh Agnihotri (Actor), Prasanna Bisht (Actor),
                                        Sahil Mehta (Actor), Zeyn Shaw (Actor), Atul Agnihotri, Alvira Khan, Nikhil Namit,
                                        Y. Ravi Shankar, Naveen Yerneni, Soumendra Kumar Padhi (Director), Sunir Kheterpal
                                        (Producer)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>21.11.23</td>
                                    <td>GANDHI TALKS (Silent)</td>
                                    <td>Audi 3 </td>
                                    <td>5:30 PM</td>
                                    <td>6:15 PM</td>
                                    <td>Vijay Sethupathy (Actor), Aditi Rao Hydari (Actor) Arvind Swamy (Actor) AR Rehman,
                                        Siddharth Jadhav (Actor), Shariq Patel (Zee Srudios), Kishor Padurang Belekar
                                        (Director)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>22.11.23</td>
                                    <td>KADAK SINGH (Hindi)</td>
                                    <td>Audi 1 </td>
                                    <td>4:30 PM</td>
                                    <td>5:00 PM</td>
                                    <td>Pankaj Tripathi (Actor), Parvathy Thiruvothu (Actor), VIraf Sarkari &amp; Sabbas
                                        Joseph (Wizcraft), Aniruddha Roy Chowdhury(Director)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>22.11.23</td>
                                    <td>THE VILLAGE (Amazon Original Series) (Tamil)</td>
                                    <td>Audi 3 </td>
                                    <td>5:30 PM</td>
                                    <td>6:15 PM</td>
                                    <td>Arya (Actor), Divya Pillai (Actor), Aazhiya Aadukalam Naren, Milind Rau (Director)
                                        &amp; Amazon Team
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>23.11.23</td>
                                    <td>HURRY OM HURRY (Gujarati)</td>
                                    <td>Audi 3 </td>
                                    <td>5:30 PM</td>
                                    <td>6:15 PM</td>
                                    <td>Nisarg Vaidya (director), Siddharth Randheria (lead actor) , Raunak Kamdar (lead
                                        actor) ,Vyoma Nandi (lead actress) , Malhar Rathod (lead actress), Sanjay Chhabria
                                        (producer), Swaroop Chaturvedi
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>24.11.23</td>
                                    <td>DEAR JASSI (Punjabi)
                                        CANCELLED
                                    </td>
                                    <td>Audi 1 </td>
                                    <td>2:00 PM</td>
                                    <td>2:30 PM</td>
                                    <td>Pavia Sidhu (Lead Actor), Yugum Sood (Actor), Gourav Sood (Actor), Tarsem Singh
                                        (Director), Brendon Galvin (DOP)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>25.11.23</td>
                                    <td>RAUTU KI BELI (Hindi)
                                    </td>
                                    <td>Audi 3 </td>
                                    <td>5:15 PM</td>
                                    <td>6:00 PM</td>
                                    <td>Nawazuddin Siddiqui (Lead Actor), Riya Sisodiya (Actor), Rajesh Kumar (Actor), Anand
                                        Surapur (Director)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>26.11.23</td>
                                    <td>DHOOTHA (Amazon Original Series) (Telugu)
                                    </td>
                                    <td>Audi 3 </td>
                                    <td>5:15 PM</td>
                                    <td>6:00 PM</td>
                                    <td>Naga Chaitanya (Lead Actor), Parvathy (Actor), Prachi Desai (Actor), Amazon Team,
                                        Vikram K. Kumar (Director)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>27.11.23</td>
                                    <td>DIL HAI GRAY (Hindi)
                                    </td>
                                    <td>Audi 1 </td>
                                    <td>4:30 PM</td>
                                    <td>5:15 PM</td>
                                    <td>Urvashi Rautela (Actor), Akshay Oberoi (Actor) Rangaraj Pandey (Actor), Vineet Kumar
                                        Singh (Actor) Susi Ganeshan (Director), M. Ramesh Reddy (Producer)
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>27.11.23</td>
                                    <td>GREY GAMES (Kannada)
                                    </td>
                                    <td>Audi 3 </td>
                                    <td>5:30 PM</td>
                                    <td>6:15 PM</td>
                                    <td>"Vijay Raghavendra (Actor), Bhavana Rao (Actor) Shruti Prakash (Actor),
                                        Ram Manjjonaath (Actor) Gangadhar Salimath (Director), Anand Mugad (Producer)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p><b> Red Carpet Highlights </b></p>
                    <p>The team managed and executed up to 80 red carpets for various segments, namely
                        Indian Panorama, International Cinema, Restored Classics, Masterclass/In-Conversation, Opening Film,
                        Mid-fest film, Closing film, and Gala Premieres. This involved tasks such as managing media at the
                        entrance of the red carpet, playing timely music during each red carpet walk based on the
                        film/segment the celebrity represented, scripting for each film/team that walked the red carpet,
                        brainstorming on fun Q&amp;A or activities related to the celebrities' respective films presented at
                        IFFI, briefing and coordinating with each anchor, managing celebrities for one-on-one interviews,
                        and coordinating their participation in PIB press conferences. Additionally, the team escorted the
                        celebrities safely to the Audi/Press Conference room/Lounge and then back to their cars
                    </p>
                    <div class="row mt-4 pb-4">
                        <div class="col-md-6 col-sm-6 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image9.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image10.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image11.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image12.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image13.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image14.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image15.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image16.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image17.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image18.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image19.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image20.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image21.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image22.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image23.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image24.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image25.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image26.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                    </div>
                    <p><b> PR &amp; Social Media Coverage </b></p>
                    <p>The team wrote social media bytes/scripts for the main cast and crew of each film
                        under the Gala Premiere segment. These were then posted on all the social media handles (Instagram,
                        Facebook, Twitter, and YouTube) of NFDC and IFFI to create buzz among the audiences and encourage
                        them to register for IFFI. Additionally, the team successfully persuaded celebrities with millions
                        of followers to accept collaboration requests on Instagram. This strategy resulted in maximum and
                        effective reach, ultimately contributing to an increase in registrations.
                    </p>
                    <p><b>Travel, Hospitality &amp; Badge details</b></p>
                    <p>The team meticulously managed the logistics for key attendees at the Gala Premieres
                        section for the 54th International Film Festival of India (IFFI), ensuring seamless travel and
                        accommodation arrangements. A total of 97 flight tickets were booked, encompassing 16 in Business
                        Class and 81 in Economy Class. International travel was facilitated with 3 tickets, while 94 tickets
                        covered domestic flights. Unfortunately, there was one no-show by Pavia Sidhu, and 27 tickets were
                        canceled, with an equal number being rebooked. The team also arranged a total of 109 room nights,
                        with an extension of 3 nights for Pavia Sidhu. Notably, room cancellations occurred for Vipul D Shah
                        and Hemant Kevlani, who were scheduled for a 2-day stay.
                    </p>
                    <p>
                        Transportation logistics were efficiently handled, with a fleet of 72 vehicles in use. Among these,
                        special arrangements included 1 bulletproof car for Mr.Salman Khan and 2 Luxary vehicles for the
                        director and producer of "Farrey," providing the necessary security and comfort. Standard vehicles
                        constituted the majority, with 68 serving various transportation needs. This comprehensive report on
                        travel, accommodation, and transportation underscores the Gala Team's commitment to delivering a
                        flawless and memorable experience for the esteemed guests and participants at IFFI.
                    </p>
                    <p>
                        The Gala team booked flight tickets for Salman Khan’s team, the Farrey cast team, the cast and crew
                        of Grey Games, and the cast and crew of Dear Jassi. And Car Passes were handed over for the
                        remaining Film teams.
                    </p>
                    <p><b>Air Travel</b></p>
                    <p>Total number of tickets booked - 97<br>
                        Business class - 16<br>
                        Economy class - 81<br>
                        International tickets - 3 <br>
                        Domestic tickets - 94<br>
                        No show/Hold - 1 (Pavia Sidhu)<br>
                        Canceled - 27<br>
                        Rebooked - 27
                    </p>
                    <p><b>Hospitality</b></p>
                    <p>Total room nights booked - 109<br>
                        Room night Extensions - 3 nights extended for Pavia Sidhu<br>
                        Rooms canceled - Vipul D Shah and Hemant Kevlani did not show up; they were booked for 2 days.
                    </p>
                    <p><b>Ground Transport</b></p>
                    <p>Total vehicles used - 72<br>
                        Luxury vehicles - 1 bullet proof car for Salman Khan and 2 for the director and producer of
                        Farrey<br>
                        Standard vehicles - 68
                    </p>
                    <p><b>Badge Details:</b></p>
                    <p>Total Registrations for Gala Premiere - 355 Delegates <br>
                        Total Cancellations - 38 <br>
                        Total Badges Printed - 314<br>
                        Official Invitee - 95 (Red Badge) <br>
                        Guest Invitee - 158 (Yellow Badge)<br>
                        Duty Card - 3 (Black Badge) <br>
                        Special Invitee - 54 (Yellow Badge)<br>
                        Sponsor - 4 (Coca Cola Management)
                    </p>
                    <p><b>Audiences Reception</b></p>
                    <p> Audi seating capacities and delegates filled for Gala Premieres
                        The Gala Premiere titles selection process was significantly enhanced through a meticulous and
                        thorough approach. The IFFI committee, in line with the language mandate set by the Ministry,
                        prioritized films with a focus on regional content possessing universal appeal. This criterion
                        ensured a diverse and inclusive representation of cinematic narratives, promoting cultural richness
                        and artistic diversity. The exemption of certain films from the committee for screening purposes
                        further attested to the rigorous evaluation process undertaken.
                    </p>
                    <div class="row mt-4 pb-4 ">
                        <div class="col-md-6 col-sm-6 mb-2 ">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image36.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image37.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image46.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                    </div>
                    <div class="galaTable table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Delegates</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Farrey</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-I Panaji</td>
                                    <td>21.11.2023</td>
                                    <td>17:00</td>
                                    <td>483</td>
                                    <td>454</td>
                                </tr>
                                <tr>
                                    <td>Gandhi Talks</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>21.11.2023</td>
                                    <td>18:15</td>
                                    <td>231</td>
                                    <td>195</td>
                                </tr>
                                <tr>
                                    <td>Kadak Singh</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-I Panaji</td>
                                    <td>22.11.2023</td>
                                    <td>17:00</td>
                                    <td>483</td>
                                    <td>477</td>
                                </tr>
                                <tr>
                                    <td>The Village</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>22.11.2023</td>
                                    <td>18:15</td>
                                    <td>231</td>
                                    <td>215</td>
                                </tr>
                                <tr>
                                    <td>Hurry Om Hurry</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>23.11.2023</td>
                                    <td>18:15</td>
                                    <td>231</td>
                                    <td>214</td>
                                </tr>
                                <tr>
                                    <td>Dear Jassi (replaced by Attaam)</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-I Panaji</td>
                                    <td>24.11.2023</td>
                                    <td>14:30</td>
                                    <td>483</td>
                                    <td>404</td>
                                </tr>
                                <tr>
                                    <td>Rautu Ki Beli</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>25.11.2023</td>
                                    <td>18:00</td>
                                    <td>231</td>
                                    <td>205</td>
                                </tr>
                                <tr>
                                    <td>Dhootha</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>26.11.2023</td>
                                    <td>18:00</td>
                                    <td>231</td>
                                    <td>221</td>
                                </tr>
                                <tr>
                                    <td>Dil Hai Gray</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-I Panaji</td>
                                    <td>27.11.2023</td>
                                    <td>17:15</td>
                                    <td>483</td>
                                    <td>390</td>
                                </tr>
                                <tr>
                                    <td>Grey Games</td>
                                    <td>Gala Premiere</td>
                                    <td>INOX Screen-III Panaji</td>
                                    <td>27.11.2023</td>
                                    <td>18:15</td>
                                    <td>231</td>
                                    <td>165</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Notably, these selections considered various factors, including the overall cast, which had garnered
                        millions of impressions on social media, reflecting the IFFI's commitment to showcasing films with
                        broad audience appeal and cultural significance. <b> Audience attendance for Gala Premieres was
                            notable,
                            with 81% of delegates in attendance. The remaining seats were filled by the film team and media
                            professionals, resulting in a houseful turnout for all the Gala Premieres</b>.
                    </p>
                    <div class="row mt-4 pb-4 ">
                        <div class="col-md-6 col-sm-6 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image40.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-2">
                            <img src="{{ asset('public/images/gala-premier/2nd-edition/image41.jpg') }}" alt="image"
                                class="img-fluid img-radius-5">
                        </div>
                    </div>
                    <p><b>⦁ Challenges – Reason for cancellation of Dear Jassi screening:</b></p>
                    <p>The completion of the 54th International Film Festival of India (IFFI) in 2023 was not without its
                        challenges, exemplified by the unfortunate cancellation of the screening of the film "Dear Jassi."
                        The impediment arose from a legal dispute initiated by M/s. Dreamline Reality Movies, asserting
                        exclusive rights and copyright over the events surrounding Jaswinder Kaur Sidhu’s murder. The
                        Ludhiana District Court's interim order on November 23, 2023, further restricted the film's release,
                        compelling compliance and preventing its screening at IFFI. This incident underscores the critical
                        challenge of legal entanglements faced by film festivals, requiring meticulous attention to rights
                        clearance and legal checks well in advance of film submissions. To address this, a proactive
                        approach involving thorough reviews of existing agreements and securing explicit permissions is
                        essential. This incident reinforces IFFI's commitment to maintaining the highest standards of
                        integrity and legal compliance, ensuring a transparent and equitable platform for both filmmakers
                        and audiences. Moving forward, a robust pre-screening legal assessment protocol should be
                        implemented to prevent such disruptions and safeguard the festival's reputation as a fair and
                        reputable showcase for global cinema.
                    </p>
                    <p><b>Red Carpets (Strategic Selection)</b> <br>
                        Not every title featured in the Indian Panorama merits red-carpet treatment; the exclusive privilege
                        of gracing the red carpet should be reserved solely for premiere titles. This consideration needs to
                        be discussed and strategically planned to encourage new filmmakers while avoiding conflicts. A
                        suggestion could be made to allocate Red Carpet on the 26th and 27th for Indian Panorama section
                        filmmakers, given their nominations and the opportunity to attend the closing ceremony.
                    </p>
                    <p> <b>Timing - </b>Most of the Red carpets that were scheduled during the afternoon faced a lot of
                        problems
                        with the attendance of media and delegates due to the extreme heat and sunny weather. It was
                        difficult for most of the guests to stand in the sun and pose for photos and give interviews. It
                        would be helpful if we can schedule all the red carpets in the morning or evening or make the venue
                        such that it provides a comfortable and smooth experience for the filmmakers, Media, Delegates and
                        the team working on the Red Carpet.
                    </p>
                    <p><b> Media -</b> Sometimes no Media whenever there was a major celebrity coming at a different venue
                        or during
                        the Press Conference. Even when the Media attended the Red Carpet for smaller and less popular films
                        they were less enthusiastic and were present in low numbers. As a film festival it is our duty to
                        treat all the films as the same and provide them with equal opportunity. Treating smaller films like
                        this was a huge disappointment. About Dry Grasses, a captivating Turkish cinematic masterpiece
                        directed by Nuri Bilge Ceylan, had limited media coverage. A better mechanism needs to be in place
                        to overcome this from the next year onward
                    </p>
                    <p><b> Quality and Build of the Red Carpet - </b>After a long discussion and brainstorming the team came
                        up with the design of the red carpet, but it had many problems. Starting with the entrance stage
                        which was facing the sun the whole day making the guests uncomfortable and sweaty as soon as they
                        entered. A
                        lot of the media people complain about the backlight at the media wall which resulted in a lot of
                        less exposed pictures. The sunlight from the back was a huge problem for the photographers plus the
                        media standing area and Media wall was not aligned properly resulting in most of the media standing
                        in a corner for shade and better photos. The Acrylic roof on the red carpet was making the heat even
                        worse during the afternoon. The barricading was loose at most of the places which made the task of
                        handling the crowd even worse. For the delegates, the way to cross the venue was through the red
                        carpet, and whenever there was a guest coming, we had to close that path which resulted in a lot of
                        delegates complaining as they got delayed for their screening. The entrance dome was damaged in a
                        few days and some wood pieces came out as it was not constructed properly.
                    </p>
                    <p><b> Lounge Area -</b> The VIP Lounge at GMC Building and the lounge at INOX was mostly filled with
                        unnecessary people all the time which led to confusion and arguments between team and delegates. We
                        suggest having a dedicated holding area exclusive for the guest and a separate lounge for Media
                        Interaction.
                    </p>
                    <p><b> Parking and Car Passes -</b> Sometimes the mismanagement in the parking area and lack of
                        transparency between team members created confusion at the entrance and exit.
                    </p>
                    <p><b>⦁ Suggestions for Future Gala Premieres &amp; Red Carpet –</b></p>
                    <div class="container">
                        <p>⦁ Extended Q&amp;A Sessions: Proposal for a more extended allocation of time for Q&amp;A
                            sessions,
                            particularly during premieres with red carpets. Noting that the sudden inclusion of Q&amp;A
                            sessions
                            often leads to delays in subsequent screenings. Emphasizing the importance of clear
                            communication regarding hospitality arrangements to ensure seamless and punctual execution.
                        </p>
                        <p> ⦁ Pre-Festival Meetings: Suggestion to organize pre-festival meetings for all teams involved.
                            Highlighting the potential benefits of better coordination and ensuring everyone is on the same
                            page, with clear channels for escalating situations. Recognizing the importance of enhanced
                            communication for a well-coordinated event.
                        </p>
                        <p>Multiple Water Stalls &amp; Eco-Friendly Campus: Recommendation for the installation of multiple
                            water stalls across the venue. Noting that this would cater to the hydration needs of delegates
                            and attendees while contributing to the reduction of plastic bottle wastage.
                        </p>
                        <p>⦁ Excess Baggage Allowance: Proposal to consider allowing excess baggage for team members.
                            Acknowledging the practicality of this adjustment to cater to individuals' needs for carrying
                            essential items during their stay in a different city.
                        </p>
                        <p><b>⦁ Infrastructure Improvements for Red Carpets, Barricades, and VIP Lounge Badges</b></p>
                        <p>⦁ Enhanced Red Carpet Experience:</p>
                        <p>⦁ Prioritization of proper ventilation in the red carpet area for improved guest comfort.</p>
                        <p>⦁ Installation of effective ventilation systems and consideration of optimal scheduling for
                            weather conditions.
                        </p>
                        <p>⦁ Streamlined VIP Lounge Access:</p>
                        <p>⦁ Introduction of a new badge system to regulate and enhance access to the VIP lounge.</p>
                        <p>⦁ Restriction of VIP lounge entry exclusively to film teams and red carpet participants, ensuring
                            a more organized and secure environment.
                        </p>
                        <p>⦁ Rationalization of badges, types, and access is mandatory for the festival, with compulsory
                            badge-wearing as a mandate and PR efforts to be undertaken.
                        </p>
                        <p> ⦁ Mojo Barricades and Risk Mitigation:</p>
                        <p>⦁ Strengthening barricades to withstand external pressures, including the incorporation of Mojo
                            Barricades.
                        </p>
                        <p>⦁ Proactive risk mitigation strategies, regular assessments, and collaboration with security
                            experts for crowd management to provide a secure, comfortable, and exclusive experience for all
                            IFFI participants and guests.
                        </p>
                        <p>⦁ Instances like the red carpet events of Salman Khan and Muttaiah Murlidharan highlighted the
                            need for mojo barricades, as the team had to prevent them from falling due to external force
                            from the audience and media.
                        </p>
                        <p> ⦁ Optimizing Canopy Design for Comfort:</p>
                        <p>⦁ Addressing concerns about the red carpet canopy's heat generation by exploring advanced cooling
                            solutions or alternative materials.
                        </p>
                        <p>⦁ Collaborating with architectural experts to redesign the canopy for improved heat dissipation
                            while maintaining its aesthetic appeal.
                        </p>
                        <p>⦁ Advising the use of a canopy and ensuring decor in-concurrence with NFDC before floating the
                            RFP.
                        </p>
                        <p>⦁ Strategic Fan Placement for Efficient Ventilation:</p>
                        <p>⦁ Implementing a strategic fan placement strategy along the red carpet area to ensure consistent
                            and effective ventilation.
                        </p>
                        <p>⦁ Conducting a thorough assessment of the venue's airflow dynamics to position fans strategically
                            for optimal comfort and smooth event operations.
                        </p>
                        <p>⦁ Additional Points:</p>
                        <p>⦁ An embargo needs to be imposed for each film showcased to the media, and this information
                            should be communicated to the ticketing and usher teams.
                        </p>
                        <p>⦁ Given a mandate of 11, the team successfully completed 80 Red Carpets within the span of 7
                            days.
                        </p>
                        <p>⦁ Despite the Gala Premieres order being issued in August 2023 and facing financial constraints
                            (money not sanctioned and not part of any budget), the team demonstrated exceptional efficiency.
                        </p>
                        <p>⦁ The Viacom Media Wall at the Red Carpet faced mismanagement by the EMA team, posing a
                            logistical challenge.
                        </p>
                        <p>⦁ The Emcees' were diligent &amp; flawless and exceeded the previous year's performance.</p>
                        <p>⦁ Coca Cola, Nuremberg were connected to IFFI for Collaborations, emphasizing their impact on the
                            festival's success.
                        </p>
                        <div class="row mt-4 pb-4 ">
                            <div class="col-md-6 col-sm-6 mb-2">
                                <img src="{{ asset('public/images/gala-premier/2nd-edition/image42.jpg') }}"
                                    alt="image" class="img-fluid img-radius-5">
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <img src="{{ asset('public/images/gala-premier/2nd-edition/image43.jpg') }}"
                                    alt="image" class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <p>⦁ Master Classes Initiatives</p>
                        <p>⦁ Successfully initiated key connections for Master Classes.</p>
                        <p>⦁ <b><i>Ae Watan Mere Watan integration</i></b>, though initially associated with Gala Premieres,
                            significantly
                            contributed to the grand opening of the Master Classes session.
                        </p>
                        <p>⦁ The Gala Premieres team played a pivotal role in initiating the successful Brendan Galvin &amp;
                            Tarsem Singh Workshop, achieving a commendable attendance percentage.
                        </p>
                        <p>⦁ Sunny Deol’s masterclass received a positive response, and the special screening of Gadar 2
                            had a good occupancy percentage of over 75%
                        </p>
                        <p>⦁ Zoya Akhtar's session for The Archies (Netflix) was handed over by the Gala Premieres team.</p>
                        <div class="row mt-4  pb-4">
                            <div class="col-md-6 col-sm-6 mb-2">
                                <img src="{{ asset('public/images/gala-premier/2nd-edition/image44.jpg') }}"
                                    alt="image" class="img-fluid img-radius-5">
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <img src="{{ asset('public/images/gala-premier/2nd-edition/image45.jpg') }}"
                                    alt="image" class="img-fluid img-radius-5">
                            </div>
                        </div>
                        <p>Addressing &amp; implementing these recommendations would undoubtedly contribute to the smoother
                            operation of future IFFI events, elevating the overall experience for participants and attendees
                            alike.&nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
