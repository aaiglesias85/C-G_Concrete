<?php
require_once('mysql_table.php');

class InvoicePDF extends PDF_MySQL_Table
{
// Page header
    public $data = array();

    public function __construct($data)
    {
        $this->data = $data;
        parent::__construct();
    }

    function Header()
    {
        // Logo
        $this->Image($this->data['logo'], 10, 15, 50);
        $this->SetFont('Times', 'I', 8);
        $this->SetTextColor(190);
        $this->Text(20, 17, $this->data['slogan']);


        $this->SetTextColor(0);
        // Move to the right
        $this->Cell(130);


        $this->SetFont('Arial', '', 10);
        $this->Cell(60, 8, $this->data['date'], 0, 2, 'R');

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(20, 8, 'INVOICE', 1, 0, 'C');

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(40, 8, $this->data['invoice'], 1, 2, 'C');

        // Line break
        $this->Ln(10);

        parent::Header();
    }

// Page footer
    function Footer()
    {
        if ($this->PageNo() > 1)
            $this->Cell(0, 2, "", "T", 2);
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        if ($this->PageNo() > 1)
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        else
            $this->Cell(0, 10, 'Thank you for doing business with Go4connect.', 0, 0, 'C');
    }

    function convert_number($number)
    {
        if (($number < 0) || ($number > 999999999)) {
            return $number;
        }

        $Gn = floor($number / 1000000);  /* Millions (giga) */
        $number -= $Gn * 1000000;
        $kn = floor($number / 1000);     /* Thousands (kilo) */
        $number -= $kn * 1000;
        $Hn = floor($number / 100);      /* Hundreds (hecto) */
        $number -= $Hn * 100;
        $Dn = floor($number / 10);       /* Tens (deca) */
        $n = $number % 10;               /* Ones */

        $res = "";

        if ($Gn) {
            $res .= $this->convert_number($Gn) . " Million";
        }

        if ($kn) {
            $res .= (empty($res) ? "" : " ") .
                $this->convert_number($kn) . " Thousand";
        }

        if ($Hn) {
            $res .= (empty($res) ? "" : " ") .
                $this->convert_number($Hn) . " Hundred";
        }

        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six",
            "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
            "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
            "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",
            "Seventy", "Eigthy", "Ninety");

        if ($Dn || $n) {
            if (!empty($res)) {
                $res .= " and ";
            }

            if ($Dn < 2) {
                $res .= $ones[$Dn * 10 + $n];
            } else {
                $res .= $tens[$Dn];

                if ($n) {
                    $res .= "-" . $ones[$n];
                }
            }
        }

        if (empty($res)) {
            $res = "zero";
        }

        return $res;
    }

    function createBody()
    {

        $y = $this->GetY();
        $this->SetFont('Arial', 'B', 10);
        $this->MultiCell(90, 6, $this->data['seller'], 0, 'L');
        $this->SetLeftMargin(110);
        $this->SetY($y);


        $this->SetFont('Arial', 'B', 12);
        $this->Cell(90, 6, "Invoice To: " . $this->data['buyerCompanyName'], 0, 2);
        $this->SetFont('Arial', '', 10);
        $this->MultiCell(90, 5, $this->data['buyer'], 0, 'L');

        $this->SetLeftMargin(10);
        $this->Ln(10);
        $this->SetFillColor(240);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 8, "Services Items", 1, 1, "C", true);
        $this->SetFont('Arial', 'I', 8);

        //Productos
        $this->Ln(5);
        $this->showProductos($this->data['productos']);
        $this->Ln(5);
        $this->showCallsResumen($this->data['gross_calls'], $this->data['duration_calls']);

        //Totales
        $gross_calls = number_format($this->data['gross_calls'], 2);
        $gross_productos = number_format($this->data['gross_productos'], 2);
        $subtotal = $this->data['gross_calls'] + $this->data['gross_productos'];
        $subtotal = number_format($subtotal, 2);

        $descuento = number_format($this->data['descuento'], 2);
        $vat = $this->data['vat'] * 100;
        $discount = $this->data['discount'] * 100;
        $tax = number_format($this->data['tax'], 2);
        $amount = number_format($this->data['amount'], 2);

        $totales = "Services: USD $gross_productos \n
         Call Cost: USD $gross_calls \n 
         Sub-Total: USD $subtotal \n 
         Discount ($discount%): USD $descuento \n
         VAT ($vat%): USD $tax \n
         Total Amount: USD $amount";

        $this->Ln(5);
        $this->SetFont('Arial', 'B', 8);
        $this->MultiCell(0, 3, $totales, 1, "R");

        $this->SetLeftMargin(10);
        $this->Ln(10);

        $date1 = $this->data['date1'];
        $date2 = $this->data['date2'];
        $desc = "Invoice From $date1 to $date2";
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(100, 6, $desc, 0, 0, "L");
        $this->Ln(7);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(40, 6, "Due date:", 0, 0, "L");
        $this->SetFont('Arial', '', 12);
        $this->Cell(30, 6, $this->data['dueDate'], 0, 1, "L");
        $this->Ln(10);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(40, 6, "Total to pay USD:", 0, 0, "L");
        $this->SetFont('Arial', '', 12);
        $this->Cell(30, 6, $amount, 0, 1, "L");

        $int2 = explode('.', "{$amount}");

        $words = $this->convert_number(str_replace(",", "", $int2[0]));

        $words .= ", (" . $int2[1] . " / 100) USD";
        $this->SetFont('Arial', '', 9);
        $this->Cell(100, 6, $words, 0, 0, "L");

        $this->Ln(10);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(35, 6, "Terms of payment:", 0, 0, "L");
        $this->SetFont('Arial', '', 10);
        $this->Cell(70, 6, "Cash, Money Order or Company Check.", 0, 0, "L");

        $y = $this->GetY();
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(90, 8, "Bank Details", "B", 1);
        $this->SetFont('Arial', '', 10);
        $this->MultiCell(90, 6, $this->data['bank'], 0);

        $this->SetLeftMargin(110);
        $this->SetY($y + 50);
        $this->Cell(20, 6, "Signature:", 0, 0, "L");
        $this->Cell(65, 6, str_repeat("_", 30), 0, 0, "C");
        $this->SetLeftMargin(10);
    }

    function showProductos($data_productos)
    {
        $this->aCols = array();
        $this->AddCol('producto', 70, 'Service');
        $this->AddCol('cantidad', 30, 'QTY', 'C');
        $this->AddCol('nrc', 30, 'NRC USD', 'C');
        $this->AddCol('mrc', 30, 'MRC USD', 'C');
        $this->AddCol('total', 30, 'Sub Total USD', 'C');

        $prop = array('HeaderColor' => array(220, 220, 220),
            'color1' => array(255, 255, 255),
            'color2' => array(240, 240, 240),
            'padding' => 2);
        $this->title = "";
        $this->Table($data_productos, $prop);
    }

    function showCallsResumen($gross, $duration)
    {
        $data = array();
        array_push($data, array(
            'producto' => 'Call Cost',
            'duration' => $duration,
            'nrc' => number_format($gross, 2),
            'mrc' => "",
            'total' => number_format($gross, 2)
        ));

        $this->aCols = array();
        $this->AddCol('producto', 70, 'Service');
        $this->AddCol('duration', 30, 'Total Min', 'C');
        $this->AddCol('nrc', 30, 'NRC USD', 'C');
        $this->AddCol('mrc', 30, 'MRC USD', 'C');
        $this->AddCol('total', 30, 'Sub Total USD', 'C');

        $prop = array('HeaderColor' => array(220, 220, 220),
            'color1' => array(255, 255, 255),
            'color2' => array(240, 240, 240),
            'padding' => 2);
        $this->title = "";
        $this->Table($data, $prop);
    }

    function showCalls($data_calls, $date1, $date2)
    {
        $this->aCols = array();
        $this->AddCol('cont', 15, '#', 'C');
        $this->AddCol('callStart', 30, 'Call Start', 'C');
        $this->AddCol('calledNumber', 20, 'Called Number');
        $this->AddCol('duration', 15, 'Duration', 'C');
        $this->AddCol('did', 20, 'DID');
        $this->AddCol('description', 40, 'Description');
        $this->AddCol('routetype', 20, 'Route Type');
        $this->AddCol('cost', 15, 'Cost', 'C');

        $prop = array('HeaderColor' => array(220, 220, 220),
            'color1' => array(255, 255, 255),
            'color2' => array(240, 240, 240),
            'padding' => 2);
        $this->title = "Call Records From $date1 to $date2";
        $this->Table($data_calls, $prop);
    }

    function showCdrs($data_cdrs, $date1, $date2)
    {
        $this->aCols = array();
        $this->AddCol('cont', 10, '#', 'C');
        $this->AddCol('calldate', 30, 'Call Date', 'C');
        $this->AddCol('clid', 50, 'Caller ID');
        $this->AddCol('did', 20, 'DID');
        $this->AddCol('lastapp', 15, 'App');
        $this->AddCol('src', 20, 'Source');
        $this->AddCol('dst', 20, 'Destination');
        $this->AddCol('duration', 15, 'Duration', 'C');


        $prop = array('HeaderColor' => array(220, 220, 220),
            'color1' => array(255, 255, 255),
            'color2' => array(240, 240, 240),
            'padding' => 2);
        $this->title = "Go4connect Invoice From $date1 to $date2";
        $this->Table($data_cdrs, $prop);
    }

    function showDids($data_dids)
    {
        $this->aCols = array();
        $this->AddCol('cont', 20, '#', 'C');
        $this->AddCol('code', 55, 'Area Code', 'C');
        $this->AddCol('name', 55, 'Area Name', 'C');
        $this->AddCol('phoneNumber', 60, 'Phone Number', 'C');

        $prop = array('HeaderColor' => array(220, 220, 220),
            'color1' => array(255, 255, 255),
            'color2' => array(240, 240, 240),
            'padding' => 2);
        $this->title = "Client phone numbers";
        $this->Table($data_dids, $prop);
    }

}

?>