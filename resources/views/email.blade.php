<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Donation Task </title>

    <style>
        .container {
            width: 750px;
            margin: auto;
            padding: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-container" ref="document" id="html">
            <table style="width:100%; height:auto;  text-align:center; " BORDER=0 CELLSPACING=0>
                <thead style="background:#fafafa; padding:8px;">
                    <tr style="font-size: 20px;">
                        <td colspan="4" style="padding:20px 20px;text-align: left;">Donation invoice</td>
                    </tr>
                </thead>
                <tbody style="background:#ffff;padding:20px;">
                    <tr>
                        <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px; font-weight: bold;color:#000;">Hello, {{$name}}</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:left;padding:10px 10px 10px 20px;font-size:14px;">Your donation details</td>
                    </tr>
                </tbody>
            </table>
            <table style="width:100%; height:auto; background-color:#fff;text-align:center; padding:10px; background:#fafafa">
                <tbody>
                    <tr style="color:#6c757d; font-size: 20px;">
                        <td style="border-right:1.5px dashed  #DCDCDC; width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Donation Date</td>
                        <td style="border-right: 1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Donation amount</td>
                    </tr>
                    <tr style="background-color:#fff; font-size:12px; color:#262626;">
                        <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;">{{$date}}</td>
                        <td style="border-right:1.5px dashed  #DCDCDC ;width:25% ; font-weight:bold;background: #fafafa;">{{$amount}}</td>
                    </tr>
                </tbody>
            </table>

            <table style="width:100%; height:auto; background-color:#fff;padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0">
                <tbody>

                    <tr>
                        <td colspan="2" style="font-weight:bold;"><span style="color:#c61932;font-weight: bold;">THANK YOU</span> for your donstion!</td>
                    </tr>
                </tbody>
                <tfoot style="padding-top:20px;font-weight: bold;">
                    <tr>
                        <td style="padding-top:20px;"> Contact us <span style="color:#c61932"> info@donation.com </span></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>