<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tax.css">
   
    <title>tax-calculator</title>
</head>
<div id="kea">
    <div id="form">
        <header>
            <h1><b>Tax-Calculator</b></h1>
        </header>
<body>

    </div>
    <div id="fieldset">
        <fieldset ALIGN="center">
            <?php 
            $finalAmount=0;
            if(isset($_REQUEST['doTaxCal'])){
               
                if(isset($_REQUEST['famount'])){
                    $tamount=$_REQUEST['famount'];
                }

                if(isset($_REQUEST['ftax'])){
                    $ftax=$_REQUEST['ftax'];
                }

                if($tamount==0 || $ftax==0 ){
                    return;
                }else{
                    $taxAmount=($ftax/100)*$tamount;
                    $finalAmount=$tamount-$taxAmount;
                    
                }
              
            }
                   
            ?>
            <form name="Tax-calculator" action='index.php' method='post'>

                <label for="famount">Monetary Amount:</label><br><br>
                <input type="number" id="money" name="famount"><br><br>
                <label for="ftax">Tax Percentage:</label><br><br>
                <input type="number" id="tax" name="ftax"><br><br>
                <!-- <button id="calculate" type="button">Calculate</button><br><br> -->
                <button name='doTaxCal' type="submit">Calculate</button><br><br>
                <p>Total Amount:</p>
                <div id="result"> <?php echo $finalAmount ?></div>


            </form>

        </fieldset>
    </div>
</div>

</body>

</html>