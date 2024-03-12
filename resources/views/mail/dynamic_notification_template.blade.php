<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#fff"
    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td> 
            <table style="background-color: #fff; max-width:670px;  margin:0 auto;" width="100%" border="0"
                align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                         <center><a href="{{ URL::to('/') }}" title="logo" target="_blank" style="text-align: center;display: block;">
                             <center><img width="60" src="{{ $message->embed(public_path('assets/img/logo-3.png')) }}" title="logo" alt="The Hotel System" style="width: 250px;margin: 0px auto 25px;"></center>
                        </a></center>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                            style="max-width:670px;background:#FFFFFF; border-radius:6px; text-align:center;box-shadow:0 6px 18px 0 #00000040;border: 1px solid #eaeaea;">
                            <tr>
                                <td style="height: 25px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 35px;text-align: left;">
                                    <h1 style="color:#1e1e2d;font-weight: 500;margin: 0px 0px 10px;font-size: 30px;">Notification</h1>
                                    <p style="color:#455056;font-size:15px;line-height:24px;margin:0;padding:20px 0px">
                                        {!! $dataEmail['message'] !!}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-size: 12px;color: #808080d1;margin: 10px 0 0;font-weight: 600;">Copyright 2023 | Hotel System - All Rights Reserved.</p>
                    </td>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>