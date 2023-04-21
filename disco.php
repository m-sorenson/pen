<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1.0" />
<script type="text/javascript" src="/itam-shared/simplesamlphp/www/resources/script.js"></script>
<title>IT Audit Machine</title>

    <link rel="stylesheet" type="text/css" href="/itam-shared/simplesamlphp/www/resources/default.css" />
    <link rel="stylesheet" type="text/css" href="/itam-shared/simplesamlphp/www/resources/cgrc_theme.css" />
    <link rel="icon" type="image/icon" href="/itam-shared/simplesamlphp/www/resources/icons/favicon.ico" />

    <meta name="robots" content="noindex, nofollow" />

</head>
<body onload="SimpleSAML_focus('dropdownlist');">

<div id="wrap">

    <div id="header">
        <div id="logo">
            <img class="title" src="https://continuumgrc.com/wp-content/uploads/2019/08/Logo-2019090601-GRCx300.png" style="margin-left: 8px; height: 75px;" alt="IT Audit Machine" />
        </div>
    </div>


        <div id="content">

    <div id="main">
        <div class="post">
            <div style="padding: 15px 0px;">
                <div>
                    <img src="/itam-shared/simplesamlphp/www/resources/icons/Cybervisor_64x64.png" align="absmiddle" style="width: 64px; height: 64px;float: left;padding-right: 5px"/>
                    <h3 class="h-margin-0 header-h">Sign in to ITAM Portal</h3>
                    <p>Please select the identity provider where you want to authenticate:</p>
                    <div style="clear:both; border-bottom: 1px dotted #CCCCCC;margin-top: 15px"></div>
                </div>
                <div style="border-bottom: 1px dotted #CCCCCC;margin-top: 10px">
                    <form method="get" action="https://continuumgrc.auditmachine.com/itam-shared/simplesamlphp/www/module.php/saml/disco.php">
                        <input type="hidden" name="entityID" value="https://continuumgrc.auditmachine.com/itam-shared/simplesamlphp/www/module.php/saml/sp/metadata.php/default-sp"/>
                        <input type="hidden" name="return" value="https://continuumgrc.auditmachine.com/itam-shared/simplesamlphp/www/module.php/saml/sp/discoresp.php?AuthID=_5939c6ca263c75c045255ffa29ae3391904879e1f5%3Ahttps%3A%2F%2Fcontinuumgrc.auditmachine.com%2Fitam-shared%2Fsimplesamlphp%2Fwww%2Fmodule.php%2Fcore%2Fas_login.php%3FAuthId%3Ddefault-sp%26ReturnTo%3Dhttps%253A%252F%252Fcontinuumgrc.auditmachine.com%252Fauditprotocol%252F"/>
                        <input type="hidden" name="returnIDParam"
                               value="idpentityid"/>
                        <ul class="custom-ul">
                            <li class="custom-li">
                                <select id="dropdownlist" name="idpentityid">
                                    <option value="http://www.okta.com/exksd7uz3RC52POy24h6">http://www.okta.com/exksd7uz3RC52POy24h6</option>                                </select>
                            </li>
                            <li class="custom-li">
                                                                    <input type="checkbox" name="remember" value="1" />
                                    <label>Remember my choice</label>
                                                            </li>
                            <li class="custom-li">
                                <button class="btn custom-btn" type="submit">Select</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="auto-style2">
            <img alt="Only from Lazarus Alliance!" longdesc="Only from Lazarus Alliance: IT Audit Machine, IT Poic Machine, Continuum, Your Personal CXO, HORSE WIKI and The Security Tirfecta" src="https://continuumgrc.com/wp-content/uploads/2019/08/User-Portal-AD2019.gif" width="500">
        </div>
    </div>
    <img src="/itam-shared/simplesamlphp/www/resources/icons/bottom.png" id="bottom_shadow">
    
            </div><!-- #content -->
            <div id="footer">
                <p class="copyright">Patent Pending, Copyright © <a href="https://continuumgrc.com" style="text-decoration: none;color: #0085CC;border-bottom: 1px dotted #999999;">Continuum GRC</a> 2000-<script>document.write(new Date().getFullYear());</script></p>

                <br style="clear: right" />

            </div><!-- #footer -->
        </div><!-- #wrap -->
    </body>
</html>