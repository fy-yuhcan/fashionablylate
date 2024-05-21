<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
  <header class="header">
    <h1 class='title'>FashionablyLate</h1>
  </header>
  <main>
    <h2>Admin</h2>
    <form class="form" action="/admin/search" method="get">
      @csrf 
      <!-- 検索フォームの各フィールド -->
      <div class="form__group">
        <input type="text" id="name_or_email" name="keyword" placeholder="名前またはメールアドレスを入力">
      </div>
      <div class="form__group">
        <select id="gender" name="gender">
            <option selected disabled hidden>性別</option>
            <option value="">全て</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>
      </div>
      <div class="form__group">
      <select id="inquiry_type" name="category_id">
            <option selected disabled hidden>お問い合わせの種類</option>
            <option value=1>商品のお届けについて</option>
            <option value=2>商品の交換について</option>
            <option value=3>商品トラブル</option>
            <option value=4>ショップへのお問い合わせ</option>
            <option value=5>その他</option>
        </select>
      </div>
      <div class="form__group">
        <input type="date" id="date" name="date">
      </div>
      <div class="form__group">
        <button type="submit">検索</button>
      </div>
      <div class="form__group">
      <form action="/admin" method="get">
    <input type="submit" value="リセット">
  </form>
      </div>
    </form>
      <!-- 結果テーブル -->
      <th class="todo-table__header">
      <span class="todo-table__header-span">お名前</span>
      <span class="todo-table__header-span">性別</span>
      <span class="todo-table__header-span">メールアドレス</span>
      <span class="todo-table__header-span">お問い合わせの種類</span>
      </th>
      <br>
      <!-- ページネーション -->
    @if(isset($selected_contact))
    {{ $selected_contact->links() }}
      @foreach ($selected_contact as $contact)
      <tr>
    <td>
      {{$contact->first_name}} {{$contact->last_name}}
    </td>
    <td>
        @if( $contact->gender == 1)
        男性
        @elseif($contact->gender == 2)
        女性
        @else
        その他
        @endif
    </td>
    <td>
      {{$contact->email}}
    </td>
    <td>
      {{$contact->category->content}}
    </td>
    <td>
        <button type="submit"><a href="#modal">詳細</a></button>
    </td>
  </tr>
    <!-- モーダルウィンドウ -->
<div id="modal">
  <div class="message-wrapper">
    <a href="#" class="close"></a>
    <div class="message-box">
     {{ $contact}}
    </div>
  </div>
</div>
<br>
      @endforeach
    @else
    {{ $contacts->links() }}
      @foreach ($contacts as $contact)
  <tr>
    <td>
      {{$contact->first_name}} {{$contact->last_name}}
    </td>
    <td>
        @if( $contact->gender == 1)
        男性
        @elseif($contact->gender == 2)
        女性
        @else
        その他
        @endif
    </td>
    <td>
      {{$contact->email}}
    </td>
    <td>
      {{$contact->category->content}}
    </td>
    <td>
        <button type="submit"><a href="#modal">詳細</a></button>
    </td>
  </tr>
    <!-- モーダルウィンドウ -->
<div id="modal">
  <div class="message-wrapper">
    <a href="#" class="close"></a>
    <div class="message-box">
     {{ $contact}}
    </div>
  </div>
</div>
<br>
@endforeach
@endif
  </main>
</body>

</html>
