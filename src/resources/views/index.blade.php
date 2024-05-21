<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
  <header class="header">
    <h1 class='title'>FashionablyLate</h1>
</header>
<main>
<h2>Contact</h2>
<form class="form" action="/confirm" method="post">
    @csrf 
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">*</span>
        </div>
        <div class="form__group-content">
        <div class="form__group-content name">
            <div class="form__input--text">
                <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}"/>
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form__input--text">
                <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}"/>
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">*</span>
        </div>
        <div class=form__group-item>
              <input type="radio"  name="gender" value = 1 checked>男性
              <input type="radio" name ="gender" value = 2>女性
              <input type="radio" name ="gender" value = 3>その他
              @error('gender')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">*</span>
        </div>
        <div class="form__input--text">
        <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
        </div>
        @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">*</span>
        </div>
        <div class="form__input--text">
            <div class="phone_number">
                <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}"/>-
                <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}"/>-
                <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}"/>
            </div>
            @error('tel1')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              @error('tel2')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              @error('tel3')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">*</span>
        </div>
        <div class="form__input--text">
        <input type="text" name="adress" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('adress') }}"/>
        </div>
        @error('adress')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__input--text">
        <input type="text" name="building" placeholder="千駄ヶ谷ビル101" />
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">*</span>
        </div>
        <div class="form__input--text">
        <select name="category_id">
        <option selected disabled hidden>選択してください</option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->content }}</option>
          @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
    </div>
    <div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問い合わせの内容</span>
        <span class="form__label--required">*</span>
    </div>
    <div class="form__input--text">
        <textarea name="detail" placeholder="お問い合わせの内容をご記載ください" value="{{ old('detail') }}"></textarea>
    </div>
    @error('detail')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<button class="form__button-submit" type="submit">確認画面</button>
</form>
</main>
</html>
