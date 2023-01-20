<!DOCTYPE html>
<html lang="en">

    <head>
        
        
        
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
        

        

        
    </head>
    <style>
        
        .article{
            padding: 15px;
            max-width: 420px;
            border-radius: 15px;

        }
        .header{
            padding:15px;
            border-radius: 15px;

        }
        .imageSize {
        width: 50%;
        height: 50%;
        border-radius: 12px;
    }
        

    </style>
        
    <body class="d-flex flex-column min-vh-100" >
    <?php include 'header.php' ?> 
    <div>
            
            
                <div class=" p-5 text-dark "   style=" height: 450px;  background-color:LightGray; ">
                    
                    <div class=" header p-5    text-center container" >
                        <h1>Hello World! </h1>
                        <p> This is a Exmaple template.Press Contact us  button for further information.</p>
                        <div>
                            <a href="contact.php" class="btn btn-light" type="button"> Register Here </a>
                        </div>
                        
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-3 ">
                        <h1>Catagoery</h1>
                        <div class="row text-center">
                            <div class="card btn btn-light ">
                                <div class="card-body">
                                    <img src="./images/oip.jpg" style="width: 100%;" />
                                    <p>Board Game</p>
                                     
                                </div>
                            </div>
                            <div class="card btn btn-light ">
                                <div class="card-body">
                                    <img src="./images/overdresslogo.png" style="width: 100%;" />
                                    <p >Cardfight!!Vanguard</p>
                                     
                                </div>
                            </div>
                            <div class="card btn btn-light">
                                <div class="card-body">
                                    <img src="./images/R.jpg" style="width: 100%;" />
                                    <p>Yugioh!</p>
                                     
                                </div>
                            </div>
                            <div class="card btn btn-light">
                                <div class="card-body">
                                    <img src="./images/mtglogo.jpg" style="width: 100%;" />
                                    <p>Magic The Gathering</p>
                                     
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div class="row row-cols-lg-6 row-cols-md-3">
                    
                    <?php 
                    for ($i = 1; $i <= 12; $i++) { echo'
                        <div class="col-12 col-md-6 col-lg-3 col-sm-6 p-2">
                            <div class="container text-center mt-3 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="./images/005_RRR_77640.jpg" class="imageSize" />
                                        <h4>  </h4>

                                    </div>
                                    <div class="card-body ">
                                        <p> DBT-04 Minerva Rising RRR set x4 </p>
                                        <div>
                                        <a href="detail.php" class=" btn btn-primary"> View More </a>
                                        </div>
                                        

                                    </div>
                                </div>
                            
                            
                            </div>

                        </div>
                        
                        ';} 
                    
                    
                    ?>
                    
                    
                </div>

                

                    </div>
                    <div class="mt-4 p-5 text-dark "   style=" height: 500px;  background-color:LightGray; ">
                    <div class="container text-center">
                        <h1>New Item</h1>
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-3">
                                <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                    <div class="container mt-3 mb-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <img src="./images/005_RRR_77640.jpg" class="imageSize" />
                                                <h4>  </h4>

                                            </div>
                                            <div class="card-body ">
                                                <p herf="#" > DBT-04 Minerva Rising RRR set </p>
                                                <a herf="contact.php" class="btn btn-light " type="button" > View More </a>

                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>

                                                    <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                                        <div class="container mt-3 mb-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <img src="./images/005_RRR_77640.jpg" class="imageSize" />
                                                                    <h4>  </h4>

                                                                </div>
                                                                <div class="card-body ">
                                                                    <p> DBT-04 Minerva Rising RRR set x4 </p>
                                                                    <a herf="#" class="btn btn-primary"> View More </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                    </div>

                                                    <div class="col-12 col-md-4 col-lg-4 col-sm-4">
                                                        <div class="container mt-3 mb-4">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <img src="./images/005_RRR_77640.jpg" class="imageSize" />
                                                                    <h4>  </h4>

                                                                </div>
                                                                <div class="card-body ">
                                                                    <p> DBT-04 Minerva Rising RRR set x4 </p>
                                                                    <a herf="#" class="btn btn-primary"> View More </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                    </div>

                                                    
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                </div>
                
                
                
                
                
                
                
                
            
                
            
                
            
            
            
    
        
    
    </div>
    <div>
        <?php include 'footer.php'; ?>
    </div>
    

        



    

    </body>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    

        
    

</html>