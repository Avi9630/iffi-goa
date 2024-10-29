@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa 2024 International Festival Venues')
@section('site_description',
    'Discover the vibrant festival venues of IFFI Goa 2024. Get detailed information on
    locations, facilities, and events happening at each venue.')
@section('site_keywords',
    'IFFI Goa information, IFFI event venue, About IFFI venue, Festival location details, IFFI
    history and venue, Film festival India, Film festival venue, IFFI international film festival')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">International Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="row  align-items-center ">
                    <div class="col-md-7 ">
                        <div class="international-jury-text">
                            <h2 class="mt-3">Ashutosh Gowariker</h2>
                            <h5>Film maker</h5>
                            <p>
                                Ashutosh Gowariker, an actor turned filmmaker from India, gained cinematic immortality with
                                the cross-cultural period sports drama Lagaan, which earned worldwide acclaim and an Oscar
                                nomination. He founded Ashutosh Gowariker Productions, producing acclaimed films like Swades
                                and Jodhaa Akbar. His diverse repertoire includes romantic comedies, patriotic thrillers,
                                and war epics like Mohenjo Daro and Panipat. Gowariker's films address nationalism,
                                patriarchy, religious tolerance, and women's empowerment. A member of the Director's Branch
                                in the Academy in Los Angeles, he is known for both historical epics and contemporary
                                stories with profound themes.
                                <br><br>
                                Ashutosh Gowariker, an acclaimed Indian filmmaker and former actor, is best known for his
                                monumental work in cinema, particularly with the cross-cultural period sports drama Lagaan.
                                Released in 2001, this film earned worldwide acclaim and even received an Oscar nomination,
                                securing Gowariker's place in cinematic history. Following this success, he founded Ashutosh
                                Gowariker Productions, where he has produced several notable films, including the highly
                                regarded Swades and Jodhaa Akbar.Gowariker’s diverse filmography spans various genres,
                                including romantic comedies, patriotic thrillers, and epic war dramas such as Mohenjo Daro
                                and Panipat. His films often explore profound themes, addressing crucial social issues such
                                as nationalism, patriarchy, religious tolerance, and women’s empowerment. By intertwining
                                rich narratives with relevant social commentary, he has established himself as a significant
                                voice in Indian cinema.In addition to his filmmaking prowess, Gowariker is a member of the
                                Director's Branch of the Academy in Los Angeles, reflecting his international recognition
                                and influence. With a commitment to creating both historical epics and contemporary stories,
                                he continues to leave a lasting impact on audiences worldwide.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <div>
                            <img src="{{ asset('public/images/jury/international-jury/Ashutosh Gowariker.jpg') }}"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row  align-items-center ">
                    <div class="col-md-5 ">
                        <div>
                            <img src="{{ asset('public/images/jury/international-jury/Anthony Chen profile photo 2023 colour.jpg') }}"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="international-jury-text" style="padding-right: 30px;">
                            <h2>Anthony Chen</h2>
                            <h5>Writer, Director & Producer </h5>
                            <p>A well renowned writer, director, and producer from Singapore. Chen's short film, Ah Ma
                                (2007), made him the first Singaporean filmmaker to win at Cannes. His debut feature, Ilo
                                Ilo won the Caméra d'Or. Wet Season, his second film was nominated for the Platform Prize at
                                the Toronto International Film Festival. Both the movies were Singapore's official entries
                                to the Oscars. Drift 2023, his first English film, was premiered at Sundance and The
                                Breaking Ice, his first Chinese feature was screened at Cannes. He produces films under the
                                Giraffe Pictures banner.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row  align-items-center ">
                    <div class="col-md-7 ">
                        <div class="international-jury-text">
                            <h2>Elizabeth Karlsen</h2>
                            <h5>Film Producer </h5>
                            <p>Elizabeth Karlsen, a highly respected UK producer, co-founded Number 9 Films in 2002 with
                                Stephen Woolley. She and Woolley received the BAFTA Award for Outstanding British
                                Contribution to Cinema in 2019. Elizabeth has produced acclaimed films like Carol, Little
                                Voice, Made in Dagenham, Mrs. Harris, and Colette. Her work has garnered 52 BAFTA
                                nominations and 20 Academy Award nominations. Upcoming films include The Salt Path, The
                                Assessment, and A Pale View of Hills.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <img src="{{ asset('public/images/jury/international-jury/Elizabeth Karlsen[87].jpg') }}"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row  align-items-center ">
                    <div class="col-md-5 ">
                        <div>
                            <img src="{{ asset('public/images/jury/international-jury/FRAN BORGIA.jpg') }}"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="international-jury-text" style="padding-right: 30px;">
                            <h2>Fran Borgia</h2>
                            <h5>Film Producer </h5>
                            <p>
                                Born in Spain, Fran Borgia is an established Asian producer with many award-winning films.
                                He founded Akanga Film Asia, an independent production company in Singapore. His has to his
                                credit, movies like A Lullaby to the Sorrowful Mystery (Silver Bear Winner), A Yellow Bird,
                                A Land Imagined (Golden Leopard Winner), Yuni (Platform Prize Winner), Tiger Stripes (Grand
                                Prize Winner), Oasis of Now, Stranger Eyes (Golden Lion competitor), and Village Rockstars 2
                                (Jiseok Award Winner).
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row  align-items-center ">
                    <div class="col-md-7 ">
                        <div class="international-jury-text">
                            <h2 class="mt-3">Jill Bilcock</h2>
                            <h5>Film Editor </h5>
                            <p>Jill Bilcock gained international attention with A Cry in the Dark and forged a lasting
                                collaboration with Baz Luhrmann. Her influential editing in films like Strictly Ballroom,
                                Romeo and Juliet, and Moulin Rouge introduced modern techniques to classic genres. She
                                edited high-grossing films such as Muriel's Wedding, Red Dog, The Dish, and The Dressmaker.
                                Jill has also worked with directors like Shekhar Kapur on Elizabeth and The Golden Age, Sam
                                Mendes on Road to Perdition, and Guillermo del Toro on Don't Be Afraid of the Dark. </p>
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <div>
                            <img src="{{ asset('public/images/jury/international-jury/Jil-Bilcock.jpg') }}"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
