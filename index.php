<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #000000;
}
.main_div
{
    width:100%;
    height:100vh;
    background-image:linear-gradient(to right, #f0470a,#f0470a,#f0470a,#f0470a,#f0470a,#f0470a);
    clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%);
}
.main_text
{
    color:white;
    margin-top:120px;
    font-family: 'JetBrains Mono', monospace;
}
.big-text
{
   
    margin:20px 0;
    color:white;
    font-family: 'JetBrains Mono', monospace;
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background:linear-gradient(20deg,#f0470a 55%, #fff 0%);
    z-index: -1;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:transparent;
    color:#fff;
   
}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}
@media(min-width:400px)
{
    .main_div
    {
        max-height:1000px;
    }
    .aboutus
    {
        max-height:1000px;
    }
}
</style>
</head>

<body>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
    <img src="statics\logo1.jpg" alt="The Spark Foundation"
                    style="height: 80px; margin-left:25px; margin-top:10px;"></a>
      <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>SPARKS BANK</h2></a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="#row" class="nav-link text-white "><span style="margin-left:-700px;">HOME</span></a></li>
              <li class="nav-item">
              <li class="nav-item">
                  <a href="#about" class="nav-link text-white "><span style="margin-left:-530px;">ABOUT</span></a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link text-white "><span style="margin-left:-300px;">VIEW CUSTOMER</span></a></li>
              <li class="nav-item">
                  <a href="transfermoney.php" class="nav-link text-white"></a></li>
              <li class="nav-item">
                  <a href="#contact" class="nav-link text-white"><span style="margin-left:-100px;">CONTACT</span></a></li>    
               </ul>
        </div>
     </div>

     <div class="container" style="margin-top:-10px;">
        <div class="row">

          <div class="col-sm-6">
            <h1 class="main_text">THE SPARKS FOUNDATIONS BANK</h1>
            <p style="text-align: justify;"class="big-text">“Business and life are like a bank account you can’t take out more than you put in. If banks cannot truly be customer intimate, they are doomed to be just dumb commodities, acting behind the scenes, like utilities.However, you’ll start with the same writing process. Let’s explore the set-by-step guide to building your about page.Every business has a story to tell. Even if you’re running a startup with a brief history, you’ll want to share your company’s progress. Talk about how you got to where you are today on your about page.</p>
          </div>

          <div class="col-sm-6">
            
            <img src="images/12.png" class="img-fluid" width="750" height="745" style="margin-top:100px;margin-left:100px">
           
          </div>

       </div>
       
    </div>

</div>

</div>

<!-- About Us Starts-->
<section class="aboutus" id="about" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">ABOUT US</h1>
        
        </div>
        <div class="container">
       
        <img src="images/Ab1.jpg" class="img-fluid" width="560" height="345" style="margin-top:20px;"> 
        
            <div class="row">
                <div class="col-lg-10 col-md-10 col-10 offset-lg-2 offet-md-2-col col-1">

                    <form action="/action_page.php">
                
                        <p style="font-weight:italic;text-align: justify; margin-top:-360px; margin-left:400px">A remarkable about page is genuine, approachable, and distinguished. It should give the visitor a glimpse into what working with you might be like. You can include personal interests, stories, and photos that convey the unique story of your business. <br>You may also include information about who’s on your team and what their roles are. About pages are personal to you and your company, so the structure of your about page will vary based on what you want to highlight. However, you’ll start with the same writing process. Let’s explore the set-by-step guide to building your about page.Every business has a story to tell. Even if you’re running a startup with a brief history, you’ll want to share your company’s progress. Talk about how you got to where you are today on your about page.</p>
                                  <div class="formbutton" style="display: flex;justify-content: center; margin-left:30px">
                        <button type="submit" >Read More</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>
       

  <!--contact starts-->
  <section class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
        
       </section>
</body>
</html>