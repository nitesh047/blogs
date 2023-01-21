<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Build A Search Box With Auto Recommendation in Reactjs</title>
    <link rel="icon" type="image/png" href="../media/TW.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
</head>
  <body>
    
<?php
include 'Navbar.php'
?>
<section>
        <div class="container-fluid  " style="height: 25vh; position: relative;background-color: black;">

            <!-- <center>
                <h2 id="mainHeading"style="font-size:40px" > Build A Search Box With Auto Recommendation in Reactjs</h2>
            </center> -->
            <div class="container">
                <div class="row">
                    <center>
                        <h2 id="mainHeading3"   >
                             Build A Search Box With Auto Recommendation in Reactjs
                        </h2>
                    </center>
                       <!-- <h2 id="mainHeading"style=" margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-size:50px" > Build A Search Box With Auto Recommendation in Reactjs</h2> -->
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container mt-5">
 <h3 style="line-height: 2em; font-weight: 400;">
    The Auto Recommendation  Search Box is a search box with the input text to take search input and show all the related data to it. For doing all this operation the search box input filter all the data and show the result. For the data I have used dummy api with the data result of 30 objects. And all the working search box is live on CodeSandBox and the link is given below.
  <br>
</h3>
<h4>
     Link :
<a href=" https://47xids-3000.preview.csb.app/" target="_blank">

    https://47xids-3000.preview.csb.app/
</a>
    <br>
</h4>
    <h4>
        
     dummy api :
     <a href="https://dummyjson.com/products" target="_blank">
         https://dummyjson.com/products

     </a> 
</h4>
    <br><br><br>
    <h3 style="font-weight: 700;">
        Creating React Application in CodeSandBox: 
    </h3> <br>
  <h3 style="line-height: 2em; font-weight: 400;">
    To start building this search box we can install all the npm modules or we can make this on CodeSandBox , and for this project I will be working on codesandbox.
<br><br>
these are the all files and dependencies  
</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-12">

            <img src="../media/blogImages/blog1.1.png" style="width: 100%;" alt="CodeSandBox Dependencies">
        </div>
    </div>
</div>
<br><br><br>
<h4  style="line-height: 2em; font-weight: 600;">
    Now Start Coding..
</h4>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <pre>
                <code style="font-size: 23px;">
            import "./styles.css";
            import { useEffect, useState } from "react";
            
            export default function App() {
              const [searchInput, setSearchInput] = useState("");
              const [data, setData] = useState([]);
              useEffect(() => {
                fetch("https://dummyjson.com/products")
                  .then((res) => res.json())
                  .then((json) => {
                    setData(json.products);
                    setRes(json.products);
                  });
              }, []);
              const [res, setRes] = useState([]);
              const changeHandler = (e) => {
                setSearchInput(e.target.value);
                setTimeout(() => {
                  setRes(
                    data.filter((d) =>
                      d.title.toLowerCase().includes(e.target.value.toLowerCase())
                    )
                  );
                }, 200);
              };
              console.log(res);
              return (
                <!-- <div className="App">
                  <input value={searchInput} onChange={(e) => changeHandler(e)} /> -->
                  {res.map((result) => (
                    <p>{result.title}</p>
                  ))}
                
              );
            }
                </code>
            
            </pre>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-12">
            <img src="../media/blogImages/blog1.3.png" alt ="code image" style="height: 100%; max-width: 100%; display: block;">
        </div>
    </div>
</div>
<Br><Br><Br>
    <h4 style="font-weight:500">Result</h4>
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-12">
            <img src="../media/blogImages/blog1.2.png" style="width: 100%;" alt="Result"> 
        </div>
    </div>
    </div>
        </div>
 
    <!-- <button class="btn" style=" margin-left: 100px;">Share</button> -->
    </section>
    <?php
include 'Footer.php'
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>