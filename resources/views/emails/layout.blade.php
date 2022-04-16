
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>@yield('title')</title><link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600&subset=latin-ext" rel="stylesheet"><style type="text/css">

		body, table, h1, h2, h3, h4, h5, h6, p, td {
			color:#000;
			font-family: 'Work Sans',  "Helvetica", "Arial", sans-serif;
			font-weight: normal;
		}
		/* Template styling */
		body {
			font-family: 'Work Sans',   "Helvetica", "Arial", sans-serif;
			width: 100%;
			max-width: 100%;
			font-size: 17px;
			line-height: 24px;
			background: #F9F9F9;
            text-align:center !important;
		}
		h1, h2, h3, h4 {
			margin-bottom: 12px;
			line-height: 26px;
		}
		p, ul, ul li {
			font-size: 17px;
			margin: 0 0 16px;
			line-height: 24px;
		}
		ul {
			margin-bottom: 24px;
		}
		ul li {
			margin-bottom: 8px;
		}
		hr {
			margin: 2rem 0;
			width: 100%;
			border: none;
			border-bottom: 1px solid #ECECEC;
		}
		a, a:link, a:visited, a:active, a:hover {
			font-weight: bold;
			color: #439fe0;
			text-decoration: none;
			word-break: break-word;
		}
		a:active, a:hover {
			text-decoration: underline;
		}
		#footer p {
			margin-top: 16px;
			font-size: 12px;
		}

		/* Client-specific Styles */
		#outlook a {padding:0;}
		body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0 auto; padding:0;}
		.ExternalClass {width:100%;}
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
		#backgroundTable {margin:0; padding:0; width:100%; line-height: 100% !important;}

		/* Some sensible defaults for images
		Bring inline: Yes. */
		img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
		a img {border:none;}
		.image_fix {display:block;}

		/* Outlook 07, 10 Padding issue fix
		Bring inline: No.*/
		table td {border-collapse: collapse;}

		/* Fix spacing around Outlook 07, 10 tables
        Bring inline: Yes */
		table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

		/* Mobile */
		@media only screen and (max-device-width: 480px) {
			/* Part one of controlling phone number linking for mobile. */
			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: blue; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important;
				pointer-events: auto;
				cursor: default;
			}

		}

		/* Not all email clients will obey these, but the important ones will */
		@media only screen and (max-width: 480px) {
			.card {
				padding: 1rem 0.75rem !important;
			}
			.link_option {
				font-size: 14px;
			}
			hr {
				margin: 2rem -0.75rem !important;
				padding-right: 1.5rem !important;
			}
		}

		/* More Specific Targeting */
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			/* You guessed it, ipad (tablets, smaller screens, etc) */
			/* repeating for the ipad */
			a[href^="tel"], a[href^="sms"] {
				text-decoration: none;
				color: blue; /* or whatever your want */
				pointer-events: none;
				cursor: default;
			}

			.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				text-decoration: default;
				color: orange !important;
				pointer-events: auto;
				cursor: default;
			}
		}

		/* iPhone Retina */
		@media only screen and (-webkit-min-device-pixel-ratio: 2) and (max-device-width: 640px)  {
			/* Must include !important on each style to override inline styles */
			#footer p {
				font-size: 9px;
			}
		}

		/* Android targeting */
		@media only screen and (-webkit-device-pixel-ratio:.75){
			/* Put CSS for low density (ldpi) Android layouts in here */
			img {
				max-width: 100%;
				height: auto;
			}
		}
		@media only screen and (-webkit-device-pixel-ratio:1){
			/* Put CSS for medium density (mdpi) Android layouts in here */
			img {
				max-width: 100%;
				height: auto;
			}
		}
		@media only screen and (-webkit-device-pixel-ratio:1.5){
			/* Put CSS for high density (hdpi) Android layouts in here */
			img {
				max-width: 100%;
				height: auto;
			}
		}
		/* Galaxy Nexus */
		@media only screen and (min-device-width : 720px) and (max-device-width : 1280px) {
			img {
				max-width: 100%;
				height: auto;
			}
			body {
				font-size: 16px;
			}
		}
		/* end Android targeting */

        /*CUSTOM CSS*/
        h1,p{
            text-align: center;
        }
        .vexD{color:#c92e62}
        .vexM{color:#d63c62}
        .vexL{color:#e75361}
        .vexB{color:#2F3037}
        .green{color:#7ED321}
        .blue{color:#2980b9}

        .email-content{
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
        }
        .btn-first{
            padding: 12px 20px;
            background-color: #C82E62;
            color:#fff!important;
            font-size: 16px;
        }

		@yield('style')

	</style></head><body style="background: #F9F9F9; color: #373737; font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 17px; line-height: 24px; max-width: 100%; width: 100% !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0 auto; padding: 0;">
<!--[if mso]>
<style type="text/css">

	td { font-family: 'Work Sans',  "Helvetica Neue", Helvetica, Arial, sans-serif !important; }

</style>
<![endif]-->


<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; line-height: 24px; margin: 0; padding: 0; width: 100%; font-size: 17px; color: #373737; background: #F9F9F9;"><tbody><tr><td valign="top" style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><tbody><tr><td valign="bottom" style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse; padding: 20px 16px 12px;">
						<div style="text-align: center;">
						</div>
					</td>
				</tr></tbody></table></td>
	</tr><tr><td valign="top" style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse;">

			<table cellpadding="32" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: white; border-radius: 0.5rem; margin-bottom: 1rem;"><tbody><tr><td width="546" valign="top" style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse;">
						<div style="max-width: 600px; margin: 0 auto;">

							@yield('content')

						</div>
					</td>
				</tr></tbody></table></td>
	</tr><tr><td style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; margin-top: 1rem; background: white; color: #989EA6;"><tbody><tr><td style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse; height: 5px; background-image: url('https://vexrob.com/assets/front/img/mail-sep.png'); background-repeat: repeat-x; background-size: auto 5px;"></td>
				</tr><tr><td valign="top" align="center" style="font-family: 'Work Sans',  'Helvetica Neue', Helvetica, Arial, sans-serif !important; border-collapse: collapse; padding: 16px 8px 24px;">
						<div style="max-width: 600px; margin: 0 auto;">
							<p style="font-size: 12px; line-height: 20px; margin: 0 0 16px; margin-top: 16px;">
								<a href="http://asosaltinkummotel.com" style="color: #439fe0; font-weight: bold; text-decoration: none; word-break: break-word;">Asos Altınkum Motel</a> websitesi tarafından gönderilmiştir.  •
								<a href="http://digitallence.com" style="color: #439fe0; font-weight: bold; text-decoration: none; word-break: break-word;">Digitallence</a><br><a href="#" style="color: #989EA6; font-weight: normal; text-decoration: none; word-break: break-word; pointer-events: none;">Şair Leyla Sokak, No:7 •  Beşiktaş, İstanbul  •  34353</a>
							</p>
						</div>
					</td>
				</tr></tbody></table></td>
	</tr></tbody></table>
</body></html>
