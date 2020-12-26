<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/loginpage.css"> 
   
<body>

    <div class="box shadow">
        <div id="formarea">
            <ul class="select-menu">
                <li>
                    <label for="button1">Üye ol</label></li>

                <li><label for="button2">Giriş Yap</label>
                </li>
            </ul>
            <input id="button1" name="button" type="radio">
            <input id="button2" name="button" checked type="radio">






            <div class="signup">
                <div class="singupleft">Email<br>Şifre</div>
                <div class="singupright">
                    <form><label>
                        <input name="email" type="email" style="margin-bottom: 0;" required>
                    </label><br><input type="password" minlength="6" required>
                        <br><button type="submit">Giriş</button>
                    </form>
                </div>
            </div>


            <div class="login">
                <div class="loginleft">Ad<br>Soyad<br>E-posta<br>Şifre<br>Şifreyi Tekradan Giriniz</div>
                <div class="loginright">
                    <form style="display: block;"method="POST" action="createusers"> 
                    @csrf
                        <input name="name" v-model="name"  type="text" minlength="2" required><br>
                        <input name="surname" v-model="surname" type="text" minlength="2" required><br> <input v-model="email"  name="email" type="email" style="margin-bottom: 0;" required><br><input v-model="pass2" type="password" minlength="6" required>
 
 
                        <br> <input name="password"  v-model="pass1" type="password" minlength="6" required> <br><button type="submit">Giriş</button> <div v-if="pass1==pass2&&pass1!=''&&pass2!=''&&name!=''&&surname!=''&&email!=''">

                        
Eşittir
</div><br> @{{ pass1.length }}
 
 
                    </form> 
                </div>
            </div>
        </div>
 
    </div>




</body>

</html>


<script src="{{asset('js/app.js')}}"></script> 

 
 