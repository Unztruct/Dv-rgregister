
 <?php
        
        try {
        
        define("DB_SERVER","localhost");
        define("DB_USER","root");
        define("DB_PASSWORD","");
        define("DB_NAME","Dvargar");
        
        $dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_SERVER.';charset=utf8',DB_USER,DB_PASSWORD);
        
        
        if(empty($dbh)) {
            
            echo "Dvärg-register tomt";
            echo"<br>";
            
            
            
        } else {
            
            
            echo "Dvärg-register aktiverat";
            
            $sql = "SELECT * FROM dvargar";
            
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            
            $littlepeople = $stmt->fetchAll();
            
            
            
            
           foreach($littlepeople as $people) {
               
               echo $people["namn"];
               echo"<br>";
               
               
               
           }
           
            
            
            
            
            
            
        }
        
        
        } catch (Exception $error) {
            throw new Exception("Din anslutning har misslyckats:" . $error->getMessage());
        }
        
        
               
        
        
        ?>
        

<!DOCTYPE html>




<html>
    <head>
        <meta charset="UTF-8">
        <link href="Bootstrap/Bootstrap.min.css" rel="stylesheet">
        <link href="indexcss.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
         <script src="Bootstrap/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        
        
        
       
        
        
        
        
            <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
        
        
        
        
        
        
       
            
        
       
            
        
        
        
    </body>
</html>
