<!DOCTYPE html>
<html>
<head>
<style> 
  #header {
    background-color:black;
    color:white;
    text-align:center;
    padding-left:50px;
    padding-top:10px;
    padding-bottom:10px;
    
}


aside{
    width:200px;
    height:505px;
    float:center;
    padding-top:5px;
    padding-left:25px;	
    background-color:white; 	
    margin-top:20px; 
    margin-left:550px;
    
}

input[type=text] {
    width: 150px;
    padding: 10px;
    margin: 5px;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
input[type=text], select {
    width: 150px;
    padding: 10px;
    margin: 5px;
    border: 1px solid black;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: white;
}
input[type=create] {
    width:55px ;
    background-color: white;
    color: black;
    padding: 10px;
    margin-left:35px;
    margin-top:5px;
    border: 1px solid black;
    border-radius: 4px;
    cursor: pointer;
    font-size:20px;
}

input[type=create]:hover {
    background-color: white;
}
div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  float:right;
  margin-top:50px;
}

div.container {
  padding: 10px;
}
div.polaroid {
  width: 250px;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  float:right;
  margin-top:60px;
  margin-right:45px;
  margin-bottom:50px;
  

}

div.container {
  padding: 10px;
}

</style>
</head>
<body>

<div id="header">
<h1>Buy</h1>


</div>
<aside>
<h1>Create Account:</h1>

<form action="users" method="POST">
@csrf
  <input type="text" id="fname" name="fname" placeholder="enter first name"> <br>
  <span style="color:red;">@error('fname'){{$message}}@enderror</span></br>
  <input type="text" id="lname" name="lname" placeholder="enter last name"> <br>
  <span style="color:red;">@error('lname'){{$message}}@enderror</span></br>
  <input type="text" id="email" name="email" placeholder="enter email address" > <br>
  <span style="color:red;">@error('email'){{$message}}@enderror</span></br>
  <input type="text" id="uname" name="uname" placeholder="enter user name"><br>
  <span style="color:red;">@error('uname'){{$message}}@enderror</span></br>
  <input type="text" id="pass" name="pass" placeholder="enter password"><br>
  <span style="color:red;">@error('pass'){{$message}}@enderror</span></br>
    <select id="city" name="city" placeholder="select city"><br>
    <span style="color:red;">@error('city'){{$message}}@enderror</span></br>
      <option value="kabul">Kabul</option>
      <option value="herat">Herat</option>
      <option value="mazar">Mazar</option>
      <option value="parwan">Prwan</option>
      <option value="bamyan">Bamyan</option>
    </select>
   <button type="submit">Create</button>
  </form>
 
 
  
  
  
  </aside>
  
  <div class="polaroid">
  <img src="/images/32.jpg" alt="Norway" style="width:100%">
  <div class="container">
    <p>Bought, 340$</p>
  

  </div>
  </div>
  <div class="polaroid">
  <img src="/images/27.jpg" alt="Norway" style="width:100%">
  <div class="container">
    <p>Bought, 450$</p>
  

  </div>
  </div>
  <div class="polaroid">
  <img src="/images/40.jpg" alt="Norway" style="width:100%">
  <div class="container">
    <p>Bought, 600$</p>
  

  </div>
  </div>
  <div class="polaroid">
  <img src="/images/45.jpg" alt="Norway" style="width:100%">
  <div class="container">
    <p>Bought, 300$</p>
  

  </div>
  </div>
</body>
</html>