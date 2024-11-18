<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Invoice</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet"> -->
    <style>
         body {
            background: #fff;
            font-family: "Manrope", sans-serif;
            font-size: 16px;
            line-height: normal;
            color: #000;
            margin: 0;
        }
        
        html,
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        *:before,
        *:after {
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }
        
        .pageWrapper {
            width: 700px;
            margin: 0 auto;
        }
        
        table {
            width: 100%;
            table-layout: auto;
            text-align: left;
        }
        
        .logo {
            display: block;
        }
        
        th,
        td {
            padding: 10px;
            font-size: 16px;
            font-weight: normal;
            color: #000;
            border: 1px solid #000;
            vertical-align: top;
            white-space: normal;
        }
        
        img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .t_header {
            width: 100%;
            float: left;
            padding-bottom: 20px;
        }
        
        .t_footer {
            width: 100%;
            float: left;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="pageWrapper">
       <!--  <div class="t_header" style="width: 100%;">
            <div class="logo" style="float: left;">
                <img src="logo.png" alt="" style="width: 100px; margin-bottom: 10px;">
                <strong style="font-size: 18px; font-weight: bold; line-height: normal; color: #000;">
               Municipal Council, Unnao  (Payment Receipt)</strong>
            </div>
            <div class="pic1" style="width: 100px; float: right; margin-top: 30px;">
                <img src="img1.png" alt="">
            </div>
            <div class="h_txt" style="text-align: center; width: 310px; margin: 0 auto; padding-top: 11px;">
                <h2 style="font-size: 22px; font-weight: bold; line-height: normal; color: #000; margin: 0 0 5px;">
                (Financial Year 2024-25)</h2>
                <h3 style="font-size: 19px; font-weight: bold; line-height: normal; color: #000; margin: 0 0 5px;">
                Receipt No. 126316 </h3>
                <span style="font-size: 17px; font-weight: bold; line-height: normal; color: #000; display: block;">
                (depositor copy) </span>
            </div>
        </div> -->
         <?php 
           if ($payment->type == "PROPERTY") {
               $data =  DB::table('properties')->where('id', $payment->data_id)->first();
            } elseif ($payment->type == "DEATH") {
             $data =  DB::table('deathcertificate')->where('id', $payment->data_id)->first();
            } elseif ($payment->type == "BIRTH") {
               $data = DB::table('birthcertificate')->where('id', $payment->data_id)->first();
            }
        ?>

        <table cellspacing="0" cellpadding="0" style="table-layout: fixed;">
            <tr>
                <td style="border: none !important; width: 200px;">
                    <div class="logo">
                        <!-- <img src="logo.png" alt="" style="width: 100px; margin-bottom: 10px;"> -->
                        <strong style="font-size: 13px; font-weight: bold; width: 200px; line-height: normal; color: #000; margin-top: 100px;">
                           (Payment Receipt )  126316 </strong>
                    </div>
                </td>
                <td style="border: none !important; width: 300px;">
                    <div class="h_txt" style="text-align: center; width: 310px; margin: 0 auto; padding-top: 11px;">
                        <h2 style="font-size: 22px; font-weight: bold; line-height: normal; color: #000; margin: 0 0 5px;">
                        Municipal Council, Unnao </h2>
                        <h3 style="font-size: 19px; font-weight: bold; line-height: normal; color: #000; margin: 0 0 5px;">
                        Receipt No. 126316 </h3>
                        <span style="font-size: 17px; font-weight: bold; line-height: normal; color: #000; display: block;">
                        (Financial Year 2024-25)</span>
                    </div>
                </td>
                <td style="border: none !important; width: 200px;">
                    <div class="pic1" style="width: 100px; float: right; margin-top: 30px;">
                        <img src="img1.png" alt="">
                    </div>
                </td>
            </tr>
        </table>

        <div class="t_body" style="width: 100%; clear: both;">
           <table cellspacing="0" cellpadding="0">
               <tbody>
                   <tr>
                       <td>Ward Number</td>
                       <td>{{ $data->ward_no ?? '' }}</td>
                       <td>Ward Name</td>
                       <td>{{ $data->colony_name ?? '' }}</td>
                   </tr>
                   <tr>
                       <td>Building Number Old/New</td>
                       <td>{{ $data->house_no ?? '' }}</td>
                       <td>Colony Name</td>
                       <td>{{ $data->colony_name ?? '' }}</td>
                   </tr>
                  <tr>
                       <td>Bill number</td>
                       <td>{{ $payment->razorpay_order_id ?? '' }}</td>
                       <td>Date</td>
                       <td>{{ $payment->created_at ?? '' }}</td>
                   </tr>
                   <tr>
                       <td>Transaction Id</td>
                       <td>{{ $payment->razorpay_payment_id ?? '' }}</td>
                       <td>Posting Id</td>
                       <td>68259</td>
                   </tr>
                   <tr>
                       <td> Owner Name</td>
                       <td>{{ $data->property_owner_name ?? '' }}</td>
                       <td>Father Name</td>
                       <td>{{ $data->father_or_husband_name ?? '' }}</td>
                   </tr>
               </tbody>
           </table>
           <table cellspacing="0" cellpadding="0">
               <tr>
                   <td style="text-align: center; font-size: 20px; font-weight: bold; color: #000; line-height: normal;">
                   Payment Description</td>
               </tr>
           </table>
           <table cellspacing="0" cellpadding="0">
               <tr>
                   <td style="padding: 0;">
                       <table cellspacing="0" cellpadding="0">
                           <tr>
                               <td style="font-size: 16px; font-weight: normal; line-height: normal; color: #000;">
                               annual appraisal -13563</td>
                           </tr>
                           <tr>
                               <td style="font-size: 16px; font-weight: normal; line-height: normal; color: #000;">
                               demand amount </td>
                           </tr>
                           <tr>
                               <td style="font-size: 16px; font-weight: normal; line-height: normal; color: #000;">
                              amount received</td>
                           </tr>
                           <tr>
                               <td style="font-size: 16px; font-weight: normal; line-height: normal; color: #000;">
                               Total amount received/outstanding amount deposited</td>
                           </tr>
                           <tr>
                               <td style="font-size: 16px; font-weight: normal; line-height: normal; color: #000; text-align: center;">
                               means of payment</td>
                           </tr>
                       </table>
                   </td>
                   <td style="padding: 0;">
                       <table cellspacing="0" cellpadding="0">
                           <tr>
                               <td>2365</td>
                               <td>4589</td>
                               <td>354</td>
                               <td>6698</td>
                               <td>489</td>
                               <td>896</td>
                               <td>22.0</td>
                               <td>489</td>
                               <td>2444</td>
                           </tr>
                           <tr>
                               <td>3235</td>
                               <td>458</td>
                               <td>2564</td>
                               <td>2365</td>
                               <td>489</td>
                               <td>2365</td>
                               <td>159</td>
                           </tr>
                       </table>

                       <table cellspacing="0" cellpadding="0">
                           <tr>
                               <td style="font-size: 16px; font-weight: bold; line-height: normal; color: #000;">
                               Total amount received/outstanding amount deposited</td>
                           </tr>
                       </table>

                       <table cellspacing="0" cellpadding="0">
                           <tr>
                               <td>cash / online</td>
                               <td>check number</td>
                               <td>account number</td>
                               <td>bank name</td>
                           </tr>
                           <tr>
                               <td>Online</td>
                               <td>435345345</td>
                               <td>342343423</td>
                               <td>PNB</td>
                           </tr>
                       </table>
                   </td>
               </tr>
           </table>
        </div>

        <div class="t_footer">
            <strong style="font-size: 20px; font-weight: 700; color: #000; display: block; padding-top: 30px;">
          This demand is not proof of heart ownership.</strong>
            <strong style="font-size: 20px; font-weight: 700; color: #000; display: block; padding-top: 20px !important; float: right;">
               depositor
            </strong>
        </div>
    </div>
</body>

</html>