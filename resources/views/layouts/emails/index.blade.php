<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/email-css.css') }}"/>
</head>

<body bgcolor="#FFFFFF">
<table border="0" cellpadding="10" cellspacing="0" style=
"background-color: #FFFFFF" width="100%">
    <tr>
        <td>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->

            <table align="center" border="0" cellpadding="0" cellspacing="0" class=
            "content" style="background-color: #FFFFFF">
                <tr>
                    <td id="templateContainerHeader" valign="top" mc:edit="welcomeEdit-01">
                        <p style="text-align:center;margin:0;padding:0;">
                            <img src=
                                 "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/cog-01.jpg"
                                 style="display:inline-block;"></p>
                    </td>
                </tr>

                @yield('content')

                <tr>
                    <td align="center" class="unSubContent" id="bodyCellFooter" valign=
                    "top">
                        <table border="0" cellpadding="0" cellspacing="0" id=
                        "templateContainerFooter" width="100%">
                            <tr>
                                <td valign="top" width="100%" mc:edit="welcomeEdit-11">
                                    <p style="text-align:center;"><img src=
                                                                       "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/cog-03.jpg"
                                                                       style="margin:0 auto 0 auto;display:inline-block;">
                                    </p>

                                    <h6 style="text-align:center;margin-top: 9px;">COG Inc</h6>

                                    <h6 style="text-align:center;">589&#8203; Howard&#8203; Street&#8203;</h6>

                                    <h6 style="text-align:center;">San&#8203; Francisco,&#8203; CA&#8203;
                                        94105&#8203;</h6>

                                    <h6 style="text-align:center;margin-top: 7px;"><a href=
                                                                                      "--unsubscribe--">unsubscribe</a>
                                    </h6>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>

</body>
</html>
