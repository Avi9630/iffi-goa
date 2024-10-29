@extends('layouts.app')
@section('site_title', 'IFFI Goa Rules and Regulations | NFDC | MIB')
@section('site_description',
    'Discover the rules & regulations for participating in the International Film Festival of
    India (IFFI) in Goa. Ensure compliance for a seamless experience.')
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
    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-coverage-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-12"> --}}
            <div class="rules-text screening-cont">
                <h5>The Indian Panorama Feature Films Jury Members:</h5>
                <ol>
                    <li>Shri. Manoj Joshi, Actor</li>
                    <li>Ms. Susmita Mukherjee, Actor</li>
                    <li>Shri. Himansu Sekhar Khatua, Film Director</li>
                    <li>Shri. Oinam Gautam Singh, Film Director</li>
                    <li>Shri. Ashuu Trikha, Film Director</li>
                    <li>Shri. S.M. Patil, Film Director and Writer</li>
                    <li>Shri. Neelaabh Kaul, Cinematographer and Film Director</li>
                    <li>Shri. Susant Misra, Film Director</li>
                    <li>Shri. Arun Kumar Bose, Ex HOD of Prasad Institute and Sound Engineer</li>
                    <li>Ms. Ratnottama Sengupta, Writer and Editor</li>
                    <li>Shri. Sameer Hanchate, Film Director</li>
                    <li>Ms. Priya Krishnaswamy, Film Director</li>
                </ol>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Title of the Film</th>
                            <th scope="col">Language</th>
                            <th scope="col">Director</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>SWATANTRYA VEER SAVARKAR</td>
                            <td>Hindi</td>
                            <td>Randeep Hooda</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>KEREBETE</td>
                            <td>Kannada</td>
                            <td>Gururaj B</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>VENKYA</td>
                            <td>Kannada</td>
                            <td>Sagar Puranik</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>JUIPHOOL</td>
                            <td>Assamese</td>
                            <td>Jadumoni Dutta</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>MAHAVATAR NARSIMHA</td>
                            <td>Hindi</td>
                            <td>Ashwin Kumar</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>JIGARTHANDA DOUBLE X</td>
                            <td>Tamil</td>
                            <td>Karthik Subbaraj</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>AADUJEEVITHAM</td>
                            <td>Malayalam</td>
                            <td>Blessy</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>ARTICLE 370</td>
                            <td>Hindi</td>
                            <td>Aditya Suhas Jambhale</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>GYPSY</td>
                            <td>Marathi</td>
                            <td>Shashi Chandrakant Khandare</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>SRIKANTH</td>
                            <td>Hindi</td>
                            <td>Tushar Hiranandani</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>AAMAR BOSS</td>
                            <td>Bengali</td>
                            <td>Nandita Roy, Shiboprosad Mukherjee</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>BRAMAYUGAM</td>
                            <td>Malayalam</td>
                            <td>Rahul Sadasivan</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>35 CHINNA KATHA KAADU</td>
                            <td>Telugu</td>
                            <td>Nanda Kishore Emani</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>RADOR PAKHI</td>
                            <td>Assamese</td>
                            <td>Dr. Bobby Sarma Baruah</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>GHARAT GANPATI</td>
                            <td>Marathi</td>
                            <td>Navjyot Narendra Bandiwadekar</td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>RAAVSAAHEB</td>
                            <td>Marathi</td>
                            <td>Nikhil Mahajan</td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>LEVEL CROSS</td>
                            <td>Malayalam</td>
                            <td>Arfaz Ayub</td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>KARKEN</td>
                            <td>Galo</td>
                            <td>Nending Loder</td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>BHOOTPORI</td>
                            <td>Bengali</td>
                            <td>Soukarya Ghosal</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>ONKO KI KOTHIN</td>
                            <td>Bengali</td>
                            <td>Saurav Palodhi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
