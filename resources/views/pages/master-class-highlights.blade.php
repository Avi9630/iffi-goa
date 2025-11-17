{{-- <div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Showcasing 55<sup>th</sup> IFFI</p>
            <h2>Master class</h2>
        </div>
        <div class="owl-carousel">
            @foreach ($datas as $data)
                <div class="item card">
                    <img src='{{ $data->img_url }}' alt="{{ $data->image }}" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div> --}}

<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <p>Showcasing 56<sup>th</sup> IFFI</p>
            <h2>Master class</h2>
        </div>
        <div class="row m-0 master-row ">
            <div class="col-sm-8">
                <div class="owl-carousel-masterclass">
                    @foreach ($datas as $data)
                        <div class="item card">
                            <img src='{{ $data->img_url }}' alt="{{ $data->image }}" class="img-fluid">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4">
                <div class="calendar">
                    <div class="month">November 2025</div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days">
                        <div class="empty"></div>
                        <div class="empty"></div>
                        <div class="empty"></div>
                        <div class="empty"></div>
                        <div class="empty"></div>
                        <div class="empty"></div>
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        <div>10</div>
                        <div>11</div>
                        <div>12</div>
                        <div>13</div>
                        <div>14</div>
                        <div>15</div>
                        <div>16</div>
                        <div>17</div>
                        <div>18</div>
                        <div>19</div>
                        {{-- <div class="today"><a href="{{ route('master-classes-56th#nov21') }}">20</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">21</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">22</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">23</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">24</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">25</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">26</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">27</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}">28</a></div> --}}
                        <div>20</div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov21">21</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov22">22</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov23">23</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov24">24</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov25">25</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov26">26</a></div>
                        <div class="today"><a href="{{ route('master-classes-56th') }}#nov27">27</a></div>
                        <div>28</div>
                        <div>29</div>
                        <div>30</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
