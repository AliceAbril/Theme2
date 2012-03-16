<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> Theme2 - JavaScrip Page </title>
        
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"> </script>
        <script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
        
        <!--script type="text/javascript" src="jquery.mobile-1.0.1.js"></script-->
        
        <script>
            
            function sendIt() {
                
                var param = $("#alias").val();
            
                var url = "api/dispatcher.php";
                
                $.post(url,{service: "welcome.hello", params: {name:param}},
                        function(data){
                            $("#rta").html(data);
                        })
            }
            
        </script>
    </head>
    <body>
        
        <div data-role="page">  
        
            <div data-role="header">
                <a id="return-point"></a> 
                
		<h4> Start Page </h4>
            </div><!-- /header -->
            
            <br/><br/>

            <div data-role="content">	
                
                Button: <button data-role="none" onclick ="sendIt();"> Send </button>
                
                <br/><br/>
                
                <div id="rta" class="res"> Check </div>
                
                <br/><br/>
                
		Text: <input data-type="text" data-value=" " id="alias"/> 
                
                <br/><br/>
                
                Menu:
                <ul>
                    <li> <a href="Page1.php#anchorPage1" target="_blank"> Page 1 </a> </li>
                    <li> <a href="Page2.php#anchorPage2" target="_blank"> Page 2 </a> </li>
                    <li> <a href="Page3.php#anchorPage3" target="_blank"> Page 3 </a> </li>
                </ul>
                
                <a href="sample1.php" target="_blank"> Go to Sample1 </a>
                
            </div><!-- /content -->
        
        </div>
        
        <script type="text/javascript" src="index.js"></script>
        
    </body>
</html>
