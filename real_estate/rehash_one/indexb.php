$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM scheduler");

echo $result;



mysqli_close($con);


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
        <link rel="stylesheet" href="main.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript">
var string =   <?php
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM scheduler");

echo $result;



mysqli_close($con);
?>

console.log(string);
</script> -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/css/bootstrapvalidator.min.css //cdnjs.cloudflare.com/ajax/libs"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script> -->
</head>
<body>






<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a id="home" >Home</a></li>
      <li><a id="prop">Property Listings</a></li>
      <li><a id="notary">Notary</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

  </div>

</nav>


  
<div id="nav-content" class="container">
<div id="home-sec" class="hidden">
  HOME PAGE
</div> 
<div id="prop-sec" class="hidden">
  
  <div class="search-container">
<div class="input-group">
  <input type="text" class="form-control" placeholder="Enter your city...">
      <span class="input-group-btn">
        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
</div>
</div>

<div class="blk_space">
</div>


<div class="row row_margin_bottom">

    <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn1.jpg"  ></div>
    </a>


    <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>

    </div>







        <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn2.jpg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>

        <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn3.jpg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>
    <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn9.jpeg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>


</div>
<div class="row">
    <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn4.jpeg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>
        <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn5.jpeg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>
        <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn6.jpg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>
    <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">
    <a href="home.html">
      <div class="" style=" "><img alt=" " class="img_tile" src="houses/frsn10.jpg"  ></div>
    </a>
        <div class="row img__bed">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Beds
    </p>
  </div>
  <div class="row img__bath">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1 Baths</p>
  </div>
  <div class="row img__sq">
    <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 img__description p-font">1080 sq</p>
  </div>
  <div class="row img__sqL">
    <p class="col-xs-10 col-sm-10 col-md-10 col-lg-10 img__description p-font">1923 sq</p>
  </div>
    </div>
<!--     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">.col-md-4</div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">.col-md-4</div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">.col-md-4</div> -->
</div>


<!-- <div id="overlay_test" class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style=" "><img alt=" " class="" src="houses/frsn1.jpg"  ></div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style=" "><img alt=" " class="" src="houses/frsn1.jpg"  ></div>
</div> -->


</div> 

<div id="notary-sec" class="hidden">
<!--   NOTARY -->

<div id="notary-search" class="search-container">
<div class="input-group">
  <input type="text" class="form-control" placeholder="Enter your zipcode...">
      <span class="input-group-btn">
        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
</div>
</div>


<div class="blk_space">
</div>


<div id="thanksnote" class="hidden"> <i class="glyphicon glyphicon-thumbs-up"></i> An email confirmation has been sent confirming your appointment!</div>






    <div class="row row_margin_bottom">

<div class="blk_space">
</div>



<div class="blk_space">
</div>


<table id="schedule" class="calendar table table-bordered">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th width="20%">Sunday</th>
            <th width="20%">Monday</th>
            <th width="20%">Tuesday</th>
            <th width="20%">Wednesday</th>
            <th width="20%">Thursday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>08:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>08:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:00</td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a><span class="location"></span>

                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events conflicts " rowspan="1">

                <div class="row-fluid lecture" style="width: 49.5%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>

                <div class="row-fluid lecture" style="width: 49.5%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>14:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

        </tr>
        <tr>
            <td>14:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>16:00</td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

            <td class=" has-events" rowspan="1">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Available</span> <span class="lecturer"><a></a></span> <span class="location"></span>
                </div>
            </td>

        </tr>
        <tr>
            <td>16:30</td>

        </tr>
        <tr>
            <td>17:00</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>17:30</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
    </tbody>
</table>



   <!--  <div class="row">

      <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        11/21/2107
    </div>

    </div>

    <div class="blk_space">
</div>

    
    

<div class="row">


    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">

    8AM

    </div>

        
    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    10AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    11AM



    </div>







        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        12PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    1PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    2PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    3PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    4PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    5PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    6PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    7PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    8PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9PM


    </div>

    </div>





    <div class="row">

      <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        11/21/2107
    </div>

    </div>

    <div class="blk_space">
</div>

    
    
<div class="row">



    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">

    8AM

    </div>

        
    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    10AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    11AM



    </div>







        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        12PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    1PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    2PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    3PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    4PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    5PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    6PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    7PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    8PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9PM


    </div>
    </div>



    <div class="row">

      <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        11/21/2107
    </div>

    </div>

    <div class="blk_space">
</div>

    
    


<div class="row">

    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">

    8AM

    </div>

        
    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    10AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    11AM



    </div>







        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        12PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    1PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    2PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    3PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    4PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    5PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    6PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    7PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    8PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9PM


    </div>
    </div>


    <div class="row">

      <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        11/21/2107
    </div>

    </div>

    <div class="blk_space">
</div>

    
    
<div class="row">



    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">

    8AM

    </div>

        
    <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    10AM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    11AM



    </div>







        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
        12PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    1PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    2PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    3PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    4PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    5PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    6PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    7PM



    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    8PM


    </div>

        <div  class="col-xs-1 col-sm-1 col-md-1 col-lg-1 panel_margin">
    9PM


    </div>


</div>









    







    </div> -->

    </div>


<!-- <div class="choose-date-time" style="">
    
    <div id="selected-times-container" style="display: none;">
      <a name="selectedTimes"></a>
      <a href="#" class="btn btn-primary btn-next-step-top btn-next-step" style="display:none">Continue »</a>
      <div id="selected-times"></div>
      <a href="#" class="btn btn-primary btn-next-step">Continue »</a>
    </div>

    <div class="choose-date choose-date-times">   <div class="calendar-prev-next" id="calendar-prev-next">
      <a name="calendar-top"></a>
      
      <a href="javascript:self.showCalendar('2017-12-02', %7B%22nextprev%22%3A%7B%222017-12-02%22%3A%222017-11-21%22%7D%7D)" class="calendar-next"><span>More Times</span> <i class="fa fa-chevron-right"></i></a>
    </div>
    <div class="clearfix calendar"></div>
          <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">Tomorrow</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 22</div>
        </div>
        <div class="choose-time">
        <div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 08:00" id="appt1511366400">
<label id="lbl_appt1511366400" for="appt1511366400">8:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 09:00" id="appt1511370000">
<label id="lbl_appt1511370000" for="appt1511370000">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 10:00" id="appt1511373600">
<label id="lbl_appt1511373600" for="appt1511373600">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 11:00" id="appt1511377200">
<label id="lbl_appt1511377200" for="appt1511377200">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 12:00" id="appt1511380800">
<label id="lbl_appt1511380800" for="appt1511380800">12:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 13:00" id="appt1511384400">
<label id="lbl_appt1511384400" for="appt1511384400">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 14:00" id="appt1511388000">
<label id="lbl_appt1511388000" for="appt1511388000">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 15:00" id="appt1511391600">
<label id="lbl_appt1511391600" for="appt1511391600">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 17:00" id="appt1511398800">
<label id="lbl_appt1511398800" for="appt1511398800">5:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">Next Week</div>
          <div class="day-of-week babel-ignore">Tuesday</div>
          <div class="date-secondary babel-ignore">November 28</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 12:00" id="appt1511899200">
<label id="lbl_appt1511899200" for="appt1511899200">12:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 13:00" id="appt1511902800">
<label id="lbl_appt1511902800" for="appt1511902800">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 14:00" id="appt1511906400">
<label id="lbl_appt1511906400" for="appt1511906400">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 15:00" id="appt1511910000">
<label id="lbl_appt1511910000" for="appt1511910000">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 16:00" id="appt1511913600">
<label id="lbl_appt1511913600" for="appt1511913600">4:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 29</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 08:00" id="appt1511971200">
<label id="lbl_appt1511971200" for="appt1511971200">8:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 09:00" id="appt1511974800">
<label id="lbl_appt1511974800" for="appt1511974800">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 10:00" id="appt1511978400">
<label id="lbl_appt1511978400" for="appt1511978400">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 11:00" id="appt1511982000">
<label id="lbl_appt1511982000" for="appt1511982000">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 13:00" id="appt1511989200">
<label id="lbl_appt1511989200" for="appt1511989200">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 14:00" id="appt1511992800">
<label id="lbl_appt1511992800" for="appt1511992800">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 15:00" id="appt1511996400">
<label id="lbl_appt1511996400" for="appt1511996400">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 16:00" id="appt1512000000">
<label id="lbl_appt1512000000" for="appt1512000000">4:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 17:00" id="appt1512003600">
<label id="lbl_appt1512003600" for="appt1512003600">5:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Thursday</div>
          <div class="date-secondary babel-ignore">November 30</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 09:00" id="appt1512061200">
<label id="lbl_appt1512061200" for="appt1512061200">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 10:00" id="appt1512064800">
<label id="lbl_appt1512064800" for="appt1512064800">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 15:00" id="appt1512082800">
<label id="lbl_appt1512082800" for="appt1512082800">3:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available" style="opacity: 0.01;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Friday</div>
          <div class="date-secondary babel-ignore">December  1</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-12-01" value="2017-12-01 11:00" id="appt1512154800">
<label id="lbl_appt1512154800" for="appt1512154800">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-12-01" value="2017-12-01 13:00" id="appt1512162000">
<label id="lbl_appt1512162000" for="appt1512162000">1:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available" style="opacity: 0.03;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div></div>

    <div class="choose-time-actions" style="display:none">
      <a href="#" class="btn btn-primary btn-block btn-next-step">Continue »</a>
              <a href="#" class="btn btn-default btn-block btn-recurring">Recurring...</a>
          </div>
    <div class="clearfix"></div>
  </div> -->




<!---notary 2nd panel-->

<!-- <div class="business-container all-steps-visible step-pane logo-is-visible">
  <div class="business-logo-container" style="margin-bottom: -80px;">
    <img src="//s3.amazonaws.com/acuitys/logo13960150.png?1500584293&amp;hasAlpha=1" class="business-logo" alt="The Clinic">
      </div>

  <div class="business-content-logo-adjust-container">
    <div class="heading-actions">
      <div class="login-container client-login">
        Returning? <a href="client-login.php?owner=13960150&amp;PHPSESSID=lh0e2aio9lqs6t9ui4o4qu6ku3&amp;returnUrl=%2Fschedule.php%3Fowner%3D13960150%26" class="client-login-btn branded">Log in</a>
      </div>
    </div>

    
    <div class="babel-ignore business-description">
      <p>The Clinic direct bills most insurance plans. We are covered under “out of network” benefits. If you would like more information about insurance coverage or would like to schedule with a specific provider, please call our office at 415-843-1523.</p><p>To schedule a follow-up visit, please contact your provider or our scheduling staff at 415-843-1523 (info@theclinicca.org).</p>
    </div>
  </div>





  </div>





<div class="step-pane" id="step-pick-appointment" data-step="pick-appointment">

  <h2 class="step-title">
    <span class="step-number">1</span>
    Schedule Appointment
  </h2>

  
  <div class="pane-content" style="display: none;">
      <div class="select select-type many-types closed" data-value="3983428">
          <span class="reopen-dropdown fa fa-pencil"></span>
          
          <div class="group-quantity-container">
            Quantity: <input type="number" id="group-quantity" class="form-control inline-field" min="1" value="1" size="1">
          </div>

                                                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3983428" value="3983428">
              <label class="select-item babel-ignore" for="appointmentType-3983428">
                                                <span class="appointment-type-name">Downtown - San Francisco Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$250.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3993184" value="3993184">
              <label class="select-item babel-ignore" for="appointmentType-3993184" style="display: none;">
                                                <span class="appointment-type-name">Downtown - San Francisco Medication Evaluation</span>
                <div class="duration-container"><span class="duration">1 hour 15 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$385.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3631459" value="3631459">
              <label class="select-item babel-ignore" for="appointmentType-3631459" style="display: none;">
                                                <span class="appointment-type-name">Pacific Heights - San Francisco Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$250.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3679191" value="3679191">
              <label class="select-item babel-ignore" for="appointmentType-3679191" style="display: none;">
                                                <span class="appointment-type-name">Pacific Heights - San Francisco Medication Evaluation</span>
                <div class="duration-container"><span class="duration">1 hour 15 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$385.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3711315" value="3711315">
              <label class="select-item babel-ignore" for="appointmentType-3711315" style="display: none;">
                                                <span class="appointment-type-name">Palo Alto Medication Evaluation Appointment</span>
                <div class="duration-container"><span class="duration">1 hour 15 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$675.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3679215" value="3679215">
              <label class="select-item babel-ignore" for="appointmentType-3679215" style="display: none;">
                                                <span class="appointment-type-name">Palo Alto Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$295.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3679212" value="3679212">
              <label class="select-item babel-ignore" for="appointmentType-3679212" style="display: none;">
                                                <span class="appointment-type-name">San Jose Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$250.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3679656" value="3679656">
              <label class="select-item babel-ignore" for="appointmentType-3679656" style="display: none;">
                                                <span class="appointment-type-name">Video-Medicine Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$250.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                              <input type="radio" name="appointmentType" data-is-group="0" id="appointmentType-3679680" value="3679680">
              <label class="select-item babel-ignore" for="appointmentType-3679680" style="display: none;">
                                                <span class="appointment-type-name">Video-Medicine Medication Evaluation Appointment</span>
                <div class="duration-container"><span class="duration">1 hour 15 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$385.00</span></span></div>
                                <div class="clearfix"></div>
              </label>
                                                
                              <div class="clearfix"></div>
        </div>

        
                <div class="select select-calendar" style="display: none;" data-value="any">
          <span class="reopen-dropdown fa fa-pencil"></span>
          <div class="select-label">With...</div>
          <div id="select-calendar-options"><input type="radio" name="calendar" value="any" checked="checked"></div>
        </div>
  <div class="choose-date-time" style="">
    
    <div id="selected-times-container" style="display: block;">
      <a name="selectedTimes"></a>
      <a href="#" class="btn btn-primary btn-next-step-top btn-next-step" style="display:none">Continue »</a>
      <div id="selected-times"><div class="selected-time" id="selected-time-0"><input type="hidden" name="date[]" value="2017-11-22"><input type="hidden" name="time[]" value="2017-11-22 08:00"><span class="selected-time-description">November 22, 2017 at 8:00am</span><a href="#" class="remove"><i class="fa fa-trash" title="Remove"></i></a></div></div>
      <a href="#" class="btn btn-primary btn-next-step">Continue »</a>
    </div>

    <div class="choose-date choose-date-times">   <div class="calendar-prev-next" id="calendar-prev-next">
      <a name="calendar-top"></a>
      
      <a href="javascript:self.showCalendar('2017-12-02', %7B%22nextprev%22%3A%7B%222017-12-02%22%3A%222017-11-21%22%7D%7D)" class="calendar-next"><span>More Times</span> <i class="fa fa-chevron-right"></i></a>
    </div>
    <div class="clearfix calendar"></div>
          <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">Tomorrow</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 22</div>
        </div><div class="date-heading sticky-cloned" style="width: 1px;">
          <div class="date-head-text">Tomorrow</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 22</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 08:00" id="appt1511366400">
<label id="lbl_appt1511366400" for="appt1511366400" class="checked">8:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 09:00" id="appt1511370000">
<label id="lbl_appt1511370000" for="appt1511370000">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 10:00" id="appt1511373600">
<label id="lbl_appt1511373600" for="appt1511373600">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 11:00" id="appt1511377200">
<label id="lbl_appt1511377200" for="appt1511377200">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 12:00" id="appt1511380800">
<label id="lbl_appt1511380800" for="appt1511380800">12:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 13:00" id="appt1511384400">
<label id="lbl_appt1511384400" for="appt1511384400">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 14:00" id="appt1511388000">
<label id="lbl_appt1511388000" for="appt1511388000">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 15:00" id="appt1511391600">
<label id="lbl_appt1511391600" for="appt1511391600">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-22" value="2017-11-22 17:00" id="appt1511398800">
<label id="lbl_appt1511398800" for="appt1511398800">5:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available sticky-more-times" style="opacity: 0.4;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">Next Week</div>
          <div class="day-of-week babel-ignore">Tuesday</div>
          <div class="date-secondary babel-ignore">November 28</div>
        </div><div class="date-heading sticky-cloned" style="width: 1px;">
          <div class="date-head-text">Next Week</div>
          <div class="day-of-week babel-ignore">Tuesday</div>
          <div class="date-secondary babel-ignore">November 28</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 12:00" id="appt1511899200">
<label id="lbl_appt1511899200" for="appt1511899200">12:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 13:00" id="appt1511902800">
<label id="lbl_appt1511902800" for="appt1511902800">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 14:00" id="appt1511906400">
<label id="lbl_appt1511906400" for="appt1511906400">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 15:00" id="appt1511910000">
<label id="lbl_appt1511910000" for="appt1511910000">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-28" value="2017-11-28 16:00" id="appt1511913600">
<label id="lbl_appt1511913600" for="appt1511913600">4:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available sticky-more-times" style="opacity: 0.4;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 29</div>
        </div><div class="date-heading sticky-cloned" style="width: 1px;">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Wednesday</div>
          <div class="date-secondary babel-ignore">November 29</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 08:00" id="appt1511971200">
<label id="lbl_appt1511971200" for="appt1511971200">8:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 09:00" id="appt1511974800">
<label id="lbl_appt1511974800" for="appt1511974800">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 10:00" id="appt1511978400">
<label id="lbl_appt1511978400" for="appt1511978400">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 11:00" id="appt1511982000">
<label id="lbl_appt1511982000" for="appt1511982000">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 13:00" id="appt1511989200">
<label id="lbl_appt1511989200" for="appt1511989200">1:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 14:00" id="appt1511992800">
<label id="lbl_appt1511992800" for="appt1511992800">2:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 15:00" id="appt1511996400">
<label id="lbl_appt1511996400" for="appt1511996400">3:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 16:00" id="appt1512000000">
<label id="lbl_appt1512000000" for="appt1512000000">4:00pm</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-29" value="2017-11-29 17:00" id="appt1512003600">
<label id="lbl_appt1512003600" for="appt1512003600">5:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available sticky-more-times" style="opacity: 0.4;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Thursday</div>
          <div class="date-secondary babel-ignore">November 30</div>
        </div><div class="date-heading sticky-cloned" style="width: 1px;">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Thursday</div>
          <div class="date-secondary babel-ignore">November 30</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 09:00" id="appt1512061200">
<label id="lbl_appt1512061200" for="appt1512061200">9:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 10:00" id="appt1512064800">
<label id="lbl_appt1512064800" for="appt1512064800">10:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-11-30" value="2017-11-30 15:00" id="appt1512082800">
<label id="lbl_appt1512082800" for="appt1512082800">3:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available sticky-more-times" style="opacity: 0.4;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div>      <div class="date  activeday">
        <div class="date-heading">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Friday</div>
          <div class="date-secondary babel-ignore">December  1</div>
        </div><div class="date-heading sticky-cloned" style="width: 1px;">
          <div class="date-head-text">&nbsp;</div>
          <div class="day-of-week babel-ignore">Friday</div>
          <div class="date-secondary babel-ignore">December  1</div>
        </div>
        <div class="choose-time"><div class="form-inline"><input type="radio" class="time-selection" name="time[]" data-readable-date="2017-12-01" value="2017-12-01 11:00" id="appt1512154800">
<label id="lbl_appt1512154800" for="appt1512154800">11:00am</label><br>

<input type="radio" class="time-selection" name="time[]" data-readable-date="2017-12-01" value="2017-12-01 13:00" id="appt1512162000">
<label id="lbl_appt1512162000" for="appt1512162000">1:00pm</label><br>

</div> <a href="#calendar-top" class="more-times-available sticky-more-times" style="opacity: 0.4;"><i class="fa fa-angle-up"></i><br>Earlier Times<br>Available</a></div>
      </div></div>

    <div class="choose-time-actions" style="display: none; top: 666.5px; left: 2px;">
      <a href="#" class="btn btn-primary btn-block btn-next-step">Continue »</a>
              <a href="#" class="btn btn-default btn-block btn-recurring">Recurring...</a>
          </div>
    <div class="clearfix"></div>
  </div>  </div> 
  <div class="pane-collapsed" style="">
        <a href="#" class="change-pick-appointment" aria-label="Change Appointment Type or Time"><i class="fa fa-pencil"></i></a>
    <div class="pane appt-summary-pane">
      <div id="forms-appt-summary" class="babel-ignore">
                                                <span class="appointment-type-name">Downtown - San Francisco Intake Appointment</span>
                <div class="duration-container"><span class="duration">50 minutes</span> <span class="at-desc">@</span> <span class="price"><span>$250.00</span></span></div>
                                
               on November 22, 2017 at 8:00am<div class="clearfix"></div></div>
    </div>
      </div>
</div>

<div class="step-pane" id="step-forms-pane" data-step="forms">
  <h2 class="step-title">
    <span class="step-number">2</span>
    Your Information
  </h2>

  <div class="pane-content" id="step-forms" style="">
    <div class="form-group required-field">
  <label for="first-name" class="control-label hide-if-no-placeholder">Name <span class="error">*</span> <span class="show-on-error">(required)</span></label>
  <div>
    <span class="hide-if-placeholder">First Name <span class="error">*</span></span>
    <input type="text" class="form-control" name="firstName" id="first-name" value="" placeholder="First">
    <span class="hide-if-placeholder">Last Name <span class="error">*</span></span>
    <input type="text" class="form-control" name="lastName" id="last-name" value="" placeholder="Last">
  </div>
</div>
<div class="form-group required-field">
  <label for="phone" class="control-label">Phone <span class="error">*</span> <span class="show-on-error">(required)</span></label>
  <input type="text" class="form-control" name="phone" id="phone" value="">
      <p class="small babel-ignore">You will receive a text message reminder before your appointment</p>
  </div>
<div class="form-group required-field">
  <label for="email" class="control-label">E-mail <span class="error">*</span> <span class="show-on-error">(required)</span></label>
  <input type="email" class="form-control" name="email" id="email" value="" autocorrect="off">
  <div class="help-block" id="email-error-help" style="display:none">Your e-mail address is invalid<span id="email-error-domain">. Did you type the domain correctly?</span></div>
</div>    <div class="pane" id="custom-forms">

<div class="custom-form" data-form-id="698895">
    <h2 class="babel-ignore">Payment Information</h2>
        <p class="babel-ignore form-description">Please provide your credit card and expiration date below in order to reserve your appointment time. This is a secure and HIPAA compliant form.<br>
<br>
Please note: In order to respect our doctor's time, we require a 24-hour notice for cancellations. A fee of $75 will be charged for no-shows or late cancellations.</p>
                <div class="form-group required-field" data-field-id="3328794">
            <label for="field:3328794" class="control-label babel-ignore">Credit/Debit Card with Expiration Date <span class="error">*</span> <span class="show-on-error">(required)</span></label>
      <input type="text" class="text form-control" name="field:3328794" value="">
            
    </div>
    </div>
<div class="custom-form" data-form-id="724393">
    <h2 class="babel-ignore">Referral Source</h2>
        <p class="babel-ignore form-description">Please let us know how you found our team!</p>
                <div class="form-group required-field" data-field-id="3500740">
            <label for="field:3500740" class="control-label babel-ignore">How did you find us? <span class="error">*</span> <span class="show-on-error">(required)</span></label>
      <select name="field:3500740" class="form-control inline-field"><option value="" selected=""></option><option value="Google">Google</option><option value="Yelp">Yelp</option><option value="Doctor Referral (Name of Provider)">Doctor Referral (Name of Provider)</option><option value="Family/Friend">Family/Friend</option><option value="Psychology Today">Psychology Today</option><option value="Insurance">Insurance</option><option value="ZocDoc">ZocDoc</option><option value="Lyra">Lyra</option></select>
            
    </div>
    </div>


<div class="forms-action-container">
<p style="display: none" class="text-danger" id="error-message-submit-failed">An error occurred while trying to finalize appointment, please check that you're still online and try again.</p>



<div class="forms-action-button-container">
  <input type="submit" class="btn btn-primary submit-forms-nopay" data-loading-text="Confirming Appointment..." value="Complete Appointment »">
  </div> </div>
 </div>
  </div>

  <div class="pane-collapsed" style="display: none;">
      </div>
</div>

<div class="forms-action-button-container">
  <input type="submit" class="btn btn-primary submit-forms-nopay" data-loading-text="Confirming Appointment..." value="Complete Appointment »">
  </div> -->


<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="Email">
  <input type="hidden" name="lc" value="GB">
  <input type="hidden" name="button_subtype" value="services">
  <input type="hidden" name="no_note" value="0">
  <input type="hidden" name="currency_code" value="GBP">
  <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
  <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
  <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form> -->




<!-- <div class="row row_margin_bottom">

    <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 panel_margin">

</div>
</div>
 -->



<div id="confirmation_form" class="container hidden">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Your Information!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value="default" >California</option>
      <!-- <option>Alabama</option>
      <option>Alaska</option>
      <option >Arizona</option>
      <option >Arkansas</option> -->
<!--       <option >California</option> -->
<!--       <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option> -->
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label">Website or domain name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" placeholder="Website or domain name" class="form-control" type="text">
    </div>
  </div>
</div> -->

<!-- radio checks -->
<!--  <div class="form-group">
                        <label class="col-md-4 control-label">Do you have hosting?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div> -->

<!-- Text area -->
  
<!-- <div class="form-group">
  <label class="col-md-4 control-label">Project Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div> -->

<!-- Success message -->
<!-- <div id="thanksnote" class="alert alert-success hidden" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button id="send" type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div> -->

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
<button id="send" class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
</div>
</div>


</fieldset>
</form>


</div>
    </div><!-- /.container -->



</div>


<!---notary---->

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="app.js"></script>



</body>
</html>
