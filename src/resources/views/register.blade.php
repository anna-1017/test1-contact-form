<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

    <!--webフォント↓ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <!--共通部分はあとでLayoutsへ移動 -->
</head>
<body>
    <header class="header">
    <div class="header__inner">
     <a class="header__logo"href="/">
       FashionablyLate
     </a>
    </div>
  </header>
 <!--共通部分はあとでLayoutsへ移動 -->
 <main>
    <div class="register-form_content">

     <div class="register-form_heading">
        <h2>Register</h2>
     </div>
     <form class="form" action="/register" method="post">
      @csrf 
        <div class="form__group">
         <div class="form__group-title">
            <span class="form__label--item">お名前</span>
         </div>
         <div class="form__group-content">
         <div class="form__input--text">
          <input type="text" name="name" placeholder="例:山田  太郎" value="{{ old('name') }}" required />
          <div class="error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
         </div>
        </div>
        
        <div class="form__group">
         <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
         <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" required />
         </div>
          <div class="error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>

        <div class="form__group">
         <div class="form__group-title">
          <div class="form__label--item">パスワード</div>
         <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" placeholder="例:coachtech1106" required />
          </div>
            <div class="error">
             @error('password')
             {{ $message }}
             @enderror
            </div>
          </div>
         </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
     </form>
    </div>
 

    
 </main>
</body>
</html>