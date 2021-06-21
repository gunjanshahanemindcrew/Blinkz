<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Password Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        /**
         * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
         */
        @media screen {
            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 400;
                src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
            }

            @font-face {
                font-family: 'Source Sans Pro';
                font-style: normal;
                font-weight: 700;
                src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
            }
        }

        /**
         * Avoid browser level font resizing.
         * 1. Windows Mobile
         * 2. iOS / OSX
         */
        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%; /* 1 */
            -webkit-text-size-adjust: 100%; /* 2 */
        }

        /**
         * Remove extra space added to tables and cells in Outlook.
         */
        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        /**
         * Better fluid images in Internet Explorer.
         */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /**
         * Remove blue links for iOS devices.
         */
        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        /**
         * Fix centering issues in Android 4.4.
         */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /**
         * Collapse table borders to avoid space between cells.
         */
        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }

        .card-header {
            padding: 15px;
        }
    </style>
</head>
<body style="background-color: #e9ecef;">
<!-- end preheader -->
<div class="card">
    <div class="card-header">
        Appointment Details
        <br/><br/>
        <table>
            <tr>
                <td>Date</td>
                <td>: {{date('d-m-Y', strtotime($appointmentData->slot_date))}}</td>
            </tr>
            <tr>
                <td>Time</td>
                <td>: {{date('h:i A', strtotime($appointmentData->slot_time))}}</td>
            </tr>
            <tr>
                <td>Who is consultation for?</td>
                <td>: {{$appointmentData->for_who}}</td>
            </tr>
            <tr>
                <td>Is this patient first visit?</td>
                <td>: {{$appointmentData->is_first_visit}}</td>
            </tr>
            <tr>
                <td>Patient Name</td>
                <td>: {{$appointmentData->first_name}} {{$appointmentData->last_name}}</td>
            </tr>
            <tr>
                <td>Patient Email</td>
                <td>: {{$appointmentData->email}}</td>
            </tr>
            <tr>
                <td>Patient Mobile</td>
                <td>: {{$appointmentData->mobile}}</td>
            </tr>
            <tr>
                <td>Purpose of visit</td>
                <td>: {{$appointmentData->purpose_of_visit}}</td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>

