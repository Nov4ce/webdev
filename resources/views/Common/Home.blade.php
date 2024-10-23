@extends('Layout/main-master2')

<style>
    .card:hover {
        transform: scale(1.1);
    }
    .card {
        transition: transform 0.3s; 
    }
    
</style>

@section('content')
<!-- CAROUSEL -->
<div class="row">
    <!-- CAROUSEL BOOTSTRAP CODE-->
    <div id="carouselExampleIndicators" class="carousel slide" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/worlds.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/venue.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/faker.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>

</div>

<!-- ACCORDION AND CARDS -->
<div class="container" > 
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <!-- ACCORDION BOOTSTRAP CODE -->
          <div class="accordion " id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong>WORLDS 2024 CHAMPIONSHIP</strong> 
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                The <strong>2024 Season World Championship (Worlds 2024)</strong> is the conclusion of the 2024 League of Legends esports season. 
                The tournament will be held in Europe, with finals in London.
  
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan = "2" style = "background-color: rgb(173, 223, 255);"><center>Tournament Information</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Organizer</th>
                      <td>Riot Games</td>
                    </tr>
                    <tr>
                      <th colspan = "2" style = "background-color: rgb(173, 223, 255);"><center>Location & Dates</th>
                    </tr>
                    <tr>
                      <th scope="row">Region</th>
                      <td>International</td>
                    </tr>
                    <tr>
                      <th scope="row">Event Type</th>
                      <td>Offline</td>
                    </tr>

                    <tr>
                      <th rowspan = "3" valign = "top" scope = "row">Address</td>
                      <td colspan="2" style = "border-bottom-style: hidden;">Germany</td>
                    </tr>
                    <tr>
                      <td colspan="2" style = "border-bottom-style: hidden;">France</td>
                    </tr>
                    <tr>
                      <td colspan="2">United Kingdom</td>
                    </tr>
              

                    <!-- <tr>
                      <th scope="row" style = "border-bottom-style: hidden;">Address</th>
                      <td  style = "border-bottom-style: hidden;">Germany</td>
                    </tr>
                    <tr>
                      <th style = "border-bottom-style: hidden;"></th>
                      <td  style = "border-bottom-style: hidden;">France</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td >United Kingdom</td>
                    </tr> -->

                    <tr>
                      <th scope="row">Start Date</th>
                      <td >2024-09-25</td>
                    </tr>
                    <tr>
                      <th scope="row">End Date</th>
                      <td>2024-11-02</td>
                    </tr>

                    <tr>
                      <th colspan = "2" style = "background-color: rgb(173, 223, 255);"><center>Broadcast </center> </th>
                    </tr>

                    <tr>
                      <th rowspan = "2" valign = "top" scope = "row">Streams</td>
                      <td style = "border-bottom-style: hidden;">Twitch</td>
                    </tr>
                    <tr style = "border-bottom-style: hidden;">
                      <td colspan="2"><a href="https://lol.fandom.com/wiki/2024_Season_World_Championship#Streams">Full List</a></td>
                    </tr>

                  </tbody>
                </table>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <strong>FORMAT</strong> 
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  
                <ul>
                  <li><strong>20 teams are invited:</strong>
                    <ul>
                      <li>4 from  Korea</li>
                      <li>4 from  China</li>
                      <li>3 from  EMEA</li>
                      <li>3 from  North America</li>
                      <li>2 from  Asia-Pacific</li>
                      <li>2 from  Vietnam</li>
                      <li>1 from  Brazil</li>
                      <li>1 from  Latin America</li>
                    </ul>
                  </li>

                  <li><strong>Stage 1 (Play-In)</strong>
                    <ul>
                      <li>8 teams participate</li>
                      <li>Teams are drawn into two double-elimination brackets</li>
                        <ul>
                          <li>Matches are best of three</li>
                          <li>Loser from Upper Round 2 will play with Winner from Lower Round 1 of other bracket</li>
                        </ul>
                      <li>Top 4 teams advance to Stage 2</li>
                    </ul>
                  </li>

                  <li><strong>Stage 2 (Swiss)</strong>
                    <ul>
                      <li>16 teams participate</li>
                        <ul>
                          <li>12 teams prequalified for Stage 2 + the 4 qualifiers of Stage 1</li>
                        </ul>
                      <li>Swiss-style format with five rounds</li>
                        <ul>
                          <li>Rematches within Swiss Stage are not permitted</li>
                        </ul>
                      <li>Matchups will be drawn at the end of each round</li>
                      <li>Teams with three wins advance to Stage 3, while teams with three losses are eliminated</li>
                      <li>Qualification and Elimination matches are best of three; all other matches are best of one</li>
                    </ul>
                  </li>

                  <li><strong>Stage 3 (Knockout)</strong>
                    <ul>
                      <li>Eight qualifiers from Stage 2 participate</li>
                      <li>Single elimination bracket</li>
                      <li>Matches are best of five</li>
                    </ul>
                  </li>
                </ul>

                <strong style="font-size:large;">Prize Pool</strong>
                <ul>
                  <li>Figures are based on the minimum guaranteed prize pool of $ 2,225,000 USD. A percentage of the revenue from designated in-client sales is yet to be added to this amount.</li>
                </ul>
                
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <strong> PRIZE POOL</strong>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <ul>
                  <li>Figures are based on the minimum guaranteed prize pool of $ 2,225,000 USD. 
                    A percentage of the revenue from designated in-client sales is yet to be added to this amount.
                  </li>
                </ul>
                </div>
              </div>
            </div>
          </div>
      
      </div>

      <!-- CARDS BOOTSTRAP CODE -->
      <div class="col-8">
        <div class="container">
          <div class="row">

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem;">
                  <img src="/images/Untitled1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://lolesports.com/en-PH/news/introducing-league-of-legends-championship-pacific">INTRODUCING LEAGUE OF LEGENDS CHAMPIONSHIP PACIFIC!</a></h5>
                    <p class="card-text">September 30, 2024</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem; height: 17.7rem">
                  <img src="/images/new2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://lolesports.com/en-PH/news/dev-diary-unveiling-the-global-power-rankings">Dev Diary: Unveiling the Global Power Rankings</a></h5>
                    <p class="card-text">September 24, 2024</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem; height: 17.7rem"">
                  <img src="/images/news3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://lolesports.com/en-PH/news/2024-worlds-anthem-artist">2024 Worlds Anthem Artist</a></h5>
                    <p class="card-text">September 23, 2024</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem; height: 17.7rem"">
                  <img src="/images/news4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://lolesports.com/en-PH/news/introducing-lol-esports-global-power-rankings-powered-by-aws">Introducing LoL Esports Global Power Rankings powered by AWS!</a></h5>
                    <p class="card-text">September 20, 2024</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem; height: 17.7rem"">
                  <img src="/images/news5.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://lolesports.com/en-PH/news/worlds-2024-virtual-co-streamers">Worlds 2024 Virtual Co-Streamers</a></h5>
                    <p class="card-text">September 19, 2024</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-bottom: 25px;">
                <div class="card" style="width: 15rem; height: 17.7rem"">
                  <img src="/images/news6.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="https://www.youtube.com/watch?v=GuMrFy5YPI0&ab_channel=LoLEsports">Worlds 2024 | Make Them Believe</a></h5>
                    <p class="card-text">September 17, 2024</p>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <br>
</div>

@endsection