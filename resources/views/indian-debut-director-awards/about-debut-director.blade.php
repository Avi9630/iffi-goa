@extends('layouts.app')
@section('site_title', 'About Indian Debut Director Awards')
@section('site_description',
    'Highlighting Indian Debut films and honoring new directors, IFFI 2024 celebrates fresh
    perspectives and storytelling at the 55th International Film Festival.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">About Best Indian Debut Director Award</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rules-text">
                        <h5>Best Debut Indian Film Section 2024</h5>
                        <p></p>
                        <p>
                            This year, IFFI will also focus on Indian debut films, which will showcase a diverse range of
                            narratives and cinematic styles from across the country. These selections will highlight the
                            creative vision and unique storytelling approaches of young filmmakers and aims to provide a
                            platform to the young talent, showcasing the work of new directors who are contributing fresh
                            perspectives and stories to Indian cinema.
                            <br><br>
                            In addition to this, a Best Debut Director of Indian Feature Film Award will also be presented
                            at 55th International Film Festival of India, 2024. This accolade aims to honor the creativity
                            and potential of first-time directors, acknowledging their contribution to the evolution of
                            Indian cinema. By spotlighting these newcomers, the section shows IFFI's commitment to
                            encouraging the next generation of cinematic storytellers.
                            <br><br>
                        </p>
                        <P><b>Sections</b></P>
                        <ul>
                            <li>A maximum of 5 debut feature films showcasing the work of new directors who are
                                contributing fresh perspectives and stories to Indian cinema shall be selected in accordance
                                with the rules and regulations and shall be shown in the Best Debut Indian Film section.
                            </li>
                            <li>Best Debut Director of Indian Feature Film Award</li><br>
                            <p>Details are as under:</p>
                            <div class="table-responsive font-16-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"><b>Award Name</b></th>
                                            <th scope="col"><b>Description</b></th>
                                            <th scope="col"><b>Awardee</b></th>
                                            <th scope="col"><b>Award Component</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Best Debut
                                                Director of Indian
                                                Feature Film
                                                Award</th>
                                            <td> Presented to Indian Debut
                                                Director for his/her creative
                                                vision,
                                                artistic
                                                storytelling
                                                merit,
                                                and overall
                                                impact</td>
                                            <td>Director</td>
                                            <td>
                                                <ul>
                                                    <li><b>Certificate to the
                                                            Director </b></li>
                                                    <li><b>Cash Prize of Rs. 5
                                                            lakhs</b> to the Director</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <li>If the film has more than one director, the cash prize will be equally divided between
                                them.
                                <br><br>
                                <div class="col-12 text-center">
                                    <a href="https://iffigoa.org/festival/indian-debut-director"
                                        class="btn cus-prim-btn m-auto" target="_blank">Register
                                        Now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
