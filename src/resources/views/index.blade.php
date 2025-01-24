<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="">
    <!--webフォント↓ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head> <!--共通部分はあとでLayoutsへ移動 -->
<body>
  <header class="header">
    <div class="header__inner">
     <a class="header__logo"href="/">
       FashionablyLate
     </a>
    </div>
  </header>

 <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
    
     <form class="form" action="/confirm" method="POST"><!--フォームの入力内容をPOSTでControllerへ送る -->
      @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
             <div class="form__input--text">
                <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" required />
                @error('last_name')
                <span class="error">{{ $message }}</span>
                @enderror

                <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" required />
                @error('first_name')
                <span class="error">{{ $message }}</span>
                @enderror
             </div>
             <!-- 　<div class="form__error">
                @error('last_name')
                {{ $message }}
                @enderror
                @error('first_name')
                {{ $message }}
                @enderror
            </div>　inputタグの下に分けて移動させた-->
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
                <div class="radio-wrap">
                    <input type="radio" name="gender" value="1" {{ old('gender', 1) == 1 ? 'checked' : '' }}> 男性
                    <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}> 女性
                    <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }}> その他
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" required />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="例:09012345678" value=" {{ old('tel') }}" required />
                </div> <!--電話番号分割入力にする -->
                <div class="form__error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span Class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" required />
                </div>
                <div class="form__error">
                    @error('adress')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-tilte">
                <span class="form__label--item">建物名</span>
                <div class="form__group-content">
                    <div class="form__input--text">
                     <input type="text" name="building" placeholder="例:千駄ヶ谷マンション" value="{{ old('building') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                    <select name="content" required>
                        <option value=""{{ old('content') == '' ? 'selected' : '' }}>選択してください</option>
                        <option value="1"{{ old('content') == 1 ? 'selected' : '' }}>商品のお届けについて</option>
                        <option value="2"{{ old('content') == 2 ? 'selected' : '' }}>商品の交換について</option>
                        <option value="3"{{ old('content') == 3 ? 'selected' : '' }}>商品トラブル</option>
                        <option value="4"{{ old('content') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                        <option value="5"{{ old('content') == 5 ? 'selected' : '' }}>その他</option>
                    </select>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <div class="form__label--item">お問い合わせ内容</div>
                <div class="form__label--required">※</div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" required>{{ old('detail') }}</textarea>
                    </div>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
     </form>
    </div>


 </main>
    
</body>
</html>