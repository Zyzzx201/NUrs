<?php
    require('fpdf.php');
    require('BillClass.php');
    require('PaymentClass.php');
    require('ParentClass.php');
    require('MainClass.php');
    require('pm_o_vClass.php');
    require("pmov_billClass.php");
    require('OptionsClass.php');
    require('db.php');

    function PDF(){
            $fpdf = new FPDF();
            $fpdf1 = new FPDF();
            $bill = new Bill();
            $parent = new parents();
            $main = new main();
            $pmov = new pmov();
            $pmovbill = new Pmovbill();
            $dbobject = new DB();
            //////////////////////////////
            $sql= "SELECT * FROM pm_o_v
                    INNER JOIN parent ON pm_o_v.parent_id = parent.id
                    INNER JOIN main m ON parent.mother_id = m.id
                    INNER JOIN main d on parent.father_id = d.id
                    INNER JOIN paymentopt ON pm_o_v.payment_o_id = paymentopt.id
                    INNER JOIN options ON paymentopt.options_id = options.id
                    INNER JOIN payment on paymentopt.payment_id = payment.id";
            $dbobject->connect();
            $dbobject->execute($sql);
            $dbobject->disconnect();
            ///////////////////
            $total = 0;
            /// Bill is going to be used for everything else, EVERYTHING inside bill will be displayed

            //////////////////
            $fpdf->addpage();
            $fpdf1->SetFont('Arial','',20);
            $fpdf1->Cell(40,10,"FUN AND LEARN NURSERY INVOICE NUMBER: ".$bill->id,'','',center);
            $fpdf->SetFont('Arial','',12);
            $fpdf->Cell(40,10,"TIME ".$bill->time,'','',center);
            $fpdf->ln();
            $fpdf->Cell(40,10,"Mother's Name: ".$main->fname. .$main->lname,'','',left); //once for the mother
            $fpdf->ln();
            $fpdf->Cell(40,10,"Father's Name: ".$main->fname. .$main->lname,'','',left); //once for the father
            $fpdf->ln();
            $fpdf->Cell(40,10,"Price ".$bill->price,'','',center);
            $fpdf->ln();
            $fpdf->Cell(40,10,"Discount ".$bill->discount,'','',center);
            $fpdf->ln();
            $fpdf->Cell(40,10,"Discount ".$bill->discount,'','',center);  //edit this one to contain the PAYMENT METHOD(visa, paypal, etc.)
            $fpdf->ln();
            //i made a loop to make sure that no matter how many values a person(pm_o_v) enters there would be a place for those values
            //put the condition as you wish to make sure everything is displayed
            // in it you will make sure that the value that you get from options(ex: visa card number, and then its value next to it
            // (which is already there))
            // EX: visa card number: 1413 1422 3343
            for (i=0;i< ;i++){
                $fpdf->Cell(40,10,"".$pmov->value,'','',center);
                $fpdf->ln();
            }
            //take the row that retrieved the price and the discount, do price minus the discount and put the result in a "$total"
            // and display it
            $fpdf->Cell(40,10,"Total: ".$total,'','',center);
            $fpdf->ln();
            $fpdf->output();

    }
?>




