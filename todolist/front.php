<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/v4-shims.css">
	<style>
		 .backimage{
                      background-image:url("laptop.jpg");
                      height:100%;
                      background-position:center;
                      background-repeat: no-repeat;
                      background-size: cover;
                      padding:0;
                      margin:0;  
                   }
         .username{
          	       border: 2px solid black;
                   padding: 10px;
                   margin-left:  10px;
                   border-radius: 5px;
                   width:290px;
                   }
           .button{
                     width:10px;
                     height:5px;
                  }
            .user {
                  font-family: Helvetica;
                  font-size:  1.2vw;
                  }
           .heading{
                     font-family: Helvetica;
                     font-size: 3vw;
                   }
          .heading1{
                     font-family: Helvetica;
                     font-size: 2vw;
                     text-align:center;
                    }
            .submit{
            	   border: 2px solid black;
                   height:40px;
                   width:140px;
                   margin-left:  25px;
                   border-radius: 6px;
                   }
            .submit1{
            	   border: 2px solid black;
                   height:40px;
                   width:140px;
                   margin-left:  25px;
                   border-radius: 6px;
                   float:left;
                   }
             .submit2{
            	   border: 2px solid black;
                   height:40px;
                   width:140px;
                   
                   border-radius: 6px;
                   
                   }
            .reset{
            	   border: 2px solid black;
                   height:40px;
                   width:140px;
                   margin-left:  25px;
                   border-radius: 6px;
                   float:right;
                   }
               .box{
               	     display: block;
                     color: black;
                     padding: 10px 5px;
                     border:1px solid black;
                     border-radius: 4px;
                   }
            .container{
                        position:relative;
                        border:4px solid black;
                        text-align:left;
                        top:120px;
                        left:70px;
                        width: 350px;
                        height: 220px;
                        border-radius: 10px;
                        padding: 30px;
                        background-color:rgba(190,190,190,0.7);
                      }
            .container1{
                        position:relative;
                        border:4px solid black;
                        text-align:left;
                        bottom: 330px;
                        left:650px;
                        width: 350px;
                        height: 500px;
                        border-radius: 10px;
                        padding: 30px;
                        background-color:rgba(190,190,190,0.7);
                      }
     </style>
</head>
<body>
  <div class = "backimage">
	<form  action = "conc.php" class = "container" method = "POST">
		<legend class = "heading1">To-Do-List</legend>
		<br><br>
		<label class = "user">Enter in Your Wish-List</label>
		<br><br>
		<i class="fa fa-lock" aria-hidden="true"></i>
		    <input type = "text" name = "msg" class = "username"></input>
	        <br><br>
	    <i class="fas fa-lock-alt"></i>
   	        <input type = "submit" value = "Submit" name = "submit" class = "submit1">
   	    <i class="fas fa-lock-alt"></i>
   	        <input type = "reset" value = "Reset" class = "reset">
   	        <br><br>
   	</form>
    <?php
 include('connection.php');
 include('conc.php');
?>
   	<form class = "container1"> 
   		<legend class = "heading1">Your's To-Do-List</legend>
   		<br>
   		<?php while($row = mysqli_fetch_array($tasks)) {?>
   	    	<div class = "box">
   		       <?php echo $row['task'] ?> 
   		    </div>
   	     	<br>
   		   <input type = "submit" value = "Remove" class = "submit2">
         <br><br>
   		 <?php } ?>
    </form> 
</body>
</html>