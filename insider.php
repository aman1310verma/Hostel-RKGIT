<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        a:link{
            text-decoration: none;
        }
        #hostels{
       
                padding: 0 15px 15px;
            font-size: 25px;
             line-height: 25px;
             padding: 7px 0;
             margin: 0;
            box-shadow: 5px 10px;
        }
        div{
            height: 500px
            
        }
         #myFooter {
             clear: both;
             height: 200px;
             text-align: center;
             margin: 0px 0px 0px 0px;
             font-family: arial, helvetica;
             font-weight: bold ;
             font-size: 11px;
             background-color: lightpink;
            }
        #header{
            clear: both;
            height: 200px;
            text-align:inherit;
            margin: 0px 0px 0px 0px;
          
            font-style:normal
            font-weight: bold;
            font-size: 20px;
            background-color: lightsalmon;
        }
        #complaint{
            box-shadow: 5px 10px;
           border: outset;
        }
        #registration{
            box-shadow: 5px 10px;
            border: outset;
        }
        #details{
            box-shadow: 5px 10px;
            border: outset;
        }
        .image{
            
            float: right;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header id="header"><h1> WELCOME<br>HOSTELLERS</h1></header>
   
    <fieldset>
       <img class="image" src="images/hostel1.jpg" alt="hostel" width=250px height=500px>
        
       <div id="hostels">
        <br/><br/><br/>
         <a href="Complaint.html" id="complaint">Complaint Box</a><br><br><br><br>
         <a href="Registration.html" id="registration">Registration Details</a><br><br><br><br>
        <a href="contacts.html" id ="details">Warden Contact Details</a><br><br><br><br>
         </div> 
         
    </fieldset>
    <footer id = "myFooter">MADE BY: Aman Verma</footer>
</body>
</html>