<!--Creating s session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue; 
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/19999/xhtml">
    <head><mets sharset="utf-g"/>
    <title>EBusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="eBus3.php">
                
                <h1>Shop Calculator</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Services</b></td>
                        </tr>
                        <tr> 
                            <td>VR Headset Junior</td>
                            <td><input type="radio" id="CocaCola" name="rdoGroup" value="1" /></td>
                        </tr>
                        <tr>
                            
                        <td>VR Headset Beginner</td>
                        <td><input type="radio" id="Sprite" name="rdoGroup" value="5" /></td>
                    </tr>
                    <tr> 
                        <td>VR Headset Advanved</td>
                        <td><input type="radio" id="Fanta" name="rdoGroup" value="30" /></td>
                    </tr>
                    </table>
                </center>
                <br />
                
                <center>
                    <table cellspacing="10"><tr>
                            <td><b></b></td>
                            <td><b>Amount</b></td>
                        </tr>
                        <tr> 
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>      
                       </tr>
                       <tr>
                           <td>-Discount @30%</td>
                           <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                      </tr>
                      <tr>
                          <td>+VAT @40%</td>
                          <td><input type="text" id="txtVat" name="txtVat" readonly/></td>
                      </tr>
                      <tr>
                          <td>Total</td>
                          <td><input type="text" id="txtTotal" name="txt~Total" value="" readonly /></td>                    
                      </tr>
                    </table>
                </center>
                
                <br /> 
                <center> 
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="Open(Ebus2.php)" value="Proceed"/>
                </center>
            </form>
        </div>
        
        <script type="text/javascript">
            function calcSub() {
        //Assigning variables to the values
        var subAmount = parseFloat(document.getElementById('txtSubTot').value);
        var CocaCola = parseFloat(document.getElementById('CocaCola').value);
        var Sprite = parseFloat(document.getElementById('Sprite').value);
        var Fanta = parseFloat(document.getElementById('Fanta').value);
               
            //If radio buttons are clicked, values are assigned
                         if (document.getElementById('CocaCola').checked) {
                             document.intCalc.txtSubTot.value = CocaCola;
                             subAmount = CocaCola;
                             calculation(subAmount);
                         }
                    
                   else if (document.getElementById('Sprite').checked) {
                       document.intCalc.txtSubTot.value = Sprite;
                       subAmount = Sprite;
                       calculation(SubAmount);
                   }
                   
            else if (document.getElementById('Fanta').checked) {
                document.intcalc.txtSubTot.value = Fanta;
                subAmount = Fanta;
                calculation(subAmount);
            }
        }
        
        //Function for calculating the value
        function calculation(parmSTotal){
            var subTotal = parseFloat(parmTotal);
            var discCalc = parseFloat(subtotal * .30);
            var vatCalc = parseFloat(subTotal * .40);
            var total = parseFloat(subTotal - discCalc + vatCalc);
            
            //Inserting them into the correct fields
            document.intCalc.txtdisc.value = discCalc;
            document.intCalctxtVat.value = vatCalc;
            document.intCalc.txtTotal.value = total;
            
        }
        function AmountClear(){
            docuument.getElementById("txtSubTot").value="";
            document.getElementById("txtDisc").value="";
            document.getElementById("txtVat").value="";
            document.getelementById("txtTotal").value="";
        }
        </script>
    </body>
    </html>
    


