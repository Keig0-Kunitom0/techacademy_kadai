# サービス概要
古本をユーザー同士が売買しあうC to Cのサイト。
古本を出品する出品者（ユーザー）と出品された古本を買う購入者(ユーザー)から成るサイト。

#　使用予定フレームワーク・ライブラリ・API
Laravel 6
Twitter bootstrap 4
API名


#　機能一覧
## ファーストバージョン
* ユーザー登録
* ログイン/ログアウト
* 出品する
* 出品物(古本)のバーコード読み取り
* 出品物お気に入り機能
* フォロー/フォロワー
* 出品者の星5段階評価
* 出品物へのコメント
* 出品物を購入する
* 出品物をキーワード検索
* 通知(出品物がお気に入り登録された、フォローされた、自分の出品物にコメントが来た、出品物に送信したコメントに返信が来た、出品した商品が購入された、商品の受取りの確認完了)
* 出品する商品の画像を撮影するためのカメラ機能
* バーコードで商品のデータを読み込む機能
* 出品商品の情報入力、編集
* 商品検索画面で売り切れた商品にはsold outと表示するようにする。


##　セカンドバージョン

# 画面一覧
##　ファーストバージョン
* トップページ
* ログイン画面
* 新規会員登録画面
* 商品検索(商品一覧)
* グローバルナビゲーション(商品検索、お気に入り一覧、アカウント詳細、通知一覧、出品画面)
* 出品した本一覧画面(自分or他人)
* アカウント詳細画面(自分or他人)
* フォロー一覧画面(ユーザー名をクリックするとアカウント詳細ページに遷移)
* フォロワー一覧画面(ユーザー名をクリックするとアカウント詳細ページに遷移)
* 出品画面(出品する商品の情報入力画面)
* 出品商品の情報編集画面
* カメラ撮影画面
* バーコード読み取り画面
* 取引画面(商品が購入されたら受取り側に「商品を発送してください」というメッセージを表示、商品の配送情報、送り状番号を表示　商品の配達が完了したら購入者側の取引画面に受取り完了ボタンが表示される）
* 出品された商品の詳細画面(お気に入りボタン、その出品物へのコメント一覧画面への遷移ボタン設置、出品者の名前をクリックしたらアカウント詳細ページ画面へ遷移)
* お気に入り一覧画面(自分がお気に入りにしている本)
* 商品詳細ページ+商品へのコメント一覧(お気に入りボタン、出品者の名前をクリックしたらアカウント詳細ページ画面へ遷移)
* 通知一覧画面

##　セカンドバージョン

# テーブル一覧
* users
* user_follow
* used book
* user_favorite