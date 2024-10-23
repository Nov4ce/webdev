<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<body class="container">
    <div class="row">
        <div class="container col-md-4" style= "margin-top: 25px;">
            <div class="container" style = "border: solid;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                
                <div class="mb-3">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="mb-3">
                    <center>
                    <button type="submit" class="btn btn-primary mb-3">Log In</button>
                    <a href="https://www.w3schools.com">Forgot Password</a>
                    </center>
                </div>
            </div>
        </div>

        <div class="container col-sm-8">
            <center>
                <H1>Pricing</H1>
                <p>Lorem ipsum dolor sit amet. Quo atque reiciendis in odit perspiciatis quo consectetur temporibus et omnis omnis ut esse repudiandae. 
                    Ut odio nihil hic provident repudiandae quo praesentium sequi sed sint corrupti. Est unde repellat sit nostrum suscipit eum omnis 
                    laudantium qui earum libero ab consectetur quia ex inventore cumque! Et dicta repellat aut unde corporis eum consequuntur officiis 
                    ea iusto dolores aut facilis consequuntur. Ab magnam nulla est velit voluptas et rerum quam quo quis distinctio aut architecto veritatis. 
                    Eos sunt architecto ab nostrum fugiat sit quas praesentium? Et animi ipsum et temporibus ullam eos eligendi voluptate aut tempora voluptates. 
                    Rem voluptatem velit qui veritatis facilis et maxime dicta ut totam sunt ut autem odio qui quia accusantium! 
                </p>
        </div>
        <div class="container col-lg-4"></div>
        <div class="container col-sm-8">            
            <div class="row">
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>
                <div class="container col-md-4 col-md-4">
                    <img src="/images/stoppls.jpg" class = "img-thumbnail"alt="">
                </div>

            </div>   
                <div class="row" style="margin-top: 50px">
                    <center>
                    <strong><h5>Compare Plans</h5></strong>
                    </center>
                </div>
                
                <div class="row" style="margin-top: 40px">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>
                   
   
    </div>
    
</body>
</html>