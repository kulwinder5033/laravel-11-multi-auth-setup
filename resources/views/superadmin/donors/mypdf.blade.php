<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email Template</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
      </style>
    <style>
        body {
          margin: 0;
          padding: 0;
        }
        table {
          border-collapse: collapse;
        }
        .email-container {
          max-width: 1000px;
          margin: auto;
          border-radius: 8px;
          overflow: hidden;
          font-family: Arial, sans-serif;
          padding: 20px;
        }
        .email-header {
          background-color: #191970;
          color: #ffffff;
          padding: 20px;
          text-align: center;
          font-size: 24px;
        }
        .email-body {
          padding: 20px;
          font-size: 16px;
          color: #333333;
          line-height: 1.5;
        }
        .email-footer {
          background-color: #f9f9f9;
          text-align: left;
          padding: 20px;
          font-size: 14px;
          color: #111;
        }
        .button {
          display: inline-block;
          margin-top: 20px;
          padding: 12px 24px;
          background-color: #191970;
          color: #ffffff;
          text-decoration: none;
          border-radius: 5px;
        }
        p{
            margin: 0 0 5px;
            font-family: 'Inter', sans-serif;
            font-size: 12px;
            line-height: 1;
        }
      </style>
  </head>
  <body>
      <table class="email-container" cellpadding="0" cellspacing="0" width="100%">
         <tr>
             <td>
                <div style="text-align: center;margin: 20px;">
                <img src="{{ public_path('assets/media/logo-child.png') }}" alt="Logo" />
                <p style="text-align: end;">Donation Receipt No. {{ $receipt_no }}</p>
            </div>
          </td>
          <td>
              <h4>Child Life Care Foundation</h4>
              <p>Registered Office Address: D 304, sector 10 Noida</p>
              <p>Uttar Pradesh, Pin Code: 201301 Registration No. : 2025/12/IV/636</p>
              <p>All Donations are exempted Under Section 80G(5)(VI) of income Tax Act 1961.</p>
              <p>Website: www.childlifecarefoundation.org, Phone No. : +91 70113-89643</p>
              <p>Email id: Help.childlifecarefoundation@gmail.com</p>
              <p>Pan No :AADTC67007F</p>
          </td>
        </tr>
    </table>
    <table class="email-container" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 10px; margin-bottom: 10px;">
         <tr>
             <td style="text-align: right; padding: 5px;">Date: {{ \Carbon\Carbon::parse($created_at)->format('d M Y') }}</td>
         </tr>
    </table>
     <table class="email-container" cellpadding="0" cellspacing="0" width="100%">
         <tr>
             <td>Donor Name Mrs/Mr {{ $name }} with email id {{ $email??'Not Available' }} PAN no {{ $pan_number??'Not Available' }} has donated a amount of {{ $amount }}/- Rs only donated on {{ \Carbon\Carbon::parse($donation_date)->format('d-M-Y') }} and successfully recieved by child life care foundation of {{ $cause }}.</td>
         </tr>
    </table>
       <table class="email-container" cellpadding="0" cellspacing="0" width="100%">
         <tr>
             <td>
                    <div style="margin: 20px;">
                    <div style="border: 1px solid #000; width: 250px; height: 55px; margin-top: 20px; text-align: center; padding-top: 40px;">
                        <p style="font-size: 14px;"></p>   
                    </div>
                    <b style="margin-left:10%;">Donor's Sign</b>
                </div>
             </td>
             <td>
                <div style="margin: 20px;">
                  <div style="border: 1px solid #000; width: 250px; height: 100px; margin-top: 20px; text-align: center; padding-top: 10px;">
                      <img src="{{ public_path('assets/media/sign.jpeg') }}" alt="sign" style="max-height: 80px;" />
                  </div>
                  <div style="text-align: center; margin-top: 5px;">
                      <b>Authorised Seal and Sign</b>
                  </div>
              </div>
             </td>
         </tr>
    </table>
 
  </body>
</html>