<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Magic Link Login — uiCookies</title>
	<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(1200px 600px at 50% -10%, #e0f2fe, #f8fafc);
            padding: 24px;
            color: #0f172a
        }

        .card {
            width: 100%;
            max-width: 400px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 44px 38px;
            box-shadow: 0 18px 40px -16px rgba(15, 23, 42, .15);
            text-align: center
        }

        .wand {
            width: 56px;
            height: 56px;
            margin: 0 auto 18px;
            border-radius: 16px;
            background: #0ea5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 22px -8px rgba(14, 165, 233, .6)
        }

        .wand svg {
            width: 28px;
            height: 28px;
            fill: #fff
        }

        h1 {
            font-size: 1.45rem;
            letter-spacing: -.02em;
            margin-bottom: 8px
        }

        .sub {
            color: #64748b;
            font-size: .92rem;
            line-height: 1.55;
            margin-bottom: 26px
        }

        input {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-size: .95rem;
            text-align: center;
            transition: border-color .15s, box-shadow .15s
        }

        input:focus {
            outline: none;
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, .15)
        }

        button {
            width: 100%;
            margin-top: 14px;
            padding: 13px;
            border: 0;
            border-radius: 12px;
            background: #0ea5e9;
            color: #fff;
            font-weight: 700;
            font-size: .95rem;
            cursor: pointer;
            transition: background .15s
        }

        button:hover {
            background: #0284c7
        }

        .hint {
            margin-top: 20px;
            font-size: .8rem;
            color: #94a3b8
        }

        .hint a {
            color: #0ea5e9;
            font-weight: 600;
            text-decoration: none
        }

        .success {
            display: none
        }

        .card.sent .form-state {
            display: none
        }

        .card.sent .success {
            display: block
        }

        .success .wand {
            background: #10b981;
            box-shadow: 0 10px 22px -8px rgba(16, 185, 129, .55)
        }

        .success p {
            color: #64748b;
            font-size: .92rem;
            line-height: 1.6
        }

        .success strong {
            color: #0f172a
        }

        .resend {
            margin-top: 18px;
            font-size: .85rem
        }

        .resend a {
            color: #0ea5e9;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer
        }
	</style>
</head>
<body>
<div class='card' id='card'>
	<div class='form-state'>
		<div class='wand'>
			<svg viewBox='0 0 24 24'>
				<path d='M7.5 5.6 9 3l1.5 2.6L13 7l-2.5 1.4L9 11 7.5 8.4 5 7l2.5-1.4zM18 9l1 1.8L21 12l-2 1.2L18 15l-1-1.8L15 12l2-1.2L18 9zM10.5 12.9 3 20.4 4.6 22l7.5-7.5-1.6-1.6z'/>
			</svg>
		</div>
		<h1>Registration form</h1>
		<p class='sub'>Please enter asked information for using all of our services</p>
		<form action="" method="POST">
<!--			user name-->
			<label for='username' >User name</label><br>
			<input name="username" type='text' id='username' placeholder='Ehsan sayyadi'  required><br>
<!--			email-->
			<label for='email' >Email</label><br>
			<input type='email' name="email" id='email' placeholder='you@example.com'  required><br>
<!--			password-->
			<label for='password' >password</label><br>
			<input type='password' name="password" id='password' placeholder='12345678'  required><br>
<!--			confirm pass-->
			<label for='confirm-password' >Confirm your password</label><br>
			<input type='email' name="confirm-password" id='confirm-password' placeholder='12345678'  required><br>

			<button type='submit'>Email me a magic link</button>
		</form>
		<p class='hint'>Prefer a password? <a href='#'>Use classic login</a></p>
	</div>
	<div class='success'>
		<div class='wand'>
			<svg viewBox='0 0 24 24'>
				<path d='M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z'/>
			</svg>
		</div>
		<h1>Check your inbox</h1>
		<p>We sent a sign-in link to <strong id='sentTo'></strong>. It expires in 15 minutes.</p>
		<p class='resend'>Nothing arrived? <a onclick="document.getElementById('card').classList.remove('sent')">Try
				again</a></p>
	</div>
</div>
</body>
</html>
