@extends('layouts.emails.index')

@section('content')

    <tr>
        <td align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class=
            "brdBottomPadd-two" id="templateContainer" width="100%">
                <tr>
                    <td class="bodyContent" valign="top">
                        <p>Hi {{ $accountHolder->fname }},</p>

                        <h1><strong>Congratulations on signing up<br>
                                for AMEB!</strong></h1>

                        <h3>Thanks for joining our community for music board.
                            We're excited to share everything that we know about
                            marketing, automation, and growing your business.</h3>
                    </td>
                </tr>

                <tr align="top">
                    <td class="bodyContentImage" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left" style="margin:0;padding:0;" valign=
                                "top" width="50" mc:edit="welcomeEdit-03">
                                    <p style="margin-bottom:10px"><img src=
                                                                       "http://c0185784a2b233b0db9b-d0e5e4adc266f8aacd2ff78abb166d77.r51.cf2.rackcdn.com/templates/img_profile.jpg"
                                                                       style="display:block;"></p>
                                </td>

                                <td align="left" style="width:15px;margin:0;padding:0;"
                                    valign="top" width="15">&nbsp;</td>

                                <td align="left" style=
                                "margin:0;padding-top:10px;line-height:1;" valign=
                                    "top" mc:edit="welcomeEdit-04">
                                    <h4><strong>CEO Smith</strong></h4>

                                    <h5>Community Manager at AMEB</h5>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr align="top">
                    <td class="bodyContentImage" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    You have successfully created a AMEB account. You can get detailed information about AMEB at www.ameb.au

                                    Please Confirm by <a href="{{ url($link) }}">"Clicking here"</a>
                                    OR Copy and paste this link in your browser "{{ url($link) }}"
                                    Hope, we will have fruitful association
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>

@stop