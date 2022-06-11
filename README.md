# 筋トレ記録アプリ「筋ログ」
## 概要
日々の筋トレの記録を、管理・共有できるWebアプリです。

URL: http://kinlog.herokuapp.com

<img width="400" alt="スクリーンショット 2022-03-08 14 21 34" src="https://user-images.githubusercontent.com/64354869/157171629-d43c6df2-668d-400b-bfba-bf11c34324be.png"> 




右上のログインボタンからゲストログインできます。

<img width="400" alt="スクリーンショット 2022-03-09 10 32 52" src="https://user-images.githubusercontent.com/64354869/157354935-f44e2b92-23aa-4bb1-98ed-b5563ea07c32.png">


約一年前、スポーツジムに入会したことがきっかけで筋トレにハマり、それから現在まで毎週3~4回くらいの頻度でトレーニングを続けてきました。

ハマればハマるほどだんだん筋トレメニューが増えていき、トレーニングをする際「あれ、前回のダンベルプレス何kgでやったっけなあ。」「あれ、ベンチプレス先週何kgだったけ」と前回の記録を忘れてしまうことが多々ありました。

そこで筋トレ記録アプリ「筋ログ」を開発しました。

このWEBアプリでは筋トレのトレーニング名・鍛えた部位・ダンベルやバーなどの重量・回数・セット数を記録・管理することができます。

スマートフォンにも対応しているのでスポーツジムでも前回の記録を確認することができます。

「筋ログ」のおかげで僕の筋肉は順調に大きくなっています。（胸板が1cm分厚くなりました。）

## 使用技術
- PHP(laravel)
- JavaScript(vue.js)
- bootstrap
- Docker
- postgreSQL
- nginx

## 機能一覧
- ユーザー機能
- 記録投稿機能
- 記録一覧画面
- フォロー機能
- いいね機能
### ユーザー機能
- ログイン・ログアウト機能
- Googleログイン機能
- ユーザーページ
<!-- 画像 -->
ユーザー登録・ログインは、Googleアカウントを使う方法と、ユーザー名・メールアドレス・パスワードを入力する方法があります。
<!-- 画像 -->
ユーザーページでは、ユーザーのフォロー数・フォロワー数・投稿した記録一覧・いいねした記録一覧・フォロー中のユーザー一覧・フォロワーの一覧を確認することができます。

### 記録投稿・更新機能
<img width="500" alt="スクリーンショット 2022-03-08 14 55 42" src="https://user-images.githubusercontent.com/64354869/157175425-af8d19c9-c11a-4373-9533-0ff236d991f4.png">
トレーニング名、鍛えた部位（5つまで）、ダンベルやバーなどの重量、回数、セット数を入力して記録することができます。
<!-- 画像 -->
記録一覧画面の右上のタブから記録の更新をすることができます。

### 記録一覧画面
#### ユーザー別一覧画面
<img width="300" alt="スクリーンショット 2022-03-08 14 35 19" src="https://user-images.githubusercontent.com/64354869/157173024-e9a37f33-0128-4db6-9a1f-48abfb7e7fa8.png">
  ユーザーごとに投稿した記録を見ることができます。
  
#### いいねした記録一覧画面
  <img width="300" alt="スクリーンショット 2022-03-08 14 39 04" src="https://user-images.githubusercontent.com/64354869/157173438-c7657ec8-1d13-47db-929a-7ca90fc8fdf5.png">
  ユーザーがいいねした記録を見ることができます。
  
#### 部位タグ別記録一覧
  <img width="300" alt="スクリーンショット 2022-03-08 14 40 27" src="https://user-images.githubusercontent.com/64354869/157173598-0ada827c-f12f-46fc-807e-5d0b4f107ee1.png">

  部位タグごとの記録を見ることができます。

### フォロー機能
- フォロー・フォロワー一覧画面
<img width="300" alt="スクリーンショット 2022-03-08 14 51 27" src="https://user-images.githubusercontent.com/64354869/157174887-bccbed77-948f-46c2-8283-087722e20ebc.png">

- フォロー解除機能

### ページネーション

<img width="290" alt="スクリーンショット 2022-04-30 19 13 50" src="https://user-images.githubusercontent.com/64354869/166101406-d8f377c9-d5f0-4d43-9eb8-e4735c62b101.png">



## テーブル構成
users・articles・likes・tags・article_tag・followsの６のテーブルで構成されています。
usersテーブルはユーザーを、articleテーブルでは記録を、likesテーブルは誰がどの記録をいいねしているかを、tagsテーブルは部位タグを、article_tagはどの記録に何の部位タグがついているかを、followsテーブルはどのユーザーがどのユーザをフォローしているかをそれぞれ管理しています。


## ER図
![Untitled Diagram drawio (3)](https://user-images.githubusercontent.com/64354869/156914764-ff9f0681-ea21-4b12-b687-f8cc8c152e70.svg)
